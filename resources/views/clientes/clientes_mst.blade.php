@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')

<div class="container size-1/2 m-auto position-relative ">


        <div class="card card-info w-responsive position-middle">
            <div class="card-header">
                <h3 class="card-title">Detalles del Cliente</h3>
            </div>
            <form class="form-horizontal">
                <div class="card-body">

                    <div class="form-group row">
                        <label for="text" class="col-sm-4 col-form-label ">Nombres:</label>
                        <div class="col-sm-6">
                            <input type="text" disabled value="{{ $cliente_actual->nombres_cl }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Apellido Paterno:</label>
                      <div class="col-sm-6">
                          <input type="text" disabled value="{{ $cliente_actual->ap_paterno_cl }}" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Apellido Materno:</label>
                      <div class="col-sm-6">
                          <input type="text" disabled value="{{ $cliente_actual->ap_Materno_cl }}" class="form-control">
                      </div>
                    </div>                    
                    <div class="form-group row">
                    <label for="text" class="col-sm-4 col-form-label">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" disabled value="{{ $cliente_actual->email_cl}}" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Nro. Celular:</label>
                      <div class="col-sm-6">
                          <input type="text" disabled value="{{ $cliente_actual->celular_cl}}" class="form-control">
                      </div>
                      </div>
                      <div class="form-group row">
                        <label for="text" class="col-sm-4 col-form-label">Observaciones:</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" disabled class="form-control" style="height: 180px;"
                            id="nro_placa"">{{ $cliente_actual->observaciones_cl}}</textarea>
                            
                        </div>
                        </div>
                        
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @php
                               $cliented=$cliente_actual; 
                            @endphp
                            
                            <a href="{{route('clientes.editarc', $cliente_actual)}}"<button type="button" class="btn btn-primary "> Editar </button></a>    
                            <a class="btn btn-success me-md-2" href="{{route('clientes.principal')}}">Volver</a>
                            
                            </form>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        
        @if (session('actual')=='okk')
            <script>
            Swal.fire({
            icon: "success",
            title: "Actualizado!",
            title: "Se ha actualizado con exito.",
            showConfirmButton: false,
            timer: 1500
            });
            </script>
        @endif

        
@stop
