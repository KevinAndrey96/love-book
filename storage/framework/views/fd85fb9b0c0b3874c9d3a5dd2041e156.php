<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Love Books</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href ="<?php echo e(asset('css/index.css')); ?>">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <body>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link nav-btn" href="<?php echo e(url ('Books')); ?>">INICIO</a>
                    <a class="nav-item nav-link nav-btn" href="#footer">CONTACTO</a>
                </div>
            </div>
        </nav>

        <hr class="line-main">


          <div id="home">
            <div class="row">
                <div class="col-12 home-baner">
                    <div class="title d-md-none"></div>
                    <div class="title d-none d-md-block">
                        <h1>Todo tu amor</h1>
                        <h1>en nuestros</h1>
                        <h1>libros</h1>
                    </div>
                    <hr class="line-title">
                    <h2 class="text">Un regalo que te encantara</h2>
                    <a href="#products" class="btn btn-primary btn-lg">Elige un libro</a>
                </div>
            </div>
            <div id="products">
                <div class="home-products">
                  <div class="product">
                    <div class="product-image">
                      <img src="./images/product-2-sr.png" alt="Un libro para un aniversario o un cumpleaños">
                    </div>
                    <div class="product-text">
                      <div class="product-title">Un libro para un aniversario o un cumpleaños</div>
                      <div class="product-description">Elige un libro para celebrar una fecha especial y hacer felices a tus seres queridos</div>
                      <div class="product-price">$20.000 COP</div>
                      <a href="<?php echo e(url ('Avatar')); ?>" class="btn-primary">Personaliza tu libro</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12 section-attention">
                <h3 style="color: #4f6272" class="subtitle">EXISTEN MUCHAS FORMAS DE DEMOSTRARLE LO QUE SIENTES A TUS SERES QUERIDOS</h3>
                <div class="title">¿Alguna vez<br>pensaste en un libro?</div>
            </div>
            <div class="row">
              <div class="col-12 d-md-none">
                <div class="row step-wrap">
                  <div class="col-6 step-text">
                    <div class="subtitle step-title"></div>
                    <div class="step-desc"></div>
                  </div>
            <div class="col-6">
              <img class="img-fluid" src=""></div>
            </div>
            </div>

            <div class="col-12 section-steps  d-none d-md-block">
                <div style="color:#4f6272;" class="title text-center">En pocos clicks da un regalo unico e inolvidable</div>
                   <div class="row">
                     <div class="col-4 text-center step-wrap">
                            <img class="img-fluid" src="./images/step-1-removebg-preview.png">
                            <div class="title step-title">1. Crea tu personaje</div>
                            <div class="text">Observa, se parece a nosotros!!!</div>
                    </div>

            <div class="col-4 text-center step-wrap">
                            <img class="img-fluid" src="./images/step-2-sr-removebg-preview.png">
                            <div class="title step-title">2. Elige una portada</div>
                            <div class="text">Escribe un titulo y haz que sea unico!</div>
            </div>

             <div class="col-4 text-center step-wrap">
                            <img class="img-fluid" src="./images/step-3-sr-removebg-preview.png">
                            <div class="title step-title">3. Seleccionar paginas</div>
                            <div class="text">Edita las paginas a tu gusto :D</div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-12 section-precio d-none d-md-block">
                <div class="row">
                  <div class="col-6">
                    <img class="img-fluid" src="./images/product-2-sr.png"></div>
                        <div class="col-6 right">
                            <div class="price title">El Precio</div>
                            <div class="subtitle">$20.000 - 25.000$</div>
                            <div class="env">+ Costo de envio</div>
                                <a href="#products" class="btn btn-primary btn-lg btn-action">Elige un libro</a>
                            </div>
                        </div>
                </div>
            </div>

            <div class="row section-features">
                <div class="col-6 col-md-3 feature">
                    <div class="feat-img">
                        <img src="/images/box.png">
                    </div>
                    <div class="feature-title">Tamaño</div>
                    <div class="feature-desc">15.2cm x 20.8cm - Aproximadamente</div>
                </div>

                <div class="col-6 col-md-3 feature">
                    <div class="feat-img">
                        <img src="/images/printer.png">
                    </div>
                    <div class="feature-title">Impresion</div>
                    <div class="feature-desc">Impresion digital profesional</div>
                </div>

                <div class="col-6 col-md-3 feature">
                    <div class="feat-img">
                        <img src="/images/love.png">
                    </div>
                    <div class="feature-title">Hermoso</div>
                    <div class="feature-desc">Un regalo unico</div>
                </div>

                <div class="col-6 col-md-3 feature">
                    <div class="feat-img">
                        <img src="/images/truck.png">
                    </div>
                    <div class="feature-title">Entrega</div>
                    <div class="feature-desc">4 - 7 dias habiles</div>
                </div>
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
                        <img src="/images/fb.png">
                    </a>

                    <a class="icon ig" href="" target="_blank">
                        <img src="/images/ins.png">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4 copyright text-center">
              <div class="mt-4">©2023</div>
            </div>
        </div>
    </div>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\Love-Book\resources\views/Books/index.blade.php ENDPATH**/ ?>