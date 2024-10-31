@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Vehiculos</h1>
@stop

@section('content')

    <div class="container size-1/2 m-auto position-relative ">


        <div class="card card-info w-responsive position-middle">
            <div class="card-header">
                <h3 class="card-title">Detalles del Vehiculo</h3>
            </div>


            <form class="form-horizontal" action="{{ route('vehiculo.updatev', $vehiculo_actual) }}" method="POST">
                @csrf   
                @method('put')
                <div class="card-body">

                    <div class="form-group row">
                        <label for="text" class="col-sm-4 col-form-label ">Nro de Placa:</label>
                        <div class="col-sm-6">
                            <input type="text" required name="placav" minlength="6" maxlength="7" value="{{ $vehiculo_actual->nroplaca_v}}" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
                                id="nro_placa">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Color</label>
                      <div class="col-sm-6">
                          <input type="text" required name="colorv" value="{{ $vehiculo_actual->color_v}}" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
                              id="nro_placa" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Marca:</label>
                      <div class="col-sm-6">
                          <input type="text" required name="marcav" value="{{ $vehiculo_actual->marca_v}}" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
                              id="nro_placa">
                      </div>
                    </div>                    
                    <div class="form-group row">
                    <label for="text" class="col-sm-4 col-form-label">Modelo:</label>
                    <div class="col-sm-6">
                        <input type="text" name="modelov" value="{{ $vehiculo_actual->modelo_v}}" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
                            id="nro_placa">
                    </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Año:</label>
                      <div class="col-sm-6">
                          <input type="number" name="añov" min="1970" max="2030" value="{{ $vehiculo_actual->año_v}}" class="form-control"
                              id="nro_placa">
                      </div>
                      </div>
                      <div class="form-group row">
                        <label for="text" class="col-sm-4 col-form-label">Observaciones:</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" style="height: 180px;"
                            id="nro_placa" name="obsv">{{ $vehiculo_actual->observaciones_v}}</textarea>
                            
                        </div>
                        </div>
                     
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          
                          <button type="submit" class="btn btn-danger">Guardar</button>
                        <a class="btn btn-success me-md-2" href="{{route('vehiculo.principalv')}}">Volver</a>
                          </div>
                      </div>
                      </div>
                      </div>
                      </form>
                      </div>
                    
            @stop
                      
            @section('css')
                    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
            @endsection
            @section('js')
                
                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
                    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>
                    
                    
                    <script>
                      new DataTable('#example');
                        var $ = require('jquery');<font></font>
                        var DataTable = require('datatables.net')(window, $);<font></font>
                        var languageDE = require('datatables.net-plugins/i18n/es-ES.js');<font></font>
                        <font></font>
                        var table = new DataTable('#example', {<font></font>
                            language: languageDE,<font></font>
                        });<font></font>
                     
                      
                  </script>
            @stop
