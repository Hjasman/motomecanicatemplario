
@extends('adminlte::page')

                        @section('title', 'Sigest')

                        @section('content_header')
                            <h1>Clientes</h1>
                        @stop

                        @section('content')
            <br>
            <a href="{{route('clientes.newc')}}""><button button class="btn btn-light">Nuevo Registro</button></a>
            <br>

            <table id="example1" class="table table-striped w-screen" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Observaciones</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientem as $clisss )
                        @php
                
                            if(empty($clisss->observaciones_cl))
                            {
                                $robs="no";
                            }
                            else 
                            {
                                $robs="si";
                            }
                        @endphp
                    <tr>
                        <td><a href="{{route('clientes.mostarc',$clisss)}}">{{$clisss->nombres_cl}}</td>
                        <td>{{$clisss->ap_paterno_cl}}</td>
                        <td>{{$clisss->ap_Materno_cl}}</td>
                        <td>{{$clisss->email_cl}}</td>
                        <td>{{$clisss->celular_cl}}</td>
                        <td>{{$robs}}</td>
                        <td>
                            <a href="{{route('clientes.editarc', $clisss)}}"<button type="button" class="btn btn-primary w-100"> Editar </button></a> 
                            <form method="POST" action="{{route('clientes.deletec', $clisss)}}" class="form-del">
                                @method('delete')
                                @csrf
                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                            </form>
                            
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Observaciones</th>
                        <th>Operaciones</th>
                    </tr>
                </tfoot>
            </table>
        @stop
        @section('css')
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
         @stop
        @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        
            
        @endsection
                        

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
                            
                            <script>
                                var table = new DataTable('#example2', {
                                language: {
                                            url: '//cdn.datatables.net/plug-ins/2.1.6/i18n/es-ES.json',
                                            },
                                 });
                            </script>
                            <script>
                                new DataTable('#example2');

                            </script>
                            @if (session('save')=='okk')
                            <script>
                            Swal.fire({
                            icon: "success",
                            title: "Guardado!",
                            title: "Se ha guardado con exito.",
                            showConfirmButton: false,
                            timer: 1500
                            });
                            </script>
                        @endif
                        @if (session('eliminar')=='ok')
                            <script>
                            Swal.fire({
                            title: "Eliminado!",
                            text: "El registro se a eliminado con exito.",
                            icon: "success"
                            });
                            </script>
                        @endif
                        <script>
                            $('.form-del').submit(function(event){
                            event.preventDefault();
                            Swal.fire({
                            title: "Estas seguro?",
                            text: "¡No podrás revertir esto!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Si, Eliminarlo!"
                            }).then((result) => {
                            if (result.isConfirmed) {   
                                this.submit();
                            }
                            });
                            }
                        );
                
                        </script>
                        @stop