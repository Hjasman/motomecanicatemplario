@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Producto</h1>
@stop
   
@section('content')
<div class="container size-1/2 m-auto position-relative ">

    <form class="form-horizontal" action="{{route('productos.savep') }}" method="POST">
        @csrf   
        @method('post')
        <div class="card-body">

            <div class="form-group row">

                <label for="text" class="col-sm-4 col-form-label ">Nombre:</label>
                <div class="col-sm-6">
                    <input type="text" disabled value="{{$producto_actual->nombre_prod}}" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombrep">
                </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-sm-4 col-form-label">Marca:</label>
              <div class="col-sm-6">
                  <input type="text" disabled value="{{$producto_actual->marca_prod}}" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="appatp">
              </div>
            </div>
            
              <div class="form-group row">
                <label for="text" class="col-sm-4 col-form-label">Descripcion:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" disabled placeholder="Descripcion general" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" style="height: 180px;"
                  name="descrp">{{$producto_actual->descripcion_prod}}</textarea>
                </div>   
              </div>
              <div class="form-group row">
                <label for="text" required class="col-sm-4 col-form-label">Precio:</label>
                <div class="col-sm-6">
                    <input type="number" disabled placeholder="Precio" value="{{$producto_actual->precio_prod}}"  class="form-control" name="preciop">
                </div>
                </div>
            
             
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  
                    <a href="{{route('productos.editarp', $producto_actual)}}"<button type="button" class="btn btn-primary"> Editar </button></a>
                <a class="btn btn-success me-md-2" href="{{route('productos.principalp')}}">Volver</a>
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

