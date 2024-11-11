(function($, APP) {
    'use strict';

    //
    // *** Events
    //    convertComponentToCustomHTML    [id]
    //    convertedComponentToCustomHTML  [id]
    //    renderCodeEditorChanges         [id]
    //    renderedCodeEditorChanges       [id]
    //

    var isSecondaryComponent = APP.isSecondaryComponent || function() { return false; };

    APP.regExtension({
        name: 'code-editor',
        global: {
            // custom template for code editor component
            customTemplate: '<div mbr-id="_anchor" mbr-custom-code="true"></div>',

            /* PHP encode/decode */
            encodeCodeEditorPHP: function(text, component) {
                component._PHPplaceholders = [];

                return text.replace(/<\?[\w\W]+?\?>/g, function($0) {
                    var num = component._PHPplaceholders.length;
                    component._PHPplaceholders.push($0);
                    return '[PHP_CODE_' + num + ']';
                });
            },
            decodeCodeEditorPHP: function(text, component) {
                if (component._PHPplaceholders && component._PHPplaceholders.length) {
                    text = text.replace(/[[{]{1}PHP_CODE_([0-9]+)[\]}]{1}/ig, function($0, $1) {
                        return component._PHPplaceholders[$1] || $0;
                    });
                    text = text.replace(/\?>=""/ig, '?>').replace(/\?>=''/ig, '?>');
                }

                return text;
            },

            /* JS encode/decode */
            encodeCodeEditorJS: function(text, component) {
                component._JSplaceholders = [];

                return text.replace(/<script[\w\W]+?<\/script>/g, function($0) {
                    var num = component._JSplaceholders.length;
                    if (component._JSplaceholders.indexOf($0) === -1) component._JSplaceholders.push($0);

                    // used in amp-animation
                    if ($0.indexOf('type="application/json"') !== -1 ||
                        $0.indexOf('type=\'application/json\'') !== -1) {
                        return $0;
                    }

                    return '[JS_CODE_' + num + ']';
                });
            },
            decodeCodeEditorJS: function(text, component) {
                if (component._JSplaceholders && component._JSplaceholders.length) {
                    text = text.replace(/[[{]{1}JS_CODE_([0-9]+)[\]}]{1}/ig, function($0, $1) {
                        return component._JSplaceholders[$1] || $0;
                    });
                }

                return text;
            },

            // Return component html
            getComponentHTMLforEditor: function(ID, component) {
                return this.getResultHTML(this.currentPage, ID).then(function(resultHTML) {
                    var result = this.applyFilter(
                        'resultHTMLforEditor',
                        resultHTML,
                        component || this.getComponent(ID)
                    );
                    // remove id
                    result.find('> *').removeAttr('id');

                    // change editable attributes
                    result.find('[data-app-edit]').each(function() {
                        var $item = $(this);
                        var type = $item.attr('data-app-edit');
                        var classname = 'mbr-editable-' + type;

                        if (type === 'buttons') {
                            var classname = 'mbr-editable-button';
                            $item = $item.find('[data-app-btn]');
                        }
                        if (type === 'menu') {
                            var classname = 'mbr-editable-menu-item';
                            $item = $item.find('[data-app-btn]');
                        }
                        $item.addClass(classname);
                    });

                    // to string
                    result = result.html();
                    result = this.cleanHTMLplease(result);

                    // prepare <iframe> video tags
                    result = this.APP.preparePublishVideos(result);
                    return $.Deferred().resolve(result);
                }.bind(this));
            },
            // convert component to custom HTML
            convertComponentToCustomHTML: function(ID) {
                var component = this.getComponent(ID);

                this.fire('convertComponentToCustomHTML', ID);

                return this.getComponentHTMLforEditor(ID, component).then(function(res) {
                    // add custom html
                    component._customHTML = res;
                    component._customHTML = this.encodeCodeEditorPHP(component._customHTML, component);
                    component._customHTML = this.encodeCodeEditorJS(component._customHTML, component);
                    // extend custom css from user additional styles (for ex. when user change font in block)
                    var tempCSS = this.getComponentStyles(component, true);
                    tempCSS = tempCSS.google + tempCSS.css;
                    component._customCSS = tempCSS;

                    // remove component custom styles
                    delete component._styles;

                    // removed some methods
                    delete component._onParamsChange;
                    delete component._publishFilter;

                    // add new template
                    component._customTemplate = true;

                    // add html code to component
                    var rendered = $(this.customTemplate);
                    rivets.bind(rendered, component);
                    var parent = this.$template.find('[data-app-component-id=' + ID + '] > .app-component-content');
                    parent.html(rendered);

                    // remove component params button from component menu
                    this.$template.find('[data-app-component-id=' + ID + '] .app-component-menu .component-params').remove();

                    this.prepareCodeEditor(ID);

                    this.fire('convertedComponentToCustomHTML', ID);
                }.bind(this));
            },

            // add code editable id for items
            addCodeEditableID: function(id) {
                var _this = this;
                var component = _this.getComponent(id);

                if (!isSecondaryComponent(component) && typeof component._customHTML != 'undefined') {
                    var $context = $('<div>').html(component._customHTML);

                    // add code editable id
                    $context.find('.mbr-editable-content, .mbr-editable-full, .mbr-editable-button, .mbr-editable-menu-item, .mbr-editable-image').each(function() {
                        $(this).attr('code-editable-id', _this.uniqNum());
                    });

                    component._customHTML = $context.html();
                    $context.remove();
                }
            },

            // prepare code editor changes and init summernote editor
            prepareCodeEditor: function(id, $context, publish) {
                $context = $context || this.$template;
                var component;
                if (typeof id === 'object') {
                    component = id;
                    id = component._id;
                } else {
                    component = this.getComponent(id);
                }

                if (isSecondaryComponent(component)) {
                    var $component = $context.find('[data-app-component-id=' + id + '] > .app-component-content'),
                        secondaryComponent = this.getSecondaryComponent(component);
                    if (!secondaryComponent.isActualTemplate()) {
                        if (!publish) $component.find('> *').trigger('delete.cards');
                        var $template = secondaryComponent.update().createElementFromTemplate();
                        rivets.unbind($component).bind($template, component);
                        $component.html($template);
                        this.fire('loadedComponent', component, this.currentPage, $context, publish);
                    }
                } else if (component._customHTML) {
                    var $component = $context.find('[data-app-component-id=' + id + ']');
                    var customCode = $component.find('[mbr-custom-code]');
                    customCode.html(component._customHTML);

                    if (!publish) {
                        $component.find('.app-component-content > *').trigger('add.cards');

                        // fix height of code editor
                        $component.css('min-height', 0);
                        var someElHeight = $component.find('[mbr-custom-code] *').toArray().some(el => $(el).height() !== 0);
                        if ($component.height() === 0 && (!someElHeight || !$component.find('[mbr-custom-code] *').length)) {
                            $component.css('min-height', '40px');
                        }
                    }
                }
            },

            // render code editor changes
            renderCodeEditorChanges: function(id) {
                this.fire('renderCodeEditorChanges', id);
                var component = this.getComponent(id);
                this.addCodeEditableID(id);
                this.prepareCodeEditor(id);
                this.fire('renderedCodeEditorChanges', id);
                return this.renderComponentsStyles(false, this.currentPage, component);
            },

            // change editable element
            changeEditableElement: function(element) {
                var _this = this;
                var $element = $(element);
                if ($element.is('[code-editable-id]') && $element.parents('[mbr-custom-code]:eq(0)').length) {
                    var editableID = $element.attr('code-editable-id');
                    var componentID = $element.parents('[data-app-component-id]:eq(0)').attr('data-app-component-id');
                    var component = _this.getComponent(componentID);

                    if (component._customHTML) {
                        var $html = $('<div>').html(component._customHTML);
                        var $editable = $html.find('[code-editable-id=' + editableID + ']');

                        // if cahnged button - save all buttons
                        if ($element.is('.mbr-editable-button')) {
                            $editable.parent().html(_this.cleanHTMLplease($element.parent().html(), true));
                        } else if ($element.is('.mbr-editable-menu-item')) {
                            $editable.parent().parent().html(_this.cleanHTMLplease($element.parent().parent().html(), true));
                        } else if ($element.is('.mbr-editable-image')) {
                            $editable.attr('src', $element.attr('src'));
                        } else {
                            var $tmp = $('<div>').html($element.clone());
                            $editable.replaceWith(_this.cleanHTMLplease($tmp.html(), true));
                            $tmp.remove();
                        }

                        component._customHTML = $html.html();

                        $html.remove();
                    }
                }
            }
        },
        events: {
            load: function() {
                var _this = this;
                /* filters */
                // result component HTML (when publish)
                _this.addFilter('getResultHTMLcomponent', function(html, component) {
                    if (component._customHTML) {
                        html = _this.decodeCodeEditorJS(html, component);
                        html = _this.decodeCodeEditorPHP(html, component);
                    }
                    return html;
                });

                // prevent component params if code editor enabled
                _this.addFilter('getComponentParams', function(params) {
                    if (typeof params.current === 'undefined') {
                        return false;
                    } else {
                        return params;
                    }
                });

                // prevent styles save
                _this.addFilter('preventComponentStylesSave', function(prevent, component, $item, property, value, googleLink) {
                    if (!component._customTemplate) {
                        return prevent;
                    }

                    $item.css(property, value);

                    if (component._customCSS && component._customCSS.indexOf(googleLink) === -1) {
                        component._customCSS = '@import url(' + googleLink + ');\n' + component._customCSS;
                    }

                    return true;
                });

                // editable items
                _this.addFilter('summernoteEditableItems', function($items, $context) {
                    if ($context.is('[code-editable-id]:not(img)'))
                        return $items.add($context);
                    return $items;
                });

                // remove editable items in cleaner
                _this.addFilter('cleanHTMLplease', function(HTML, forJSON) {
                    HTML.find('[code-editable-id]')
                        .removeAttr('contenteditable id' + (forJSON ? '' : ' data-app-btn data-app-list-item code-editable-id'))
                        .removeClass('note-air-editor note-editable');
                    HTML.find('[custom-code]').removeAttr('custom-code data-rv-view');
                    return HTML;
                });

                /* change component template */
                _this.addFilter('loadComponentTemplate', function(template, component) {
                    return component._customTemplate ? _this.customTemplate : template;
                });

                /* additional styles */
                _this.addFilter('getComponentStyles', function(styles, component) {
                    if (!isSecondaryComponent(component) && typeof component._customCSS != 'undefined') {
                        styles.css += component._customCSS || '';
                    }
                    return styles;
                });

                /* redraw Style Changer & reload current page if extension added after app load */
                if (!$.isEmptyObject(_this.APP.projectSettings.theme)) {
                    _this.APP.redrawStyleChanger();
                }

                if (_this.$template.find('.app-component:eq(0)').length) {
                    _this.switchPage(_this.currentPage);
                }
            },

            loadedComponent: function(component, page, $context) {
                var comp = APP.$template.find('[data-app-component-id="' + component._id + '"]');
                if(comp.height() < 40 && !comp.find('.app-component-content *').toArray().some(el => $(el).height() !== 0)) {
                    comp.css('min-height', '40px');
                }
                if (isSecondaryComponent(component)) return;
                this.prepareCodeEditor(component, $context, component._checkPublish());
            },

            summernoteBlur: function(element) {
                this.changeEditableElement(element);
            }
        }
    });
}(jQuery, mbrAppCore));

//# sourceMappingURL=core.js.map
