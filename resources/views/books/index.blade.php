<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Love Books</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href ="{{ asset('css/index.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="/">librodeamor.co</a>
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


          <div id="home">
            <div class="row">
                <div class="col-12 home-baner">
                    <div class="title d-sm"></div>
                    <div class="title d d-sm text-lg center">
                        <h1>Todo tu amor</h1>
                        <h1>en nuestros</h1>
                        <h1>libros</h1>
                    </div>
                    <hr class="line">
                    <h2 class="text">Un regalo que te encantará</h2>
                    <a href="#products" class="btn btn-primary btn-sm">Personaliza el libro</a>
                </div>
            </div>

            <div class="col-12 section-steps">
                <div class="title text-center">En pocos clicks da un regalo único e inolvidable</div>
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

            <div class="row">
                <div class="col-md-6">
                  <!-- Carrusel de Imágenes -->
                  <div id="carouselImages" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/gallery-home-1.jpg" alt="Imagen 1">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/img/gallery-home-2.jpg" alt="Imagen 2">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/img/gallery-home-3.jpg" alt="Imagen 3">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/img/gallery-home-4.jpg" alt="Imagen 3">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselImages" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselImages" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                  </div>
                </div>


                <div class="col-md-6">
                  <div id="carouselOpinions" class="carousel carousel-opinions slide" data-ride="carousel2">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="testimonial-item">
                          <div class="testimonial-content">
                            <p>"El equipo de librodeamor es increíble. ¡Me ayudaron a encontrar el regalo perfecto para mi pareja!"</p>
                            <p>- Ana Rodríguez</p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="testimonial-item">
                          <div class="testimonial-content">
                            <p>"Los productos son de alta calidad y el proceso de personalización es sencillo. Recomiendo librodeamor a todos mis amigos."</p>
                            <p>- Carlos Martínez</p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="testimonial-item">
                          <div class="testimonial-content">
                            <p>"Excelente servicio, quedé encantado con mi compra."</p>
                            <p>Juan Pérez</p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="testimonial-item">
                          <div class="testimonial-content">
                            <p>"Recomiendo totalmente esta pagina, encontré el regalo perfecto para mi pareja."</p>
                            <p>-Andres Rodrigues</p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="testimonial-item">
                          <div class="testimonial-content">
                            <p>"No puedo estar más feliz con mi libro personalizado, es único y especial"</p>
                            <p>-Laura Cardona</p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="testimonial-item">
                          <div class="testimonial-content">
                            <p>"Gracias librodeamor por este regalo tan espectacular, muy buena la calidad de sus libros"</p>
                            <p>-Andrea Sanchez</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselOpinions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselOpinions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                  </div>
                </div>
              </div>

            <div class="row">
            <div class="col-12 section-attention">
                <h3 style="color: #ffffff" class="subtitle">EXISTEN MUCHAS FORMAS DE DEMOSTRARLE LO QUE SIENTES A TUS SERES QUERIDOS</h3>
                <div class="title">¿Alguna vez<br>pensaste en un libro?</div>
            </div>
            <div class="row">
              <div class="col-12 d-md">
                <div class="row step-wrap">
                  <div class="col-6 step-text">
                    <div class="subtitle step-title"></div>
                    <div class="step-desc"></div>
                  </div>
            </div>
        </div>
            </div>

            <div class="col-12 section-price desktop ">
                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="/img/book-image-2-sr.jpg">
                    </div>
                    <div class="col-6 right text-center">
                        <div class="price title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precio</font></font></div>
                        <div class="subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20.000$ - 30.000$</font></font></div>
                        <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ precio de entrega</font></font></div>

                        <a href="#products" class="btn btn-primary btn-lg btn-action"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escoge un libro</font></font></a>
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
                        <div class="feature-title">Impresión</div>
                        <div class="feature-desc">Impresión digital profesional</div>
                    </div>

                    <div class="col-6 col-md-3 feature">
                        <div class="feat-img">
                            <img class="img-fluid" src="/img/amor (2).png">
                        </div>
                        <div class="feature-title">Hermoso</div>
                        <div class="feature-desc">Un regalo único</div>
                    </div>

                    <div class="col-6 col-md-3 feature">
                        <div class="feat-img">
                            <img class="img-fluid" src="/img/camion (2).png">
                        </div>
                        <div class="feature-title">Entrega</div>
                        <div class="feature-desc">4 - 7 dias hábiles</div>
                    </div>
                </div>
            </div>

            <footer id="footer" class="container-fluid">
                <div class="row">
                  <div class="col text-center">
                    <h3 class="title">Guía de compra</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Ayuda</a></li>
                      <li><a href="#">Pago</a></li>
                      <li><a href="#">Envío</a></li>
                      <li><a href="#">Devoluciones</a></li>
                    </ul>
                  </div>
                  <div class="col text-center">
                    <h3 class="title">Empresa</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Conócenos</a></li>
                      <li><a href="#">Términos y condiciones</a></li>
                      <li><a href="#">Política de privacidad</a></li>
                      <li><a href="#">Política de cookies</a></li>
                    </ul>
                  </div>
                  <div class="col text-center">
                    <h3 class="title">Social</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/people/Libro-de-amor/100087733617470/?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="https://instagram.com/librodeamor.co?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                  </div>
                  <div class="col text-center">
                    <h3 class="title">Medios de pago</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Mastercard</a></li>
                      <li><a href="#">Visa</a></li>
                      <li><a href="#">PayPal</a></li>
                    </ul>
                  </div>
                </div>
              </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
