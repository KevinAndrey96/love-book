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
                        <a class="nav-item nav-link nav-btn" href="{{ url ('Books')}}">INICIO</a>
                        <a class="nav-item nav-link nav-btn" href="#footer">CONTACTO</a>
                    </div>
                </div>
            </nav>
            <hr class="line-main">
        <div><h2 class="create-avatar-text">CREA TU AVATAR</h2></div>
        <div id="Avatar" class="btn">
            <div id="template-container"></div>
                <div class="section" id="female-section">
                    <div class="section" id="female-section">
                        <input class="female" type="image" src="./images/female.jpg" alt="">
                        <div>
                          <a href="{{ url('Avatar/Female') }}" class="btn-primary" id="btn1">Mujer</a>
                        </div>
                    </div>
                    <div class="section" id="male-section">
                        <input class="male" type="image" src="./images/male.jpg" alt="">
                        <div>
                          <a href="{{ url('Avatar/Male') }}" class="btn2" id="btn2">Hombre</a>
                        </div>
                    </div>
                </div>
                <script src="{{ asset('js/Avatar_pick.js')}}"></script>
            </div>
        </div>
    </body>
</html>
