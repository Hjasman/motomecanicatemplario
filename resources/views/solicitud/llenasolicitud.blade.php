@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Nueva Solicitud</h1>
@stop

@section('content')

<div class="card-body">
    <div>
        <label for="text" class="col-sm-4 col-form-label ">Datos del Cliente:</label>
    </div>
    <div class="mt-3 input-group">
        <span class="input-group-text bg-primary">Nombre:</span>
        <input type="text" required name="cel" value="Rodrigo " class="form-control col-sm-2 " >
        <input type="text" required name="cel" value="Salinas" class="form-control col-sm-2 " >
        <input type="text" required name="cel" value="Ardaya" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Celular</span>
        <input type="text" required name="cel" value="" class="form-control col-sm-2 " >
    </div> 
    <div>
        <label for="text" class="col-sm-4 col-form-label ">Datos del Vehiculo:</label>
    </div>
    <div class="mt-3 input-group">
        <span class="input-group-text bg-primary">Placa:</span>
        <input type="text" required name="cel" value="2585JHJ" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Color:</span>
        <input type="text" required name="cel" value="Azul" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Marca:</span>
        <input type="text" required name="cel" value="Honda" class="form-control col-sm-2 " >
        <span class="input-group-text bg-primary">Modelo:</span>
        <input type="text" required name="cel" value="rebel250" class="form-control col-sm-2 " >
    </div>  
    <div class="mt-3 input-group">
        <div class="form-group row w-75">
            <label for="text" class="col-sm-4 col-form-label">Solicitud</label>
            <div class="col-sm-8">
                <textarea  class="form-control w-7 text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" style="height: 180px;"
                id="obsv" name="obsv" placeholder="Nueva Solicitud"></textarea>
                
            </div>
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-center">
        <a class="btn btn-danger  me-md-2" href="{{route('solicitud.mostar')}}">Guardar</a>
        <a class="btn btn-success me-md-2" href="{{route('solicitud.mostar')}}">Cancelar</a>
    
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
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         
         
      
         
@stop
