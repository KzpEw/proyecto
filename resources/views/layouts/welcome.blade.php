<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <style>
        .header{
            padding: 10px;
            

        }
        .content{
            border-top: 3px solid;
            border-bottom: 3px solid;
        }
        #logo{
            height: 50px;
        }
        a{
            margin-right: 10px;
        }
        h1{
            align-items: center;
            justify-content: center;
            display: flex;
            margin-top: 10px;
        }
    </style>

</head>
<body>
        <div class="header">@yield("contenido")</div>
        <div class="content">@yield("imagen")</div>
        <div class="texto">@yield("texto")</div>
</body>
</html>