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
    <title>Crear capitulo</title>

</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col"></div>
    <div class="col-6">
        <form action="/temporadas/create" method="POST">
            <div class="form-group">
                <label>Temporada:</label>
                <input class="form-control" id="temporada" name="temporada" required='required'>
            </div>
            <div class="form-group">
                <label>Id de la serie:</label>
                <input class="form-control" id="serie_id" name="serie_id" required='required'>
            </div>
            <div class="form-group">
                <label>Id del capitulo:</label>
                <input class="form-control" id="capitulo_id" name="capitulo_id" required='required'>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-success">Crear</button>
        </form>
    </div>
    <div class="col"></div>
</div>
</body>
</html>