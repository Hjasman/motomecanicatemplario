@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Solicitud de Servicios</h1>
@stop

@section('content')
@php
    $ncliente=$cliente_q;
@endphp
    <div class="container size-1/2 m-auto position-relative ">

        {{$cliente_q->nombres_cl}}
        <div class="card card-info w-responsive position-middle">
            <div class="card-header">
                <h3 class="card-title">Nueva Solicitud</h3>
            </div>

            <div class="card-body">
                <div>
                    <label for="text" class="col-sm-4 col-form-label ">Cliente:</label>
                </div>
                <div class="mt-3 input-group">
                    <span class="input-group-text bg-primary">Nombre:</span>
                    <input type="text" required name="cel" value="{{$cliente_q->nombres_cl}}" class="form-control col-sm-2 " >
                    <input type="text" required name="cel" value="{{$cliente_q->ap_paterno_cl}}" class="form-control col-sm-2 " >
                    <input type="text" required name="cel" value="{{$cliente_q->ap_Materno_cl}}" class="form-control col-sm-2 " >
                    <span class="input-group-text bg-primary">Celular:</span>
                    <input type="text" required name="cel" value="{{$cliente_q->celular_cl}}" class="form-control col-sm-2 " >
                </div> 
            </div>
            <div class="card-body">
            @php
                $client=$cliente_q;
            @endphp
            <form method="POST" action="{{ route('solicitud.buscarveh', $cliente_q->id) }}" class="form-okk" >
                @csrf
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label ">Buscar Vehiculo</label>
                    <div class="col-sm-4">
                        <input type="text" required name="placa" minlength="8" maxlength="8" placeholder=" Nro de Placa" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
                            id="celcliente" > 
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-danger">Buscar</button>
                    <a class="btn btn-success me-md-2" href="{{route('home')}}">< Volver</a>
                    </div> 
                </div> 
            </form>
            </div> 
            @stop
                      
            @section('css')
                    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
            @endsection
                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
                    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                   
                   
                        
                    @if (session('actual')=='ook')
                    <script>
                    Swal.fire({
                    icon: "success",
                    title: "Numero no encontrado!",
                    title: "Error",
                    showConfirmButton: false,
                    timer: 1500
                    });
                    </script>
                @endif
                     
                 
                    
            
  
           
