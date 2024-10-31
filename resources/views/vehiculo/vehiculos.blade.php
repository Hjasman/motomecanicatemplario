
@extends('adminlte::page')

        @section('title', 'Sigest')

        @section('content_header')
            <h1>Vehiculos</h1>
        @stop

        @section('content')
            <br>
            <a href="{{route('vehiculo.newv')}}""><button button class="btn btn-light">Nuevo Registro</button></a>
            <br>

            <table id="example1" class="table table-striped w-screen" style="width:100%">
                <thead>
                    <tr>
                        <th>Nro.Placa</th>
                        <th>Color</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Observaciones</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculom as $vehisss )
                        @php
                
                            if(empty($vehisss->observaciones_v))
                            {
                                $robs="no";
                            }
                            else 
                            {
                                $robs="si";
                            }
                        @endphp
                    <tr>
                        <td><a href="{{route('vehiculo.mostarv',$vehisss)}}">{{$vehisss->nroplaca_v}}</td>
                        <td>{{$vehisss->color_v}}</td>
                        <td>{{$vehisss->marca_v}}</td>
                        <td>{{$vehisss->modelo_v}}</td>
                        <td>{{$vehisss->año_v}}</td>
                        <td>{{$robs}}</td>
                        <td>
                            <a href="{{route('vehiculo.editarv', $vehisss)}}"<button type="button" class="btn btn-primary w-100"> Editar </button></a> 
                            <form method="POST" action="{{route('vehiculo.deletev', $vehisss)}}" class="form-del">
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
                        <th>Nro.Placa</th>
                        <th>Color</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
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

        @section('js')
        
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
            <script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                var table = new DataTable('#example1', {
                language: {
                            url: '//cdn.datatables.net/plug-ins/2.1.6/i18n/es-MX.json',
                            },
                    });
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