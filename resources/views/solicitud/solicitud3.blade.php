@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Vehiculos</h1>
@stop

@section('content')
   
   
<div class="container size-1/2 m-auto position-relative ">

   
    <div class="card card-info w-responsive position-middle">
        <div class="card-header">
            <h3 class="card-title">Nueva Solicitud</h3>
        </div>

        <div class="card-body">
            <div>
                <label for="text" class="col-sm-4 col-form-label ">Datos del Cliente:</label>
            </div>
            <div class="mt-3 input-group">
                <span class="input-group-text bg-primary">Nombre:</span>
                <input type="text" required name="cel" value="{{$clienteqq->nombres_cl}}" class="form-control col-sm-2 " >
                <input type="text" required name="cel" value="{{$clienteqq->ap_paterno_cl}}" class="form-control col-sm-2 " >
                <input type="text" required name="cel" value="{{$clienteqq->ap_Materno_cl}}" class="form-control col-sm-2 " >
                <span class="input-group-text bg-primary">Celular</span>
                <input type="text" required name="cel" value="{{$clienteqq->celular_cl}}" class="form-control col-sm-2 " >
            </div> 
            <div>
                <label for="text" class="col-sm-4 col-form-label ">Datos del Vehiculo:</label>
            </div>
            <div class="mt-3 input-group">
                
                <span class="input-group-text bg-primary">Placa:</span>
                <input type="text" required name="cel" value="{{$vehiculo_q->nroplaca_v}}" class="form-control col-sm-2 " >
                <span class="input-group-text bg-primary">Color:</span>
                <input type="text" required name="cel" value="{{$vehiculo_q->color_v}}" class="form-control col-sm-2 " >
                <span class="input-group-text bg-primary">Marca:</span>
                <input type="text" required name="cel" value="{{$vehiculo_q->marca_v}}" class="form-control col-sm-2 " >
                <span class="input-group-text bg-primary">Modelo:</span>
                <input type="text" required name="cel" value="{{$vehiculo_q->modelo_v}}" class="form-control col-sm-2 " >
            </div> 

           
        </div>
        <div class="card-body">
            <a class="btn btn-success me-md-2" href="{{route('solicitud.mostar')}}">Generar Solicitud</a>
            <a class="btn btn-success me-md-2" href="{{route('home')}}">< Volver</a>
        
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
