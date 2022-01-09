<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Tablas de socios</h1>
        <hr>
        <div class="contenido">
        <table id="tabla_socios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                    <th>DNI</th>

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

                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </body>
</html>