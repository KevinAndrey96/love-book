<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo e(asset('css/Avatar_male.css')); ?>">
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
        <h3 class="text">Escoge tu pelo</h3>
        <div class="hair-select">

            <div> <input id="hair-1"  type="image" src="/Imagenes/Hombre/Botones/Cabello/medio1.jpg">  </div>
            <div> <input id="hair-2"  type="image" src="/Imagenes/Hombre/Botones/Cabello/largo2.jpg"> </div>
            <div> <input id="hair-3"  type="image" src="/Imagenes/Hombre/Botones/Cabello/medio2.jpg"> </div>
            <div> <input id="hair-4"  type="image" src="/Imagenes/Hombre/Botones/Cabello/largo1.jpg"> </div>
            <div> <input id="hair-5"  type="image" src="/Imagenes/Hombre/Botones/Cabello/corto2.jpg"> </div>
            <div> <input id="hair-6"  type="image" src="/Imagenes/Hombre/Botones/Cabello/corto1.jpg"> </div>
            <div> <input id="hair-7"  type="image" src="/Imagenes/Hombre/Botones/Cabello/calvo1.jpg"> </div>
            <div> <input id="hair-8"  type="image" src="/Imagenes/Hombre/Botones/Cabello/calvo2.jpg"> </div>
            <div> <input id="hair-9"  type="image" src="/Imagenes/Hombre/Botones/Cabello/medio3.jpg"> </div>
        </div>

     <div class="barba-container">
     <h3 class="text">Escoge tu barba</h3>
        <div class="barba-select">

            <div> <input id="barba-1"  type="image" src="/Imagenes/Hombre/Botones/Barba/poca2.jpg">  </div>
            <div> <input id="barba-2"  type="image" src="/Imagenes/Hombre/Botones/Barba/mucha1.jpg"> </div>
            <div> <input id="barba-3"  type="image" src="/Imagenes/Hombre/Botones/Barba/mucha2.jpg"> </div>
            <div> <input id="barba-4"  type="image" src="/Imagenes/Hombre/Botones/Barba/mucha3.jpg"> </div>
            <div> <input id="barba-5"  type="image" src="/Imagenes/Hombre/Botones/Barba/bigote.jpg"> </div>
            <div> <input id="barba-6"  type="image" src="/Imagenes/Hombre/Botones/Barba/poca1.jpg"> </div>
            <div> <input id="barba-7"  type="image" src="/Imagenes/Hombre/Botones/Barba/no-img.jpg"> </div>

        </div>

          <div class="color-container">
            <h3 class="text">Cambia tu color de barba<h3>
             <div class="color-select">
                 <div id="cafe"></div>
                <div id="cafe-claro"></div>
                <div id="cafe"></div>
                <div id="gris"></div>
                <div id="negro"></div>
        </div>
        </div>

        <div class="ojos-container">
            <h3 class="text">Escoge tu color de ojos</h3>
               <div class="ojos-select">

                   <div> <input id="ojos-1"  type="image" src="/Imagenes/Hombre/Ojos/11.png">  </div>
                   <div> <input id="ojos-2"  type="image" src="/Imagenes/Hombre/Ojos/12.png"> </div>
                   <div> <input id="ojos-3"  type="image" src="/Imagenes/Hombre/Ojos/13.png"> </div>
                   <div> <input id="ojos-4"  type="image" src="/Imagenes/Hombre/Ojos/27.png"> </div>

                </div>
             </div>
      </div>

      <div class="gafas-container">
            <h3 class="text">¿Utilizas Gafas?</h3>
           <div class="gafas-select">
                    <div> <input id="gafas-0"  type="image" src="/Imagenes/Hombre/Gafas/no-img.jpg">  </div>
                    <div> <input id="gafas-1"  type="image" src="/Imagenes/Hombre/Gafas/25.png">  </div>
                </div>
            </div>
     </div>

       <div class="color-container">
         <h3 class="text">Cambia tu color de cabello<h3>
            <div class="color-select">
            <div id="cafe"></div>
            <div id="cafe-claro"></div>
            <div id="cafe"></div>
            <div id="gris"></div>
            <div id="negro"></div>
        </div>
    </div>
         

  </div>
   <div class="images">

        <img src="/Imagenes/Hombre/base.jpg" >
        <img src="/Imagenes/Hombre/Cabello/Cafe/medio1.png" id="hairchange" class="encima">
        <img src="/Imagenes/Hombre/Barba/Cafe/cafe1.png" id="barbachange" class="encima">
        <img src="/Imagenes/Hombre/Ojos/11.png" id="ojoschange" class="encima">
        


        

    </div>



    <script src="<?php echo e(asset('js/Avatar_male.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Proyecto-Libros\resources\views/Libros/Avatar_male.blade.php ENDPATH**/ ?>