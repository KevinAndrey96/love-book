<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/Avatar_male.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <title>Edita tu avatar</title>
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

        <button id="btn-hair" type="button" class="btn btn-custom">Cabello</button>
        <button id="btn-glasses" type="button" class="btn btn-custom">Gafas</button>
        <button id="btn-eyes"  type="button" class="btn btn-custom">Ojos</button>
        <button id="btn-beard" type="button" class="btn btn-custom">Barba</button>


    <div class="container">
        <div class="section" id="hair-section">
        <h3 class="text">Escoge tu cabello</h3>
        <div class="hair-select">
            <div> <input id="hair-1"  type="image" src="/Images/Man/Buttons/Hair/half1.jpg">  </div>
            <div> <input id="hair-2"  type="image" src="/Images/Man/Buttons/Hair/half2.jpg"> </div>
            <div> <input id="hair-3"  type="image" src="/Images/Man/Buttons/Hair/half3.jpg"> </div>
            <div> <input id="hair-4"  type="image" src="/Images/Man/Buttons/Hair/bald1.jpg"> </div>
            <div> <input id="hair-5"  type="image" src="/Images/Man/Buttons/Hair/bald2.jpg"> </div>
            <div> <input id="hair-6"  type="image" src="/Images/Man/Buttons/Hair/short2.jpg"> </div>
            <div> <input id="hair-7"  type="image" src="/Images/Man/Buttons/Hair/short1.jpg"> </div>
            <div> <input id="hair-8"  type="image" src="/Images/Man/Buttons/Hair/long1.jpg"> </div>
            <div> <input id="hair-9"  type="image" src="/Images/Man/Buttons/Hair/long2.jpg"> </div>
        </div>

    <div class="color-container">
      <h3 class="text">Cambia tu color de cabello<h3>
         <div class="color-select">
         <div id="brown" onclick="changeHairColor('brown')"></div>
         <div id="light-brown" onclick="changeHairColor('light-brown')"></div>
         <div id="light" onclick="changeHairColor('light')"></div>
         <div id="grey" onclick="changeHairColor('grey')"></div>
         <div id="black" onclick="changeHairColor('black')"></div>
     </div>
 </div>
</div>
</div>

    <div class="container">
        <div class="section" id="beard-section">
        <h3 class="text">Escoge tu barba</h3>
        <div class="beard-select">
            <div> <input id="beard-1"  type="image" src="/Images/Man/Buttons/beard/beard1.jpg">  </div>
            <div> <input id="beard-2"  type="image" src="/Images/Man/Buttons/beard/beard2.jpg"> </div>
            <div> <input id="beard-3"  type="image" src="/Images/Man/Buttons/beard/beard3.jpg"> </div>
            <div> <input id="beard-4"  type="image" src="/Images/Man/Buttons/beard/beard4.jpg"> </div>
            <div> <input id="beard-5"  type="image" src="/Images/Man/Buttons/beard/beard5.jpg"> </div>
            <div> <input id="beard-6"  type="image" src="/Images/Man/Buttons/beard/beard6.jpg"> </div>
            <div> <input id="beard-7"  type="image" src="/Images/Man/Buttons/beard/no-img.jpg"> </div>
        </div>

        <div class="color-container">
            <h3 class="text">Cambia tu color de barba<h3>
                <div class="color-select">

                <div id="brown" onclick="changeBeardColor('brown')"></div>
                <div id="light-brown" onclick="changeBeardColor('light-brown')"></div>
                <div id="light" onclick="changeBeardColor('light')"> </div>
                <div id="grey" onclick="changeBeardColor('grey')"></div>
                <div  id="black" onclick="changeBeardColor('black')"></div>
            </div>
        </div>
        </div>
        </div>

      <div class="container">
        <div class="section" id="eyes-section">
        <h3 class="text">Elige tu color de ojos</h3>
           <div class="eyes-select">
            <div id="eyes-1" onclick="changeEyesColor('brown')"></div>
            <div id="eyes-2" onclick="changeEyesColor('black')"></div>
            <div id="eyes-3" onclick="changeEyesColor('blue')"> </div>
            <div id="eyes-4" onclick="changeEyesColor('green')"></div>
           </div>
         </div>
        </div>

        <div class="container">
            <div class="section" id="glasses-section">
                <h3 class="text">Elige si usas gafas</h3>
                  <div class="glasses-select">
                        <div> <input id="glasses-0"  type="image" src="/Images/Man/Glasses/no-img.png"></div>
                        <div> <input id="glasses-1"  type="image" src="/Images/Man/Glasses/glasses.jpg"></div>
                   </div>
                 </div>
             </div>
    </div>

        <div class="images">

        <img src="/Images/Man/base.jpg" >
        <img src="/Images/Man/Hair/Brown/half1.png" id="hairchange" class="on">
        <img src="/Images/Man/Beard/Brown/brown1.png" id="beardchange" class="on">
        <img src="/Images/Man/Eyes/brown.png" id="eyeschange" class="on">
        <img src="/Images/Man/Glasses/glasses.png" id="glasseschange" class="on">

        </div>

            <label for="nameMale"></label>
            <input type="text" id="nameMale" name="nombre" placeholder="Name">

        <div class="btn-container">
            <button id="btn-continue" type="button" class="btn btn-custom">Continuar</button>
        </div>
        <script src="{{ asset('js/Avatar_male.js')}}"></script>
        </body>
</html>

