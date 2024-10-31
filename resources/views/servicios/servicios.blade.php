@extends('adminlte::page')

            @section('title', 'Sigest')

            @section('content_header')
                <h1>Servicios</h1>
            @stop

            @section('content')
                        <br>
                        <a href="{{route('servicios.news')}}"><button button class="btn btn-light">Nuevo Registro</button></a>
                        <br>
                        
                            <table id="example2" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicio as $serv )
                                    
                                    <tr>
                                        <td><a href="{{route('servicios.mostrars', $serv)}}">{{$serv->nombre_serv}}</a></td>
                                        <td>{{$serv->descripcion_serv}}</td>
                                        <td>{{$serv->precio_serv}}</td>
                                        
                                                                               
                                        <td>
                                        <a href="{{route('servicios.editars', $serv)}}"<button type="button" class="btn btn-primary w-100"> Editar </button></a> 
                                        <form method="POST" action="{{route('servicios.deletes', $serv)}}" class="form-del">
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
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
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
            @if (session('saved')=='oky')
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