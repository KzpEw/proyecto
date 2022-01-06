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

    <h3>Editar el libro {{$libros->titulo}}</h3>
    <form action="{{url('/libros/')}}/{{$libros->id}}" method="post">    
    @csrf
    @method("PUT")
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$libros->id}}">
        </div>
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="{{$libros->titulo}}">
        </div>
        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial" placeholder="editorial" value="{{$libros->editorial}}">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="autor" value="{{$libros->autor}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/libros')}}" class="btn btn-secondary">Cancelar</a>
@endsection