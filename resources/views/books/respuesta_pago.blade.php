<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">






    <title>Respuesta de Transacción</title>
    <style>
  /* Estilos para la barra de navegación */

body{
    font-family: 'Montserrat' !important;
    background-color: #ddeffd !important;


}

@media (max-width: 768px) {
 .logo-img{
        width: 160px;
        height: 150px; /* Ajusta la altura según el tamaño deseado */
        margin-top: -35% !important;
        margin-bottom: -20% !important;
        margin-left: 65% !important;
      }

       .navbar-toggler{
        margin-top: -10% !important;

      }

      .bookss{
          margin-top: 20% !important;
      }

      .nav-item{
          text-align: center;
                    font-family: 'Montserrat';

      }

      .navbar {
    width: 100%;
    top: 0;
    left: 0;
    z-index: 9999;
    margin-bottom: -20% !important;
    background-color: #ddeffd !important;
              font-family: 'Montserrat';

  }

}

@media (min-width: 768px) {
 .logo-img{
    width: 160px !important;
    height: 150px !important; /* Ajusta la altura según el tamaño deseado */
    margin-left: -55%;
    margin-top: -30% !important;
    margin-bottom: -20%;

  }

  .bookss
  {
      margin-top: 10% !important;
  }


.navbar {
    width: 100%;
    height: 10%;
    position: fixed !important;
    top: 0;
    left: 0;
    z-index: 9999;
    margin-bottom: -20px !important;
    background-color: #ddeffd !important;
              font-family: 'Montserrat';

  }


}





.nav-link {
    text-decoration: none;
    color: rgba(54,54,54,.5);
    font-size: 15px;
    font-weight: bold;
              font-family: 'Montserrat';

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
              font-family: 'Montserrat', sans-serif;

}



p {
    font-size: 18px;
    margin-bottom: 20px;
              font-family: 'Montserrat', sans-serif;

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

    <div class=" bookss container">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
