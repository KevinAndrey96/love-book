<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Love Books</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href ="{{ asset('css/index.css')}}">
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
                    <a class="nav-item nav-link nav-btn" href="{{ url ('')}}">INICIO</a>
                    <a class="nav-item nav-link nav-btn" href="#footer">CONTACTO</a>
                </div>
            </div>
        </nav>

        <hr class="line-main">

          <div id="home">
            <div class="row">
                <div class="col-12 home-baner">
                    <div class="title d-sm"></div>
                    <div class="title d d-sm text-lg center">
                        <h1>Todo tu amor</h1>
                        <h1>en nuestros</h1>
                        <h1>libros</h1>
                    </div>
                    <hr class="line-title">
                    <h2 class="text">Un regalo que te encantara</h2>
                    <a href="#products" class="btn btn-primary btn-lg">Elige un libro</a>
                </div>
            </div>

            <div class="col-12 section-steps">
                <div class="title text-center">En pocos clics da un regalo único e inolvidable</div>
                <div class="row">
                    <div class="col-12 col-md-4 text-center step-wrap">
                        <img class="img-fluid" src="./img/step-1-removebg-preview.png">
                        <div class="title step-title">1. Crea tu personaje</div>
                        <div class="text">Observa, ¡se parece a nosotros!</div>
                    </div>

                    <div class="col-12 col-md-4 text-center step-wrap">
                        <img class="img-fluid" src="./img/step-2-sr-removebg-preview.png">
                        <div class="title step-title">2. Elige una portada</div>
                        <div class="text">¡Escribe un título y haz que sea único!</div>
                    </div>

                    <div class="col-12 col-md-4 text-center step-wrap">
                        <img class="img-fluid" src="./img/step-3-sr-removebg-preview.png">
                        <div class="title step-title">3. Selecciona páginas</div>
                        <div class="text">Edita las páginas a tu gusto :D</div>
                    </div>
                </div>
            </div>

            <div id="products">
                <div class="home-products">
                  <div class="product">
                    <div class="product-image">
                      <img src="./img/product-2-sr.png" alt="Un libro para un aniversario o un cumpleaños">
                    </div>
                    <div class="product-text">
                      <div class="product-title">Un libro para un aniversario o un cumpleaños</div>
                      <div class="product-description">Elige un libro para celebrar una fecha especial y hacer felices a tus seres queridos</div>
                      <div class="product-price">$20.000 COP</div>
                      <a href="{{ url ('avatar')}}" class="btn-primary">Personaliza tu libro</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-12 section-precio">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="./img/product-2-sr.png">
                    </div>
                    <div class="col-md-6">
                        <div class="price title">El Precio</div>
                        <div class="subtitle">$20.000 - $25.000</div>
                        <div class="env">+ Costo de envío</div>
                        <a href="#products" class="btn btn-primary btn-lg btn-action mt-3">Elige un libro</a>
                    </div>
                </div>

            <div class="row">
            <div class="col-12 section-attention">
                <h3 style="color: #4f6272" class="subtitle">EXISTEN MUCHAS FORMAS DE DEMOSTRARLE LO QUE SIENTES A TUS SERES QUERIDOS</h3>
                <div class="title">¿Alguna vez<br>pensaste en un libro?</div>
            </div>
            <div class="row">
              <div class="col-12 d-md">
                <div class="row step-wrap">
                  <div class="col-6 step-text">
                    <div class="subtitle step-title"></div>
                    <div class="step-desc"></div>
                  </div>
            <div class="col-6">
              <img class="img-fluid" src=""></div>
            </div>
            </div>

        </div>

            <div class="container">
                <div class="row section-features">
                    <div class="col-6 col-md-3 feature">
                        <div class="feat-img">
                            <img class="img-fluid" src="/img/tamano (4).png">
                        </div>
                        <div class="feature-title">Tamaño</div>
                        <div class="feature-desc">15.2cm x 20.8cm - Aproximadamente</div>
                    </div>

                    <div class="col-6 col-md-3 feature">
                        <div class="feat-img">
                            <img class="img-fluid" src="/img/impresora (2).png">
                        </div>
                        <div class="feature-title">Impresion</div>
                        <div class="feature-desc">Impresion digital profesional</div>
                    </div>

                    <div class="col-6 col-md-3 feature">
                        <div class="feat-img">
                            <img class="img-fluid" src="/img/amor (2).png">
                        </div>
                        <div class="feature-title">Hermoso</div>
                        <div class="feature-desc">Un regalo unico</div>
                    </div>

                    <div class="col-6 col-md-3 feature">
                        <div class="feat-img">
                            <img class="img-fluid" src="/img/camion (2).png">
                        </div>
                        <div class="feature-title">Entrega</div>
                        <div class="feature-desc">4 - 7 dias habiles</div>
                    </div>
                </div>
            </div>

    <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 text-center contact">
                <div class="title">CONTACTO</div>
                <a style="color:white" id="btn-email" class="text" href="">
                    <i class="far fa-envelope"></i>correoejemplo@gmail.com</a>
                </div>

            <div class="col-12 col-md-4 text-center follow-us">
            <div class="title mt-4">SIGANOS</div>
                <div class="social-icons">
                    <a class="icon fb" href="" target="_blank">
                        <img src="/img/facebook (2).png">
                    </a>

                    <a class="icon ig" href="" target="_blank">
                        <img src="/img/instagram (2).png">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4 copyright text-center">
              <div class="mt-4">©2023</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
