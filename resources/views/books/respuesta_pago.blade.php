<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Respuesta de Transacción</title>
    <style>
  /* Estilos para la barra de navegación */
.navbar {
    background-color: #ddeffd !important;

}

body{
    font-family: 'Montserrat', sans-serif !important;
    background-color: #ddeffd !important;


}


.navbar {
    width: 100%;
    top: 0;
    left: 0;
    z-index: 9999;
    margin-bottom: -20px !important;
  }

.nav-link {
    border-radius: 30px;
    text-decoration: none;
    color: rgba(54,54,54,.5);
    font-size: 15px;
    font-weight: bold;
    margin-top: -30% !important;
    margin-left: 10%;
}

.navbar-nav .nav-link {
    color: rgba(54,54,54,.5);
    margin-right: 20px;
    font-size: 16px;
}

.navbar-nav .nav-link:hover {
    color: #ff6b6b;
}

.social-icons {
    margin-top: 20px;
}

.social-icons a {
    color: #d24565; /* Color de fondo */
    font-size: 24px;
    margin: 0 10px;
    text-decoration: none;
}

/* Estilos para el contenido */
.container {
    text-align: center;
    padding: 20px;
}

.icon-book {
    font-size: 48px;
    margin-bottom: 10px;
    color: #d24565; /* Color de fondo */

}

h1 {
    font-size: 32px;
    margin-bottom: 10px;
}

.logo-img{
    width: 200px;
    height: 150px;
    margin-right: -100px; /* Agrega un margen derecho para separar el logo del texto */
    margin-top: -60% !important;
    margin-left: -300%;

}

p {
    font-size: 18px;
    margin-bottom: 20px;
}

.create-another {
    font-size: 16px;
}

.create-another a {
    color: #ff6b6b;
    text-decoration: none;
}





    </style>
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
                        <a class="nav-link" href="/#products">NUESTRO LIBRO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#footer">CONTACTO</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <hr class="line-main">

    <div class="container">
        <i class="icon-book fas fa-book"></i> <!-- Icono de libro -->
      <h1>Felicidades, tu libro está en camino</h1>
      <p>Gracias por elegirnos. El estado de tu transacción es: {{ $status }}</p>
      <div class="create-another">
        ¿Quieres crear otro libro? <a href="{{ url('/') }}">Haz clic aquí</a>
      </div>

      <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100087783354781&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://instagram.com/librodeamor.co?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
  </body>
  </html>
