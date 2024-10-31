@extends('adminlte::page')

@section('title', 'Sigest')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')

    <div class="container size-1/2 m-auto position-relative ">


        <div class="card card-info w-responsive position-middle">
            <div class="card-header">
                <h3 class="card-title">Nuevo Cliente</h3>
            </div>

            <form class="form-horizontal" action="{{route('clientes.savec') }}" method="POST">
                @csrf   
                @method('post')
                <div class="card-body">

                    <div class="form-group row">
                        <label for="text" class="col-sm-4 col-form-label ">Nombres:</label>
                        <div class="col-sm-6">
                            <input type="text" required  placeholder="Nombres" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombrec">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Apellido Paterno:</label>
                      <div class="col-sm-6">
                          <input type="text" required placeholder="Apellido Paterno" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="appatc">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-4 col-form-label">Apellido Materno:</label>
                      <div class="col-sm-6">
                          <input type="text" placeholder="Apellido Materno" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apmatc">
                      </div>
                    </div>                    
                    <div class="form-group row">
                    <label for="text"  class="col-sm-4 col-form-label">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" placeholder="email@correo.com" class="form-control " name="emailc">
                    </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" required class="col-sm-4 col-form-label">Nro. Celular:</label>
                      <div class="col-sm-6">
                          <input type="number" placeholder="Nro de Celular" min="60000000" max="80000000"  class="form-control" name="celuc">
                      </div>
                      </div>
                      <div class="form-group row">
                        <label for="text" class="col-sm-4 col-form-label">Observaciones:</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" placeholder="Observaciones importantes" class="form-control text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" style="height: 180px;"
                          name="obsc"></textarea>
                            
                        </div>

                    
                     
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          
                          <button type="submit" class="btn btn-danger">Guardar</button>
                        <a class="btn btn-success me-md-2" href="{{route('clientes.principal')}}">Volver</a>
                          </div>
                      </div>
                      </div>
                      </div>
                      </form>
                      </div>
                    
            
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
