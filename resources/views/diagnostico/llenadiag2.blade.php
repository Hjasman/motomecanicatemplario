@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Diagnostico</h1>
@stop

@section('content')

<div class="card-body">
    <div>
        <label for="text" class="col-sm-4 col-form-label ">Datos del Cliente:</label>
    </div>
    <div class="mt-3 input-group">
        <span class="input-group-text bg-primary">Nombre:</span>
        <input type="text" required name="cel" value="Julio" class="form-control col-sm-2 " >
        <input type="text" required name="cel" value="Chavez" class="form-control col-sm-2 " >
        <input type="text" required name="cel" value="Martinez" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Celular</span>
        <input type="text" required name="cel" value="75522314" class="form-control col-sm-2 " >
    </div> 
    <div>
        <label for="text" class="col-sm-4 col-form-label ">Datos del Vehiculo:</label>
    </div>
    <div class="mt-3 input-group">
        <span class="input-group-text bg-primary">Placa:</span>
        <input type="text" required name="cel" value="552EDN" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Color:</span>
        <input type="text" required name="cel" value="ROJO" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Marca:</span>
        <input type="text" required name="cel" value="PEGASUS" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Modelo:</span>
        <input type="text" required name="cel" value="TEKKEN250" class="form-control col-sm-2 " >
    </div>  
    <div>
        <label for="text" class="col-sm-4 col-form-label ">Solicitud</label>
    </div>
    <div class="mt-3 input-group">
        <span class="input-group-text bg-primary">Descripcion:</span>
        <div class="col-sm-6">
            <textarea class="form-control" disabled placeholder="Descripcion general" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" style="height: 80px;"
            name="descrp">MANTENIMIENTO GENERAL</textarea>
          </div>
    
    </div> 
    
    <div>
        <label for="text" class="col-sm-4 col-form-label ">Diagnostico</label>
    </div>
    <div class="mt-3 input-group">
        <span class="input-group-text bg-primary">Diagnosis:</span>
        <div class="col-sm-6">
            <textarea class="form-control" placeholder="Diagnostico" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" style="height: 80px;"
            name="descrp"></textarea>
          </div>
    
    </div>  
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-center">
        <a class="btn btn-danger  me-md-2" href="{{route('solicitud.llenasol')}}">Guardar</a>
    </div>

<br>
<div class="d-grid gap-2 d-md-flex justify-content-center">
    <table id="example1" class="table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Solicitud</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                
                <td>1</td>
                <td>MANTENIMIENTO GENERAL</td>
                
                <td>
                    <div class="d-md-flex">
                        <a href=""<button type="button" class="btn-sm btn-warning  ">Diagnostico</button></a> 
                        <form method="POST" action="" class="form-del">
                            @method('delete')
                            @csrf
                        </form>
                        <a class="btn btn-danger btn-sm" href="{{route('solicitud.llenasol')}}">Editar</a>
                    </div>
                </td>
                
            </tr> <tr>
                
                <td>2</td>
                <td>CAMBIO DE PASTILLAS DE FRENO TRASERO</td>
                
                <td>
                    <div class="d-md-flex">
                        <div class="d-md-flex">
                            <a href=""<button type="button" class="btn-sm btn-warning  ">Diagnostico</button></a> 
                            <form method="POST" action="" class="form-del">
                                @method('delete')
                                @csrf
                            </form>
                            <a class="btn btn-danger btn-sm" href="{{route('solicitud.llenasol')}}">Editar</a>
                        </div>
                    </div>
                    
                </td>
                
            </tr> 
       
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Solicitud</th>
                <th>Operaciones</th>
            </tr>
        </tfoot>
    </table>
</div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-center">
    <a class="btn btn-danger  me-md-2" href="{{route('solicitud.llenasol')}}">Nueva Solicitud</a>
    <a class="btn btn-success me-md-2" href="{{route('home')}}">Terminar</a>

</div>
@stop
                      
@section('css')
            {{-- Add here extra stylesheets --}}
            {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
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
         
         
      
         
@stop



