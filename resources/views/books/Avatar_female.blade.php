<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/Avatar_female.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <title>Edita tu avatar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="z-index: 999;">
        <div class="container">
          <a class="navbar-brand" href="">LoveBooks</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#products">NUESTRO LIBRO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACTO</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <hr class="line-main">
        <div class="container-btn">
        <button id="btn-hair" type="button" class="btn1 btn-lg btn-block text-center mt-3">Cabello</button>
        <button id="btn-glasses" type="button" class="btn1 btn-lg btn-block text-center mt-3">Gafas</button>
        <button id="btn-eyes"  type="button" class="btn1 btn-lg btn-block text-center mt-3">Ojos</button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="color-container">
                  <div class="section" id="color-section">
                    <h3 class="text">Elige tu color de cabello</h3>
                    <div class="color-select row justify-content-center">
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="brown" onclick="changeHairColor('brown')"></div>
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="light-brown" onclick="changeHairColor('light-brown')"></div>
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="dark-brown" onclick="changeHairColor('dark-brown')"></div>
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="blond-brown" onclick="changeHairColor('blond-brown')"></div>
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="light" onclick="changeHairColor('light')"></div>
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="very-light" onclick="changeHairColor('very-light')"></div>
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="black" onclick="changeHairColor('black')"></div>
                      <div class="col-6 col-sm-4 col-md-3 col-lg-2" id="red" onclick="changeHairColor('red')"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section" id="hair-section">
                  <h3 class="text">Elige tu cabello</h3>
                  <div class="hair-select d-flex justify-content-center">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-1" type="image" src="/img/woman/buttons/long1.jpg" class="img-fluid">
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-2" type="image" src="/img/woman/buttons/long2.jpg" class="img-fluid">
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-3" type="image" src="/img/woman/buttons/curly1.jpg" class="img-fluid">
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-4" type="image" src="/img/woman/buttons/short3.jpg" class="img-fluid">
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-5" type="image" src="/img/woman/buttons/pickedup.jpg" class="img-fluid">
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-6" type="image" src="/img/woman/buttons/curly2.jpg" class="img-fluid">
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-7" type="image" src="/img/woman/buttons/short2.jpg" class="img-fluid">
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <input id="hair-8" type="image" src="/img/woman/buttons/short1.jpg" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section" id="glasses-section">
                <h3 class="text">Elige si usas gafas</h3>
                <div class="glasses-select d-flex justify-content-center">
                    <div> <input id="glasses-0"  type="image" src="/img/woman/glasses/no-img.png"></div>
                    <div> <input id="glasses-1"  type="image" src="/img/woman/glasses/glasses1.jpg"></div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section" id="eyes-section">
                <h3 class="text">Elige tu color de ojos</h3>
                <div class="eyes-select d-flex justify-content-center">
                    <div id="eyes-1" onclick="changeEyesColor('black')"></div>
                    <div id="eyes-2" onclick="changeEyesColor('brown')"></div>
                    <div id="eyes-3" onclick="changeEyesColor('green')"> </div>
                    <div id="eyes-4" onclick="changeEyesColor('blue')"></div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="image-preview">
                  <div class="img" id="main-image">
                    <img src="/img/woman/base1.jpg" class="img-fluid">
                    <img src="/img/woman/hair/brown/long1.png" id="hairchangefemale" class="on img-fluid">
                    <img src="/img/woman/eyes/brown.png" id="eyeschangefemale" class="on img-fluid">
                    <img src="/img/woman/glasses/glasses.png" id="glasseschange" class="on img-fluid">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nameFemale"></label>
                  <input type="text" class="form-control" id="nameFemale" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 d-flex justify-content-end">
                <div class="btn-container">
                  <button id="btn-continue" type="button" class="btn btn-lg btn-block btn-primary mt-3">Continuar</button>
                </div>
              </div>
            </div>
          </div>




    <script src="{{ asset('js/Avatar_female.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
