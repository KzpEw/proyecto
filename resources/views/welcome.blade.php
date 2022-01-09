@extends("layouts.app1")
@section("contenido")
    <a href=" {{url('/socios')}}" class="btn btn-primary">Socios</a>
    <a href=" {{url('/libros')}}" class="btn btn-primary">Libros</a>
    <a href=" {{url('/prestamos')}}" class="btn btn-primary">Prestamos</a>
    <a href=" {{url('/mail')}}" class="btn btn-primary">Enviar correo</a>
@endsection