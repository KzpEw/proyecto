@extends("layouts.app1")


@section("contenido")

<h3></h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>Editar el prestamo {{$prestamos->id}}</h3>
    <form action="{{url('/prestamos/')}}/{{$prestamos->id}}" method="post">    
    @csrf
    @method("PUT")
        <div class="form-group">
        <label for="id_socio">Socio</label>
        <br>
            <select name="id_socio" id="id_socio" class="form-controls">
                <option value="">-- Escoja un socio --</option>
                @foreach ($socios as $socio)
                    <option value="{{ $socio['id'] }}">{{ $socio['nombre'] }}</option>
                @endforeach
            </select>

        <div class="form-group">
        <label for="id_libro">Libro</label>
        <br>
        <select name="id_libro" id="id_libro" class="form-controls">
            <option value="">-- Escoja un libro --</option>
            @foreach ($libros as $libro)
                <option value="{{ $libro['id'] }}">{{ $libro['titulo'] }}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="fecha_prestamo">Fecha prestamo</label>
            <input type="text" class="form-control" id="fecha_prestamo" name="fecha_prestamo" placeholder="fecha_prestamo" value="{{$prestamos->fecha_prestamo}}">
        </div>

        <div class="form-group">
        <label for="fecha_devolucion">Fecha devolucion</label>
            <input type="text" class="form-control" id="fecha_devolucion" name="fecha_devolucion" placeholder="fecha_devolucion" value="{{$prestamos->fecha_devolucion}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/prestamos')}}" class="btn btn-secondary">Cancelar</a>
@endsection