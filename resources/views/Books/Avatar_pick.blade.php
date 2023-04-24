<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu avatar</title>
    <link rel="stylesheet" href ="{{ asset('css/Avatar_pick.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url ('Books')}}">Inicio</a>
                <a class="nav-item nav-link" href="#footer">Contacto</a>
            </div>
        </div>
        </nav>
    <div><h1>Crea tu avatar</h1> </div>

    <div id="Avatar" class="btn">
        <div id="template-container"></div>

        <input class="female" type="image" src="./images/female.jpg">
        <div>
             <button><a href="{{ url ('Avatar/Female')}}" class="product-btn btn btn-danger" id="btn1">Mujer</a></button>
        </div>

        <input class="male" type="image" src="./images/male.jpg">
        <div>
            <button><a href="{{ url ('Avatar/Male')}}" class="product-btn btn btn-primary" id="btn2">Hombre</a></button>
        </div>
        <script src="{{ asset('js/Avatar_pick.js')}}"></script>
</body>
</html>