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
    <title>Editar capitulo</title>

</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col"></div>
    <div class="col-6">
        <form action="/capitulos/{{$capitulo->id}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label>Orden:</label>
                <input class="form-control" id="orden" name="orden" placeholder="{{$capitulo -> orden}}" required='required'>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="{{$capitulo->descripcion}}"  required='required'>
            </div>
            <div class="form-group">
                    <label for="duracion">Duracion:</label>
                    <input type="text" class="form-control" name="duracion" id="duracion" placeholder="{{$capitulo -> duracion}}"  required='required'>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-success">Editar</button>
        </form>
    </div>
    <div class="col"></div>
</div>
</body>
</html>