@extends("layouts.app1")


@section("contenido")

<script>
    $(document).ready(function() {
        $('#tabla_libros').DataTable( {
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
                        url   : "{{url('/libros')}}/"+id,
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

    <h1>Libros</h1>

    @if(count($libros)>0)
        <a href=" {{url('/')}}" class="btn btn-primary">Inicio</a>
        <a href=" {{url('/libros/create')}}" class="btn btn-primary">Nuevo libro</a>
        <table id="tabla_libros" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Editorial</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Borrar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                    <tr data-id='{{$libro->id}}'>
                        <td>{{$libro->id}}</td>
                        <td>{{$libro->titulo}}</td>
                        <td>{{$libro->editorial}}</td>
                        <td>{{$libro->autor}}</td>
                        <td><a href="{{url('/libros')}}/{{$libro->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>              
                        <td><a href="{{ '#' }}"  class='borrar btn btn-danger '>Borrar</a>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No hay libros</h1>
    @endif

    @endsection