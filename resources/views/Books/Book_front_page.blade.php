
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observa tu portada</title>
    <link rel="stylesheet" href ="{{ asset('css/Book_front_page.css')}}">
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

    <title>Portada de tu libro</title>
  <body>
    <div class="pages">
    <div class="page-wrapper">
        <img src="/img/frontpage/extra/two-avatars.jpg" class="page-img">
        <div class="giver-img">
            <img src="/img/frontpage/woman/giver-woman-base.png" class="extra" style="z-index: 1;">
            <img id="eyesfemale" src="/img/frontpage/woman/eyes/brown.png" class="extra" style="z-index: 1;">
            <img id="hairfemale" src="/img/frontpage/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
            <img id="glassesfemale" src="/img/frontpage/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
        </div>
        <div class="receiver-img">
            <img src="/img/frontpage/Man/receiver-man-base.png" class="extra" style="z-index: 2;">
            <img id="eyesmale" src="/img/frontpage/man/Eyes/brown.png" class="extra" style="z-index: 2;">
            <img id="hairmale" src="/img/frontpage/man/Hair/brown/half1.png" class="extra" style="z-index: 2;">
            <img id="beard" src="/img/frontpage/Man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
            <img id="glassesmale" src="/img/frontpage/man/glasses/glasses.png" class="extra" style="z-index: 2;">
        </div>
        <div class="extras">
            <img src="/img/frontpage/extra/extra-1.png" class="extra" style="z-index: 3;">
        </div>
        <div class="title-wrapper">
            <h1 id="names" title="Esta será tu portada">Esta será tu portada</h1>
        </div>
        </div>
    </div>
</div>
<a href="{{ url('BookPages') }}" class="btn1" id="btn1">Personaliza las paginas de tu libro</a>
<script src="{{ asset('js/Book_front_page.js')}}"></script>
</body>
</html>
