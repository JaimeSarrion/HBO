
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Usuarios</title>
</head>
<body>
    <div class="container">
        <h1>Lista de capitulos</h1>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href={{url('/capitulos/create')}} class="btn btn-primary" type = "button">Crear</a>
        <a href={{url('/administrar')}} class="btn btn-success" type = "button">Atrás</a>
        </div>
        <div class="table-responsive">
            @if($data)
                <table class="table">
                    <thead>
                        <tr>
                            <td>Orden</td>
                            <td>Descripcion</td>    
                            <td>Dureacion</td>
                            <td>Opciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row -> orden}}</td>
                            <td>{{$row -> descripcion}}</td>
                            <td>{{$row -> duracion}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/capitulos/editar/{{$row->id}}" class="btn btn-success" type="button">Editar</a>
                                    
                                    <form action="/capitulos/borrar/{{$row->id}}" method="POST">
                                         {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</body>
</html>