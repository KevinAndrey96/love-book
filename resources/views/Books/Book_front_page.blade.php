
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                    <a class="nav-item nav-link nav-btn" href="{{ url ('')}}">INICIO</a>
                    <a class="nav-item nav-link nav-btn" href="#footer">CONTACTO</a>
                </div>
            </div>
        </nav>

        <hr class="line-main">

    <title>Portada de tu libro</title>
  <body>
    <div class="container">
        <h1 class="text-center mt-5 display-4">Elige la portada que más te guste</h1>
        <p class="small text-center">Haz click en una portada y luego dirígete a la página de edición de las páginas de tu libro.</p>
    </div>


      <div class="col-12 pages">
        <div class="page-wrapper" id="frontpage1">
            <img src="/img/frontpage/frontpage1/extra/two-avatars.jpg" class="page-img img-fluid" >
            <div class="giver-img">
              <img src="/img/frontpage/frontpage1/woman/giver-woman-base.png" class="extra" style="z-index: 1;">
              <img id="eyesfemale" src="/img/frontpage/frontpage1/woman/eyes/brown.png" class="extra" style="z-index: 1;">
              <img id="hairfemale" src="/img/frontpage/frontpage1/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
              <img id="glassesfemale" src="/img/frontpage/frontpage1/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
            </div>
            <div class="receiver-img">
              <img src="/img/frontpage/frontpage1/man/receiver-man-base.png" class="extra" style="z-index: 2;">
              <img id="eyesmale" src="/img/frontpage/frontpage1/man/eyes/brown.png" class="extra" style="z-index: 2;">
              <img id="hairmale" src="/img/frontpage/frontpage1/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
              <img id="beard" src="/img/frontpage/frontpage1/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
              <img id="glassesmale" src="/img/frontpage/frontpage1/man/glasses/glasses.png" class="extra" style="z-index: 2;">
            </div>
            <div class="extras">
              <img src="/img/frontpage/frontpage1/extra/extra-1.png" class="extra" onclick="selectContainerContent('frontpage1')" style="z-index: 3;">
            </div>
            <div class="title-wrapper text-center">
              <h1 id="names" title="Esta será tu portada">Esta será tu portada</h1>
            </div>
        </div>

              <div class="page-wrapper" id="frontpage2">
                <img src="/img/frontpage/frontpage2/extra/two-avatars.jpg" class="page-img img-fluid">
                <div class="giver-img">
                  <img src="/img/frontpage/frontpage2/woman/giver-base.png" class="extra" style="z-index: 1;">
                  <img id="eyesfemale1" src="/img/frontpage/frontpage2/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                  <img id="hairfemale1" src="/img/frontpage/frontpage2/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                  <img id="glassesfemale1" src="/img/frontpage/frontpage2/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="receiver-img">
                  <img src="/img/frontpage/frontpage2/man/receiver-base.png" class="extra" style="z-index: 2;">
                  <img id="eyesmale1" src="/img/frontpage/frontpage2/man/eyes/brown.png" class="extra" style="z-index: 2;">
                  <img id="hairmale1" src="/img/frontpage/frontpage2/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                  <img id="beard1" src="/img/frontpage/frontpage2/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                  <img id="glassesmale1" src="/img/frontpage/frontpage2/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="extras">
                  <img src="/img/frontpage/frontpage2/extra/extra-1.png" class="extra" onclick="selectContainerContent('frontpage2')" style="z-index: 3;">
                </div>
                <div class="title-wrapper text-center">
                  <h1 id="names1" title="Esta será tu portada">Esta será tu portada</h1>
                </div>
              </div>



              <div class="page-wrapper" id="frontpage3">
                <img src="/img/frontpage/frontpage3/extra/two-avatars.jpg" class="page-img img-fluid">
                <div class="giver-img">
                  <img src="/img/frontpage/frontpage3/woman/receiver-base.png" class="extra" style="z-index: 1;">
                  <img id="eyesfemalee2" src="/img/frontpage/frontpage3/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                  <img id="hairfemalee2" src="/img/frontpage/frontpage3/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                  <img id="glassesfemalee2" src="/img/frontpage/frontpage3/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="receiver-img">
                  <img src="/img/frontpage/frontpage3/man/giver-base.png" class="extra" style="z-index: 2;">
                  <img id="eyesmalee2" src="/img/frontpage/frontpage3/man/eyes/brown.png" class="extra" style="z-index: 2;">
                  <img id="hairmalee2" src="/img/frontpage/frontpage3/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                  <img id="beardd2" src="/img/frontpage/frontpage3/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                  <img id="glassesmalee2" src="/img/frontpage/frontpage3/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="extras">
                  <img src="/img/frontpage/frontpage3/extra/extra-1.png" class="extra" onclick="selectContainerContent('frontpage3')" style="z-index: 3;">
                </div>
                <div class="title-wrapper text-center">
                  <h1 id="names2" title="Esta será tu portada">Esta será tu portada</h1>
                </div>
              </div>


                <div class="page-wrapper" id="frontpage4">
                    <img src="/img/frontpage/frontpage4/extra/two-avatars.jpg" class="page-img img-fluid" >
                    <div class="giver-img">
                      <img src="/img/frontpage/frontpage4/woman/giver-base.png" class="extra" style="z-index: 1;">
                      <img id="eyesfemalee3" src="/img/frontpage/frontpage4/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                      <img id="hairfemalee3" src="/img/frontpage/frontpage4/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                      <img id="glassesfemalee3" src="/img/frontpage/frontpage4/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-img">
                      <img src="/img/frontpage/frontpage4/man/receiver-base.png" class="extra" style="z-index: 2;">
                      <img id="eyesmalee3" src="/img/frontpage/frontpage4/man/eyes/brown.png" onclick="selectContainerContent('frontpage4')" class="extra" style="z-index: 3;">
                      <img id="hairmalee3" src="/img/frontpage/frontpage4/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                      <img id="beardd3" src="/img/frontpage/frontpage4/man/beard/brown/brown1.png" class="extra" style="z-index: 2;" >
                      <img id="glassesmalee3" src="/img/frontpage/frontpage4/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="title-wrapper text-center">
                      <h1 id="names3" title="Esta será tu portada">Esta será tu portada</h1>
                    </div>
                </div>
              </div>

              <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-lg d-flex" role="group">
                            <a href="#" class="btn btn-primary flex-fill" id="btn1">Personaliza las páginas de tu libró</a>
                            <a href="{{ url('avatar-female') }}" class="btn btn-primary flex-fill" id="btn2">Cambia la apariencia de la mujer</a>
                            <a href="{{ url('avatar-male') }}" class="btn btn-primary flex-fill" id="btn3">Cambia la apariencia del hombre</a>
                        </div>
                    </div>
                </div>
            </div>

</div>
<script src="{{ asset('js/Book_front_page.js')}}"></script>
<script src="{{ asset('js/Book_front_page1.js')}}"></script>
<script src="{{ asset('js/Book_front_page2.js')}}"></script>
<script src="{{ asset('js/Book_front_page3.js')}}"></script>
<script src="{{ asset('js/Book_front_page4.js')}}"></script>

</body>
</html>
