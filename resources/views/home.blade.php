

@extends('adminlte::page')

        @section('title', 'Sigest')

        @section('content_header')

            <h1>Sigest</h1>
        @stop
        
        @section('content')
        <div class="card card-info w-responsive position-middle">
        <div class="card-header">
            <h3 class="card-title">Trabajos Pendientes</h3>
        </div>
        <table id="example1" class="table table-striped w-screen" style="width:100%">
            <thead>
                <tr>
                    <th>Nro.Placa</th>
                    <th>Estado</th>
                    <th>Fecha de Ingreso</th>
                    <th>Observaciones</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                
                    
                <tr>
                    <td><a href="">2020ASD</td>
                    <td>Diagnostico</td>
                    <td>25/10/2024</td>
                    <td>Ninguna</td>
                    
                    
                    <td>
                        <a href="diagnostico/llenadiagnostico"<button type="button" class="btn btn-success w-100"> Diagnostico </button></a> 
                        <form method="POST" action="{{route('resolucion.resol')}}" class="form-del">
                           
                            @csrf
                        <button type="submit" class="btn btn-warning w-100">Resolucion</button>
                        </form>
                        
                    </td>
                    <tr>
                        <td><a href="">1042NGH</td>
                        <td>Diagnostico</td>
                        <td>20/10/2024</td>
                        <td>Ninguna</td>
                        
                        
                        <td>
                            <a href="diagnostico/llenadiagnostico"<button type="button" class="btn btn-success w-100"> Diagnostico </button></a> 
                        <form method="POST" action="{{route('resolucion.resol')}}" class="form-del">
                           
                            @csrf
                        <button type="submit" class="btn btn-warning w-100">Resolucion</button>
                        </form>
                            
                        </td>
                        <tr>
                            <td><a href="">3565ERD</td>
                            <td>Resolucion</td>
                            <td>15/10/2024</td>
                            <td>sin aceite</td>
                            
                            
                            <td>
                                <a href="diagnostico/llenadiagnostico"<button type="button" class="btn btn-success w-100"> Diagnostico </button></a> 
                        <form method="POST" action="{{route('resolucion.resol')}}" class="form-del">
                           
                            @csrf
                        <button type="submit" class="btn btn-warning w-100">Resolucion</button>
                        </form>
                                
                            </td>
                </tr> 
                
            </tbody>
            <tfoot>
                <tr>
                    <th>Nro.Placa</th>
                    <th>Estado</th>
                    <th>Fecha de Ingreso</th>
                    <th>Observaciones</th>
                    <th>Operaciones</th>
                </tr>
            </tfoot>
        </table>
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