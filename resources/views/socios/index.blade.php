@extends("layouts.app1")


@section("contenido")

<script>
    $(document).ready(function() {
        $('#tabla_socios').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

        $(".borrar").click(function(){
            const tr=$(this).closest("tr"); //guardamos el tr completo
            const id=tr.data("id");
            Swal.fire({
                title: '¿seguro que quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Borrar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url   : "{{url('/socios')}}/"+id,
                        data  : {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    });
                } 
            })
        });

    } );
    </script>

    <h1>Socios</h1>

    @if(count($socios)>0)

        <a href=" {{url('/socios/create')}}" class="btn btn-primary">Nuevo Socio</a>
        <a href=" {{url('/')}}" class="btn btn-primary">Inicio</a>
        <table id="tabla_socios" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                    <th>DNI</th>
                    <th>Editar</th>
                    <th>Borrar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($socios as $socio)
                    <tr data-id='{{$socio->id}}'>
                        <td>{{$socio->id}}</td>
                        <td>{{$socio->nombre}}</td>
                        <td>{{$socio->apellidos}}</td>
                        <td>{{$socio->telefono}}</td>
                        <td>{{$socio->email}}</td>
                        <td>{{$socio->dni}}</td>
                        <td><a href="{{url('/socios')}}/{{$socio->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>              
                        <td><a href="{{ '#' }}"  class='borrar btn btn-danger '>Borrar</a>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No hay Socios</h1>
    @endif

    @endsection