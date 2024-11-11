@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Solicitud de Servicios</h1>
@stop
@section('content_header')
    <h1>Solicitud de Servicios</h1>
@stop

@section('content')

    <div class="container size-1/2 m-auto position-relative ">


        <div class="card card-info w-responsive position-middle">
            <div class="card-header">
                <h3 class="card-title">Nueva Solicitud</h3>
            </div>

            
                    <form method="POST" action="{{ route('solicitud.buscarcli') }}" class="form-okk" >
                        @csrf
                        <div class="card-body">
        
                            <div class="form-group row">
                                <label for="text" class="col-sm-2 col-form-label ">Buscar Cliente:</label>
                                <div class="col-sm-4">
                                    <input type="text" required name="cel" minlength="8" maxlength="8" placeholder="Nro de Celular" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
                                        id="celcliente" >
                                   
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-danger">Buscar</button>
                                <a class="btn btn-success me-md-2" href="{{route('home')}}">< Volver</a>
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
                   
                   
                        
            @if (session('actuali')=='ok')
            <script>
                Swal.fire({
                icon: "error",
                title: "Error",
                title: "Numero no Encontrado",
                showConfirmButton: false,
                timer: 2000
                });
                </script>
            @endif
            @stop

                     
                 
                    
            
  
           
