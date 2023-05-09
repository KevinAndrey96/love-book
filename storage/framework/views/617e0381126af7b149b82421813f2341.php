<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo e(asset('css/Avatar_female.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edita tu avatar</title>
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
                <a class="nav-item nav-link" href="<?php echo e(url ('Libros')); ?>">Inicio</a>
                <a class="nav-item nav-link" href="#footer">Contacto</a>
            </div>
        </div>
        </nav>

    <div class="container">
        <h3 class="text">Escoge tu pelo:</h3>
        <div class="hair-select">

            <div> <input id="hair-1" type="image" src="/Imagenes/Mujer/Botones/largo1.jpg"></div>
            <div> <input id="hair-2" type="image" src="/Imagenes/Mujer/Botones/largo2.jpg"></div>
            <div> <input id="hair-3" type="image" src="/Imagenes/Mujer/Botones/crespo1.jpg"></div>
            <div> <input id="hair-4" type="image" src="/Imagenes/Mujer/Botones/medio1.jpg"></div>
            <div> <input id="hair-5" type="image" src="/Imagenes/Mujer/Botones/recogido1.jpg"></div>
            <div> <input id="hair-6" type="image" src="/Imagenes/Mujer/Botones/crespo2.jpg"></div>
            <div> <input id="hair-7" type="image" src="/Imagenes/Mujer/Botones/corto1.jpg"></div>
            <div> <input id="hair-8" type="image" src="/Imagenes/Mujer/Botones/corto2.jpg"></div>

    </div>

        <div class="ojos-container">
            <h3 class="text">Escoge tu color de ojos:</h3>
               <div class="ojos-select">

                   <div> <input id="ojos-1" class="sas" type="image" src="/Imagenes/Mujer/Ojos/negro.png"></div>
                   <div> <input id="ojos-2" class="sas" type="image" src="/Imagenes/Mujer/Ojos/cafe.png"></div>
                   <div> <input id="ojos-3" class="sas" type="image" src="/Imagenes/Mujer/Ojos/verde.png"></div>
                   <div> <input id="ojos-4" class="sas" type="image" src="/Imagenes/Mujer/Ojos/azul.png"></div>

               </div>
             </div>
      </div>

      <div class="gafas-container">
        <h3 class="text">¿Utilizas Gafas?</h3>
           <div class="gafas-select">
                <div> <input id="gafas-0"  type="image" src="/Imagenes/Mujer/Gafas/no-img.jpg"></div>
                <div> <input id="gafas-1"  type="image" src="/Imagenes/Mujer/Gafas/gafas1.jpg"></div>
           </div>
     </div>
     </div>

    <div class="color-container">
    <h3 class="text">Cambia tu color de cabello<h3>
     <div class="color-select">

        <div id="cafe" value="cafe"></div>
        <div id="cafe-claro" value="cafe-claro"></div>
        <div id="cafe-oscuro" value="cafe-oscuro"></div>
        <div id="cafe-rubio" value="cafe-rubio"></div>
        <div id="claro" value="claro"></div>
        <div id="muy-claro" value="muy-claro"></div>
        <div id="negro" value="negro"></div>
        <div id="rojo" value="rojo"></div>

    </div>
</div>

  </div>
   <div class="images">
        <img src="/Imagenes/Mujer/base1.jpg">
        <img src="/Imagenes/Mujer/Cabello/Cafe/largo1.png" id="hairchange" class="encima" >
        <img src="/Imagenes/Mujer/Ojos/cafe.png" id="ojoschange" class="encima">

        

    </div>
 </div>

    <script src="<?php echo e(asset('js/Avatar_female.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Proyecto-Libros\resources\views/Libros/Avatar_female.blade.php ENDPATH**/ ?>