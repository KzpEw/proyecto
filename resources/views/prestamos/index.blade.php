@extends("layouts.app1")


@section("contenido")

<script>
    $(document).ready(function() {
        $('#tabla_prestamos').DataTable( {
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
                        url   : "{{url('/prestamos')}}/"+id,
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

    <h1>Prestamos</h1>

    @if(count($prestamos)>0)
        <a href=" {{url('/')}}" class="btn btn-primary">Inicio</a>
        <a href=" {{url('/prestamos/create')}}" class="btn btn-primary">Nuevo prestamo</a>
        <table id="tabla_prestamos" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Socio</th>
                    <th>ID Libro</th>
                    <th>Fecha préstamo</th>
                    <th>Fecha devolución</th>
                    <th>Editar</th>
                    <th>Borrar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($prestamos as $prestamo)
                    <tr data-id='{{$prestamo->id}}'>
                        <td>{{$prestamo->id}}</td>
                        <td>{{$prestamo->id_socio}}</td>
                        <td>{{$prestamo->id_libro}}</td>
                        <td>{{$prestamo->fecha_prestamo}}</td>
                        <td>{{$prestamo->fecha_devolucion}}</td>
                        <td><a href="{{url('/prestamos')}}/{{$prestamo->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>              
                        <td><a href="{{ '#' }}"  class='borrar btn btn-danger '>Borrar</a>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No hay prestamos</h1>
    @endif

    @endsection