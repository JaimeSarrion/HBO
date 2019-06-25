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
    <title>Crear serie</title>

</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col"></div>
    <div class="col-6">
        <form action="/series/editar/{{$serie->id}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" id="nombre" name="nombre" placeholder="{{$serie->nombre}}" required='required'>
            </div>

            <div class="form-group">
                <label>Sinopsis:</label>
                <input class="form-control" id="sinopsis" name="sinopsis" placeholder="{{$serie->sinopsis}}" required='required'>
            </div>

            <div class="form-group">
                <label>Genero:</label>
                <input class="form-control" id="genero" name="genero"  placeholder="{{$serie->genero}}"required='required'>
            </div>

            <div class="form-group">
                <label>Reparto:</label>
                <input class="form-control" id="reparto" name="reparto"  placeholder="{{$serie->reparto}}" required='required'>
            </div>

            <div class="form-group">
                <label>Creador:</label>
                <input class="form-control" id="creador" name="creador"  placeholder="{{$serie->creador}}" required='required'>
            </div>

            <div class="form-group">
                <label>Calificacion:</label>
                <input class="form-control" id="calificacion" name="calificacion"  placeholder="{{$serie->calificacion}}" required='required'>
            </div>

            <div class="form-group">
                <label>Año:</label>
                <input class="form-control" id="anyo" name="anyo"  placeholder="{{$serie->anyo}}" required='required'>
            </div>

            <div class="form-group">
                <label>imagen:</label>
                <input class="form-control" id="imagen" name="imagen"  placeholder="{{$serie->imagen}}" required='required'>
            </div>

            {{csrf_field()}}
            <button type="submit" class="btn btn-success">Editar</button>
        </form>
    </div>
    <div class="col"></div>
</div>
</body>
</html>