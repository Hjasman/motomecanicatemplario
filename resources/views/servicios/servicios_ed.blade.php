<div>
    @extends('adminlte::page')

    @section('title', 'Sigest')
    
    @section('content_header')
        <h1>Editar Servicio</h1>
    @stop
       
    @section('content')
    <div class="container size-1/2 m-auto position-relative ">
    
        <form class="form-horizontal" action="{{route('servicios.updates', $servicio_actual) }}" method="POST">
            @csrf   
            @method('put')
            <div class="card-body">
    
                <div class="form-group row">
                    <label for="text" class="col-sm-4 col-form-label ">Nombre:</label>
                    <div class="col-sm-6">
                        <input type="text" value="{{$servicio_actual->nombre_serv}}" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombres">
                    </div>
                </div>               
                  <div class="form-group row">
                    <label for="text" class="col-sm-4 col-form-label">Descripcion:</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" style="height: 180px;"
                      name="descrs">{{$servicio_actual->descripcion_serv}}</textarea>
                    </div>   
                  </div>
                  <div class="form-group row">
                    <label for="text" required class="col-sm-4 col-form-label">Precio:</label>
                    <div class="col-sm-6">
                        <input type="number" value="{{$servicio_actual->precio_serv}}" min="0" max="99999"  class="form-control" name="precios">
                    </div>
                    </div>
                
                 
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      
                      <button type="submit" class="btn btn-danger">Guardar</button>
                    <a class="btn btn-success me-md-2" href="{{route('servicios.principals')}}">Volver</a>
                      </div>
                  </div>
                  </div>
                  </div>
                  </form>
        
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
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            
            <script>
              new DataTable('#example');
                var $ = require('jquery');<font></font>
                var DataTable = require('datatables.net')(window, $);<font></font>
                var languageDE = require('datatables.net-plugins/i18n/es-COL
                
                .js');<font></font>
                <font></font>
                var table = new DataTable('#example', {<font></font>
                    language: languageDE,<font></font>
                });<font></font>
             
              
          </script>
    @stop
    
</div>
