@extends("layouts.welcome")
@section("contenido")
    <img src="https://leonautas.files.wordpress.com/2019/10/biblioteca-logo.png" id="logo">
    <a href=" {{url('/socios')}}" class="btn btn-primary">Socios</a>
    <a href=" {{url('/libros')}}" class="btn btn-primary">Libros</a>
    <a href=" {{url('/prestamos')}}" class="btn btn-primary">Prestamos</a>
    <a href=" {{url('/mail')}}" class="btn btn-primary">Enviar correo</a>
@endsection
@section("imagen")
    <img src="https://www.dipucadiz.es/export/sites/default/cultura/.galerias/lectura/Banner_Biblioteca.jpg_541957993.jpg">
@endsection
@section("texto")
    <h1>Biblioteca los Manolos</h1>
@endsection