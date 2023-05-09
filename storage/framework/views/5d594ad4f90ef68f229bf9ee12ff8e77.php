<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Love Books</title>


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href ="<?php echo e(asset('css/index.css')); ?>">

      <body>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?php echo e(url ('Libros')); ?>">Inicio</a>
                <a class="nav-item nav-link" href="#footer">Contacto</a>
            </div>
        </div>
        </nav>

            <div id="home">
            <div class="row">
                <div class="col-12 home-baner">
                    <div class="title d-md-none"></div>

                    <div class="title d-none d-md-block">
                        <h1>Todo tu Amor</h1>
                        <h1>En Nuestros</h1>
                        <h1>Libros</h1>
                    </div>
                    <div class="line"></div>
                    <h2 class="text">Un regalo que te encantara</h2>

                    <a href="#products" class="btn btn-primary btn-lg btn-action">Elige un libro</a>
                </div>
            </div>
            <div id="products" class="row">
            <div class="col-12 home-products">
            <div class="row">
              <div>
                <div class="book-box">
                 <img class="box-image" src="./imagenes/product-2-sr.png">
                    <div class="box-text">
                      <div class="box-text-title">Un libro para un aniversario o un cumpleaños</div>
                      <div class="box-text-desc">Elige un libro para celebrar una fecha especial y hacer felices a tus seres queridos</div>
                    </div>
                      <div class="btn-wrapper">
                      <div class="precio"> $20.000 COP</div>
                        <a href="<?php echo e(url ('Avatar')); ?>" class="product-btn btn btn-primary" data-id="2">Personaliza tu libro</a></div>
                      </div>
                    </div>

            <div class="row">
                <div class="col-12 col-md-5 section-attention">
                  <h3 class="subtitle">Existen muchas formas de demostrarle lo que sientes a tus seres queridos</h3>
                  <div class="title">¿Alguna vez<br>pensaste en un libro?</div>
                </div>

            <div class="col-12 col-md-7 order-md-first section-video">
              <video><source src="" type="video/mp4"></video></div>
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
                <div class="title text-center">En pocos clicks da un regalo unico e inolvidable</div>
                   <div class="row">
                     <div class="col-4 text-center step-wrap">
                            <img class="img-fluid" src="./Imagenes/step-1.jpg">
                            <div class="title step-title">1. Crea tu personaje</div>
                            <div class="text">Observa, se parece a nosotros!!!</div>
                    </div>

            <div class="col-4 text-center step-wrap">
                            <img class="img-fluid" src="./Imagenes/step-2-sr.jpg">
                            <div class="title step-title">2. Elige una portada</div>
                            <div class="text">Escribe un titulo y haz que sea unico!</div>
            </div>

             <div class="col-4 text-center step-wrap">
                            <img class="img-fluid" src="./Imagenes/step-3-sr (1).jpg">
                            <div class="title step-title">3. Seleccionar paginas</div>
                            <div class="text">Edita las paginas a tu gusto :D</div>
                            </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 col-md-6 section-images">
                    <div id="image-carousel" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
                        <div class="carousel-item  active ">
                        <img class="d-block w-100" src="./Imagenes/gallery-home-1.jpg">
                </div>
                        <div class="carousel-item ">
                        <img class="d-block w-100" src="./Imagenes/gallery-home-2.jpg">
                </div>
                        <div class="carousel-item ">
                        <img class="d-block w-100" src="./Imagenes/gallery-home-3.jpg">
                </div>
                        <div class="carousel-item ">
                        <img class="d-block w-100" src="./Imagenes/gallery-home-4.jpg">
                </div>
                        <div class="carousel-item ">
                        <img class="d-block w-100" src="./Imagenes/gallery-home-5.jpg">
                </div>
                        <div class="carousel-item ">
                        <img class="d-block w-100" src="./Imagenes/gallery-home-6.jpg">
                </div>
                        <div class="carousel-item ">
                        <img class="d-block w-100" src="./Imagenes/gallery-home-7.jpg">
                </div>
                </div>
        <a class="carousel-control-prev"  role="button" data-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next" href="" role="button" data-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    </div>

    <div class="col-12 col-md-6 section-opiniones">

            <div class="title"> Dijiste sobre nostros</div>
            <div id="opiniones-carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
            <div class="carousel-item  active ">
            <div class="subtitle"> ¡Estoy encantada! Verdaderamente el regalo más original de la historia ♥ </div>
            </div>
  </div>
    </div>
        </div>
            <div class="col-12 section-precio d-none d-md-block">
                <div class="row">
                  <div class="col-6">
                    <img class="img-fluid" src="./Imagenes/product-2-sr.png"></div>
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
                        <img src="./Imagenes/tamano (2).png">
                    </div>
                    <div class="feature-title">Dimenciones</div>
                    <div class="feature-desc">15.2cm x 20.8cm - Aproximadamente</div>
                </div>

                <div class="col-6 col-md-3 feature">
                    <div class="feat-img">
                        <img src="./Imagenes/impresora.png">
                    </div>
                    <div class="feature-title">Impresiones</div>
                    <div class="feature-desc">Impresion digital profesional</div>
                </div>

                <div class="col-6 col-md-3 feature">
                    <div class="feat-img">
                        <img src="./Imagenes/amor.png">
                    </div>
                    <div class="feature-title">Hermoso</div>
                    <div class="feature-desc">Un regalo unico</div>
                </div>

                <div class="col-6 col-md-3 feature">
                    <div class="feat-img">
                        <img src="./Imagenes/camion.png">
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
                <div class="title">Contacto</div>

                <a id="btn-email" class="text" href="">
                    <i class="far fa-envelope"></i>correoejemplo@gmail.com</a>
                </div>

            <div class="col-12 col-md-4 text-center follow-us">

            <div class="title mt-4">Siganos</div>
                <div class="social-icons">
                    <a class="icon fb" href="" target="_blank">
                        <img src="./Imagenes/simbolo-de-la-aplicacion-de-facebook.png">
                    </a>

                    <a class="icon ig" href="" target="_blank">
                        <img src="./Imagenes/instagram (1).png">
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
<?php /**PATH C:\xampp\htdocs\Proyecto-Libros\resources\views/Libros/index.blade.php ENDPATH**/ ?>