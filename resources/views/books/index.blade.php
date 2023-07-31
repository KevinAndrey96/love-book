<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Libro de Amor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href ="{{ asset('css/index.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/LDALogo.png" alt="Logo" class="logo-img">

                </a>
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
                            <a class="nav-link" href="#footer">CONTACTO</a>
                        </li>
                    </ul>
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
                    <hr class="line">
                    <h2 class="text">Un regalo que te encantará</h2>
                    <a href="#products" class="btn btn-primary btn-sm">Personaliza el libro</a>
                </div>
            </div>

            <div class="col-12 section-steps">
                <div class="title text-center">En pocos clicks da un regalo único e inolvidable</div>
                <div class="row">
                    <div class="col-12 col-md-4 text-center step-wrap">
                        <img id="img1" class="img-fluid" src="./img/step-1-removebg-preview.png">
                        <div class="title step-title">1. Crea tu personaje</div>
                        <div class="text">Observa, ¡se parece a nosotros!</div>
                    </div>

                    <div class="col-12 col-md-4 text-center step-wrap">
                        <img id="img2" class="img-fluid" src="./img/step-2-sr-removebg-preview.png">
                        <div id="title1" class="title step-title">2. Elige una portada</div>
                        <div id="text1" class="text">¡Escribe un título y haz que sea único!</div>
                    </div>

                    <div class="col-12 col-md-4 text-center step-wrap">
                        <img id="img3" class="img-fluid" src="./img/step-3-sr-removebg-preview.png">
                        <div class="title step-title">3. Selecciona páginas</div>
                        <div class="text">Edita las páginas a tu gusto</div>
                    </div>
                </div>
            </div>

            <div class="col-12 section-price desktop" id="products">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center"> <!-- En dispositivos grandes, la columna ocupa 6 columnas y centra el contenido horizontal y verticalmente -->
                        <img class="img-fluid imagen" src="/img/book-image-2-sr.jpg">
                  </div>
                  <div class="col-md-6 text-center">
                    <div class="desc2 text-center">Existen muchas formas de demostrar lo que sientes, ¿Alguna vez pensaste en un libro?</div>
                    <div class="subtitle">109.900$</div>
                    <div class="desc">+ precio de entrega</div>
                        <a href="/avatar" class="btn btn-primary btn-sm ">Personaliza tu libro</a>
                  </div>
                </div>
              </div>


            <div class="row">
                <div class="col-md-6 carrusel" style="background-color: #fdebdd;">
                  <!-- Carrusel de Imágenes -->
                  <div id="carouselImages" class="carousel slide carousel-img" data-ride="carousel">
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
                    <a class="carousel-control-prev imgs" href="#carouselImages" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next imgs" href="#carouselImages" role="button" data-slide="next">
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
              <div class="col-12 d-md">
                <div class="row step-wrap">
                  <div class="col-6 step-text">
                    <div class="subtitle step-title"></div>
                    <div class="step-desc"></div>
                  </div>
            </div>
        </div>
            </div>



            <div class="container-fluid">
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
                        <div class="feature-desc">Impresión digital </div>
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
                  <div class="col-12 col-md-4 text-center">
                    <h3 class="title">Contacto</h3>
                    <a href="mailto:Ayuda@librodeamor.com.co" class="title" style="text-decoration: none !important; color: white !important;">Ayuda@librodeamor.com.co</a>
                  </div>
                  <div class="col-12 col-md-4 text-center">
                    <h3 class="title">Social</h3>
                    <ul class="list-unstyled">
                      <li><a href="https://www.facebook.com/profile.php?id=100087783354781&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                      <li><a href="https://instagram.com/librodeamor.co?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-4 text-center">
                    <h3 class="title">Medios de pago</h3>
                    <ul class="list-unstyled" id="medios-de-pago">
                      <li><a href="#">Bancolombia</a></li>
                      <li><a href="#">Visa</a></li>
                      <li><a href="#">Nequi</a></li>
                      <li><a href="#">Corresponsal Bancario</a></li>
                      <li><a href="#">PSE</a></li>
                    </ul>
                  </div>
                </div>
              </footer>


              </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
