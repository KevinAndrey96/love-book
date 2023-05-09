<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu avatar</title>

    <link rel="stylesheet" href ="<?php echo e(asset('css/Avatar_pick.css')); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <div><h1>Crea tu avatar</h1> </div>

    <div id="Avatar" class="btn">
        <input class="female" type="image" src="./imagenes/female.jpg">
        <div>
             <button><a href="<?php echo e(url ('Avatar/Female')); ?>" class="product-btn btn btn-danger" id="btn1">Mujer</a></button>
        </div>

        <input class="male" type="image" src="./imagenes/male.jpg">

        <div>
            <button><a href="<?php echo e(url ('Avatar/Male')); ?>" class="product-btn btn btn-primary" id="btn2">Hombre</a></button>
        </div>
        </button>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Proyecto-Libros\resources\views/Libros/Avatar_pick.blade.php ENDPATH**/ ?>