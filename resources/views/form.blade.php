<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href ="{{ asset('css/form.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>librodeamor.co</title>
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
        <div class="form-container">
  <h2>

            <div class="col-12 pages">

        </div>
        <div class="price-container">
            <div class="price-header">
              <h3>De 4 a 7 días hábiles</h3>
            </div>
            <div class="price-details">
                <div class="price-details">
                    <p>Libro: <span>$ 109.900</span></p>
                    <p class="line">Envío: <span>$ 5.900</span></p>
                    <p>Total: <span>$ 115.800</span></p>

            </div>
            </div>
          </div>

        <form action="https://checkout.wompi.co/p/" method="GET" class="wompi-form">
            <!-- OBLIGATORIOS -->
            <input type="hidden" name="public-key" value="pub_test_FXuP06pwO8kBrtw9quipeLbETCLqsLtu" />
            <input type="hidden" name="currency" value="COP" />
            <input type="hidden" name="amount-in-cents" value="1500000" />
            <input type="hidden" name="reference" value="{{ uniqid() }}">
            <input type="hidden" name="redirect-url" value="{{ url('/pago/respuesta') }}" />

            <!-- OPCIONALES -->
            <h2>
                Información del comprador
              </h2>
            <input type="email" name="customer-data:email" placeholder="Correo electrónico" class="wompi-input" />
            <input type="text" name="customer-data:full-name" placeholder="Nombre completo" class="wompi-input" />
            <input type="tel" name="customer-data:phone-number" placeholder="Número de teléfono" class="wompi-input" />
            <h2>
                Direccion del envio
              </h2>
            <input type="text" name="shipping-address:address-line-1" placeholder="Dirección de envío" class="wompi-input" />
            <select name="shipping-address:country" class="wompi-input">
              <option value="CO">Colombia</option>
            </select>
            <input type="text" name="shipping-address:phone-number" placeholder="Teléfono de quien recibe" class="wompi-input" />
            <input type="text" name="shipping-address:city" placeholder="Ciudad de envío" class="wompi-input" />
            <input type="text" name="shipping-address:region" placeholder="Región de envío" class="wompi-input" />



            <button type="submit" class="wompi-button">
                Pagar
                <i class="fas fa-arrow-right"></i>
              </button>


          </form>





    <script src="{{ asset('js/Book_id.js')}}"></script>

</body>
</html>
