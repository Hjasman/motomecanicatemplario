<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Motomecanica Templario</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="generator" content="Mobirise v5.9.13, a.mobirise.com">
                <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
                <link rel="shortcut icon" href="assets/images/templar.png" type="image/x-icon">
                <meta name="description" content="Taller de mecánica especializado en motos. Servicios de reparación, mantenimiento y personalización. Utilizando Laravel para una gestión eficiente.">
                <title>Motomecanica Templario</title>
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/web/assets/mobirise-icons2/mobirise2.css?rnd=1716499131275">
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/bootstrap/css/bootstrap.min.css?rnd=1716499131275">
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/bootstrap/css/bootstrap-grid.min.css?rnd=1716499131275">
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/bootstrap/css/bootstrap-reboot.min.css?rnd=1716499131275">
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/parallax/jarallax.css?rnd=1716499131275">
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/dropdown/css/style.css?rnd=1716499131275">
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/socicon/css/styles.css?rnd=1716499131275">
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/theme/css/style.css?rnd=1716499131275">
                <link rel="preload" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap&display=swap"></noscript>
                <link rel="stylesheet" href="https://r.mobirisesite.com/463307/assets/css/mbr-additional.css?rnd=1716499131275" type="text/css">

    </head>
    <body class="antialiased " background="rgb(0,0,0)" >
       
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    
                    @auth
                        <a href="" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home &nbsp&nbsp&nbsp/</a>
                        <a href="#footer-4-udDoRr24HO" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contacto &nbsp&nbsp&nbsp/</a>
                        <a href="#sobre" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sobre Nosotros &nbsp&nbsp&nbsp/</a>
                        <a href="" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Ofertas&nbsp&nbsp&nbsp/</a>
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">SigestCRM</a>
                   
                    @else
                        <a href="" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home &nbsp&nbsp&nbsp/</a>
                        <a href="#footer-4-udDoRr24HO" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contacto &nbsp&nbsp&nbsp/</a>
                        <a href="#sobre" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sobre Nosotros &nbsp&nbsp&nbsp/</a>
                        <a href="" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Ofertas&nbsp&nbsp&nbsp/</a>
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> 
                        
                    @endauth
                </div>
            @endif

            <section data-bs-version="5.1" class="header18 cid-udDoRqXd7s mbr-fullscreen" data-bg-video="https://www.youtube.com/embed/LQ7YHzYuVWw?autoplay=1&amp;loop=1&amp;playlist=LQ7YHzYuVWw&amp;t=20&amp;mute=1&amp;playsinline=1&amp;controls=0&amp;showinfo=0&amp;autohide=1&amp;allowfullscreen=true&amp;mode=transparent" id="hero-16-udDoRqXd7s">
            
          
                <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);"></div>
                
                <div class="container-fluid">
                    
                  <div class="row">
                    
                    <div class="content-wrap col-12 col-md-12">
                        
                      <h1 class="mbr-section-title mbr-white mb-5 display-1" >
                        <strong>Motomecanica Templario</strong>
                      </h1>
                      
                      <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">¡Prepárate para una experiencia de reparación de motos como nunca antes! Nuestro taller te ofrece velocidad y calidad incomparables.</p>
                      <div class="mbr-section-btn">
                     
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <br><br>
      
            
            <section data-bs-version="5.1" class="features03 cid-uts5CPpGZK" id="news-1-uts5CPpGZK">
              
              
              <div class="container-fluid">
                <div class="row justify-content-center mb-5">
                  <div class="col-12 content-head">
                    <div class="mbr-section-head">
                      <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Novedades y Ofertas</strong>
                      </h4>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="item features-image col-12 col-md-6 col-lg-3 active">
                    <div class="item-wrapper">
                      <div class="item-img mb-3">
                        <img src="./ofertas_files/photo-1652277339235-d7136f52763b.jpeg" alt="" title="">
                      </div>
                      <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mt-0 mb-2 display-5">
                          <strong>¡Gran Oferta de Mantenimiento!</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">2024-11-01</p>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">Aprovecha un 20% de descuento en servicios de mantenimiento este mes. ¡No dejes pasar esta oportunidad!</p>
                        <div class="mbr-section-btn item-footer">
                          <a href="" class="btn item-btn btn-primary display-7">¡Aprovecha!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item features-image col-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                      <div class="item-img mb-3">
                        <img src="./ofertas_files/photo-1628474972017-4b7d37c8542a.jpeg" alt="" title="" data-slide-to="1" data-bs-slide-to="1">
                      </div>
                      <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
                          <strong>Reparaciones Rápidas y Efectivas</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">2024-11-03</p>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">¿Problemas con tu moto? ¡Nosotros lo solucionamos en un abrir y cerrar de ojos!</p>
                        <div class="mbr-section-btn item-footer">
                          <a href="" class="btn item-btn btn-primary display-7">¡Aprovecha!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item features-image col-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                      <div class="item-img mb-3">
                        <img src="./ofertas_files/photo-1610359099570-3b58753c887c.jpeg" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
                      </div>
                      <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
                          <strong>Cambio de Aceite a Buen Precio</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">2024-11-05</p>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">¡No dejes que tu moto se ahogue! Cambio de aceite desde 60 Bs. .</p>
                        <div class="mbr-section-btn item-footer">
                          <a href="" class="btn item-btn btn-primary display-7">¡Aprovecha!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item features-image col-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                      <div class="item-img mb-3">
                        <img src="./ofertas_files/photo-1561270779-b4efce02efd3.jpeg" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
                      </div>
                      <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
                          <strong>Diagnóstico Sin Complicaciones</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">2024-11-06</p>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">¿Ruidos extraños? Ven y descubre qué le pasa a tu moto sin sorpresas.</p>
                        <div class="mbr-section-btn item-footer">
                          <a href="" class="btn item-btn btn-primary display-7">¡Aprovecha!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="loop-container" style="position: relative; display: inline-flex; white-space: nowrap; transform: translateX(-29.7%);">
                <div class="item display-1" data-linewords="Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *" data-direction="-1" data-speed="0.05">Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *&nbsp;</div>
        
                <div class="item display-1" data-linewords="Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *" data-direction="-1" data-speed="0.05" style="position: absolute; left: 100%;">Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *&nbsp;</div>
              </div>
            <section data-bs-version="5.1" class="image02 cid-uts5CPp6ux mbr-fullscreen mbr-parallax-background" id="image-13-uts5CPp6ux" style="z-index: 0; background-image: none; position: relative;">
                <div class="container">
                    <div class="row"></div>
                </div>
            <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://r.mobirisesite.com/875312/assets/images/photo-1565701964127-a3f37fdbb46b.jpeg&quot;); position: absolute; top: 0px; left: 0px; width: 1478.4px; height: 735.12px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -0.0600036px; transform: translate3d(0px, 270.94px, 0px);"></div></div></section>
            
            <section data-bs-version="5.1" class="gallery10 cid-uts5CPpPh5" id="features-61-uts5CPpPh5">
            
              <div class="container-fluid">
            
                  <div class="loop-container" style="position: relative; display: inline-flex; white-space: nowrap; transform: translateX(-29.7%);">
                    <div class="item display-1" data-linewords="Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *" data-direction="-1" data-speed="0.05">Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *&nbsp;</div>
            
                    <div class="item display-1" data-linewords="Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *" data-direction="-1" data-speed="0.05" style="position: absolute; left: 100%;">Mantenimiento Premium * Reparaciones Express * Diagnóstico Avanzado * Cambio de Aceite * Atención Personalizada * Precios Inmejorables *&nbsp;</div>
                  </div>
                
              </div>
            </section>
              <section data-bs-version="5.1" class="pricing1 cid-uts5CPeuIt" id="pricing-cards-1-uts5CPeuIt">
    
    
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 content-head">
                            <div class="mbr-section-head mb-5">
                                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                    <strong>Planes Locos</strong>
                                </h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb active">
                            <div class="item-wrapper">
                                <div class="item-head">
                                    <h5 class="item-title mbr-fonts-style mb-0 display-5">
                                        <strong>Básico</strong>
                                    </h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                                        <strong>120 bs.</strong>/Por Servicio
                                    </h6>
                                </div>
                                <div class="item-content">
                                    <p class="mbr-text mbr-fonts-style display-7">Mantenimiento básico para que tu moto ruja.</p>
                                </div>
                                <div class="mbr-section-btn item-footer">
                                    <a href="" class="btn item-btn btn-primary display-7">¡Contrátalo Ya!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb">
                            <div class="item-wrapper">
                                <div class="item-head">
                                    <h5 class="item-title mbr-fonts-style mb-0 display-5">
                                        <strong>Intermedio</strong>
                                    </h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                                        <strong>170 bs.</strong>/Por Servicio
                                    </h6>
                                </div>
                                <div class="item-content">
                                    <p class="mbr-text mbr-fonts-style display-7">Reparaciones y cambios de aceite, ¡sin dramas!</p>
                                </div>
                                <div class="mbr-section-btn item-footer">
                                    <a href="" class="btn item-btn btn-primary display-7">¡Contrátalo Ya!</a>
                                </div>
                            </div>
                        </div>
            
                        <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb">
                            <div class="item-wrapper">
                                <div class="item-head">
                                    <h5 class="item-title mbr-fonts-style mb-0 display-5">
                                        <strong>Avanzado</strong>
                                    </h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                                        <strong>210 bs.</strong>/Por Servicio
                                    </h6>
                                </div>
                                <div class="item-content">
                                    <p class="mbr-text mbr-fonts-style display-7">Diagnóstico completo y ajustes finos, ¡a toda velocidad!</p>
                                </div>
                                <div class="mbr-section-btn item-footer">
                                    <a href="" class="btn item-btn btn-primary display-7">¡Contrátalo Ya!</a>
                                </div>
                            </div>
                        </div>
            
                        <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb">
                            <div class="item-wrapper">
                                <div class="item-head">
                                    <h5 class="item-title mbr-fonts-style mb-0 display-5">
                                        <strong>Premium</strong>
                                    </h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                                        <strong>250 bs.</strong>/Por Servicio
                                    </h6>
                                </div>
                                <div class="item-content">
                                    <p class="mbr-text mbr-fonts-style display-7">Todo lo anterior más un lavado de lujo, ¡brilla como nuevo!</p>
                                </div>
                                <div class="mbr-section-btn item-footer">
                                    <a href="" class="btn item-btn btn-primary display-7">¡Contrátalo Ya!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
              
            
              <section data-bs-version="5.1" class="contacts02 map1 cid-udDoRr2ztU" id="contacts-2-udDoRr2ztU">
 
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 content-head">
                              <div class="mbr-section-head mb-5">
                                  <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                      <strong>¡Conócenos!</strong>
                                  </h3>
                                  
                              </div>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="card col-12 col-md-12 col-lg-6">
                              <div class="card-wrapper">
                                  <div class="text-wrapper">
                                      
                                      <ul class="list mbr-fonts-style display-7">
                                          <li class="mbr-text item-wrap">
                                          Teléfono:                                
                                          <a href="https://api.whatsapp.com/send?phone=70193806" class="text-black">+591 70193806</a></li>
              
                                          <li class="mbr-text item-wrap">WhatsApp: 
                                          <a href="https://api.whatsapp.com/send?phone=73573505" class="text-black">+591 73573505</a></li> 
              
                                          <li class="mbr-text item-wrap">                            
                                          Correo:
                                          <a href="mailto:motomecanica.templario@gmail.com" class="text-black">motomecanica.templario@gmail.com</a>                        
                                          </li>
              
                                          <li class="mbr-text item-wrap">                        
                                          Dirección: Ciudad Satelite Calle25 #66
                                          El Alto - Bolivia
                                          </li>
              
                                          <li class="mbr-text item-wrap">
                                          Horario de Locura:
                                          Lun - Vie: 9am - 6pm
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="map-wrapper col-md-12 col-lg-6">
                              <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.249570138375!2d-68.1556916958528!3d-16.526184451511238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf7072d56a01%3A0x477da4b38cd59f43!2sMoto%20Mecanica%20Templario!5e0!3m2!1ses-419!2sbo!4v1725486197394!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen=""></iframe></div>
                          </div>
                      </div>
                  </div>

              
              </section>
              <section data-bs-version="5.1" class="footer3 cid-udDoRr24HO" once="footers" id="footer-4-udDoRr24HO">
              
                  <div class="container">
                      <div class="row">
                            <div class="col-12 mt-1">
                              <p class="mbr-fonts-style copyright display-7">Motomecanica Templario © 2024 . Todos los derechos reservados.</p>
                          </div>
                      </div>
                  </div>
              </section>
              
              
                <script src="assets/web/assets/jquery/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/parallax/jarallax.js"></script>
                <script src="assets/smoothscroll/smooth-scroll.js"></script>
                <script src="assets/ytplayer/index.js"></script>
                <script src="assets/dropdown/js/navbar-dropdown.js"></script>
                
                <script src="assets/scrollgallery/scroll-gallery.js"></script>
                <script src="assets/masonry/masonry.pkgd.min.js"></script>
                <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
                <script src="assets/theme/js/script.js"></script>
                <script src="assets/formoid/formoid.min.js"></script>
                 
     
      
    </body>
</html>
