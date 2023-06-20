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
    <title>Formulario</title>
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

    <div class="container">
        <div class="form-container">
            <h2>Compra tu libro</h2>
            <div class="col-12 pages">
                <div class="page-wrapper" id="first-page-wrapper">
                    <img src="/img/books/page1/extra/two-avatars.jpg" class="modal-image">
                <div class="giver-img">
                    <img src="/img/books/page1/woman/giver-woman-base.png" class="extra modal-image" style="z-index: 1;">
                    <img id="eyesfemale" src="/img/books/page1/woman/eyes/brown.png" class="extra modal-image" style="z-index: 1;">
                    <img id="hairfemale" src="/img/books/page1/woman/hair/brown/long1.png" class="extra modal-image" style="z-index: 1;">
                    <img id="glassesfemale" src="/img/books/page1/woman/glasses/glasses.png" class="extra modal-image" style="z-index: 1;">
            </div>
            <div class="receiver-img">
                <img src="/img/books/page1/man/receiver-man-base.png" class="extra modal-image" style="z-index: 2;">
                <img id="eyesmale"src="/img/books/page1/man/eyes/brown.png" class="extra modal-image" style="z-index: 2;">
                <img id="hairmale"src="/img/books/page1/man/hair/brown/half1.png" class="extra modal-image" style="z-index: 2;">
                <img id="beard" src="/img/books/page1/man/beard/brown/brown1.png" class="extra modal-image" style="z-index: 2;">
                <img id="glassesmale" src="/img/books/page1/man/glasses/glasses.png" class="extra modal-image" style="z-index: 2;">
            </div>
            <div class="extras">
                <img src="/img/books/page1/extra/extra-1.png" class="extra modal-image" style="z-index: 3;">
            </div>
            <div class="tittle-wrapper"  contenteditable="true" id="text-page1" >
                <h1 id="names"  title="Esta será tu portada" style="position: absolute; top: 10px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 1vw; font-family: 'Lato', sans-serif; text-align: center;">Esta será tu portada</h1>
            </div>
        </div>
        </div>

        <form action="https://checkout.wompi.co/p/" method="GET">
            <!-- OBLIGATORIOS -->
            <input type="hidden" name="public-key" value="pub_test_FXuP06pwO8kBrtw9quipeLbETCLqsLtu" />
            <input type="hidden" name="currency" value="COP" />
            <input type="hidden" name="amount-in-cents" value="1500000" />
            <input type="hidden" name="reference" value="{{ time() }}">

            <!-- OPCIONALES -->
            <input type="text" name="customer-data:email" placeholder="Correo electrónico" />
            <input type="text" name="customer-data:full-name" placeholder="Nombre completo" />
            <input type="text" name="customer-data:phone-number" placeholder="Número de teléfono" />
            <input type="text" name="shipping-address:address-line-1" placeholder="Dirección de envío" />
            <select name="shipping-address:country">
                <option value="CO">Colombia</option>
              </select>

            <input type="text" name="shipping-address:phone-number" placeholder="Teléfono de quien recibe" />
            <input type="text" name="shipping-address:city" placeholder="Ciudad de envío" />
            <input type="text" name="shipping-address:region" placeholder="Región de envío" />

            <button type="submit">Pagar con Wompi</button>
          </form>

        <p class="mt-4">Para confirmar tu compra llena este formulario.</p>
    <p>Una vez aprobado tu pago, tu pedido llegará de 4 a 7 días hábiles.</p>
    </div>


    <script src="{{ asset('js/form.js')}}"></script>
</body>
</html>
