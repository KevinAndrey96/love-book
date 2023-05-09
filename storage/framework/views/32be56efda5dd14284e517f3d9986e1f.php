<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personaliza tu libro</title>
    <link rel="stylesheet" href ="<?php echo e(asset('css/Book_pages.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                    <a class="nav-item nav-link nav-btn" href="<?php echo e(url ('books')); ?>">INICIO</a>
                    <a class="nav-item nav-link nav-btn" href="#footer">CONTACTO</a>
                </div>
            </div>
        </nav>

        <hr class="line-main">

    <title>Paginas de tu libro</title>
  <body>
    <div id="product-step">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Las paginas de tu libro</h3>
            <h6>Puedes editarlas a tu gusto al hacer clic en ellas</h6>
            </div>
         <div class="col-12 pages">
            <div class="page-wrapper">
                <img src="/images/books/page1/extra/two-avatars.jpg" class="page-img clickable" >
            <div class="giver-images">
                <img src="/images/books/page1/woman/giver-woman-base.png" class="extra" style="z-index: 1;">
                <img id="eyesfemale" src="/images/books/page1/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                <img id="hairfemale" src="/images/books/page1/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                <img id="glassesfemale" src="/images/books/page1/woman/glasses/glasses.png" class="extra" style="z-index: 1;">
        </div>
        <div class="receiver-images">
            <img src="/images/books/page1/man/receiver-man-base.png" class="extra" style="z-index: 2;">
            <img id="eyesmale"src="/images/books/page1/man/eyes/brown.png" class="extra" style="z-index: 2;">
            <img id="hairmale"src="/images/books/page1/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
            <img id="beard" src="/images/books/page1/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
            <img id="glassesmale" src="/images/books/page1/man/glasses/glasses.png" class="extra" style="z-index: 2;">
        </div>
        <div class="extras">
            <img src="/images/books/page1/extra/extra-1.png" class="extra" style="z-index: 3;">
        </div>
        <div class="title-wrapper" contenteditable="true">
            <h1 id="names" title="Esta será tu portada" style="position: absolute; top: 10px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 1vw; font-family: 'Lato', sans-serif; text-align: center;">Esta será tu portada</h1>
        </div>

            <div class="page-wrapper">
                <div id="image-selector-container" style="display:none;">
                </div>
                <div id="vista"></div>
                <img src="/images/books/page2/extra/two-avatars.jpg" id="page-image" class="page-img" >

            <div class="giver-images">

                    <img src="/images/books/page2/woman/giver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesfemale2" src="/images/books/page2/woman/eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairfemale2"src="/images/books/page2/woman/hair/brown/long1.png" class="extra" style="z-index: 2;">
                    <img id="glassesfemale2"src="/images/books/page2/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                <div class="receiver-images">
                    <img src="/images/books/page2/man/receiver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesmale2" src="/images/books/page2/man/eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairmale2" src="/images/books/page2/man/hair/brown/half1.png" class="extra" style="z-index: 1;">
                    <img id="beardmale2" src="/images/books/page2/man/beard/brown/brown1.png" class="extra" style="z-index: 1;">
                    <img id="glassesmale2" src="/images/books/page2/man/glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="extras">
                    <img src="/images/books/page2/extra/extra-1.png" class="extra" style="z-index: 3;" >

                    <div><div contenteditable="true"  class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center !important;  flex-direction: column; align-items:center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 6;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esta es nuestra historia</font></font></div>
                        </div></div>
                </div>
                </div>

            </div>


                <div class="page-wrapper">
                    <img src="/images/books/page3/extra/two-avatars (1).jpg" class="page-img">
                <div class="giver-images">
                    <img src="/images/books/page3/woman/giver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesfemale3" src="/images/books/page3/woman/eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairfemale3" src="/images/books/page3/woman/hair/brown/long1.png" class="extra" style="z-index: 2;">
                    <img id="glassesfemale3" src="/images/books/page3/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="receiver-images">
                    <img src="/images/books/page3/man/receiver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesmale3" src="/images/books/page3/man/eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairmale3" src="/images/books/page3/man/hair/brown/half1.png" class="extra" style="z-index: 1;">
                    <img id="beardmale3" src="/images/books/page3/man/beard/brown/brown1.png" class="extra" style="z-index: 1;">
                    <img id="glassesmale3" src="/images/books/page3/man/glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center !important; flex-direction: column; align-items:center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fue amor a primera vista</font></font></div>
                    </div></div>
            </div>


                <div class="page-wrapper">
                    <img src="/images/books/page4/extra/two-avatars.jpg" class="page-img">
                <div class="giver-images">
                    <img src="/images/books/page4/woman/giver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesfemale4" src="/images/books/page4/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairfemale4" src="/images/books/page4/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                    <img id="glassesfemale4" src="/images/books/page4/woman/glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="receiver-images">
                    <img src="/images/books/page4/man/giver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesmale4" src="/images/books/page4/man/eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairmale4" src="/images/books/page4/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                    <img id="beardmale4" src="/images/books/page4/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                    <img id="glassesmale4" src="/images/books/page4/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aun recuerdo nuestro primer beso</font></font></div>
                    </div></div>
            </div>

                <div class="page-wrapper">
                    <img src="/images/books/page5/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo el mundo se ve distinto</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page6/extra/two-avatars.jpg" class="page-img">
                <div class="giver-images">
                    <img src="/images/books/page6/woman/giver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesfemale6" src="/images/books/page6/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairfemale6" src="/images/books/page6/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                    <img id="glassesfemale6" src="/images/books/page6/woman/glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="receiver-images">
                    <img src="/images/books/page6/man/receiver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesmale6" src="/images/books/page6/man/eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairmale6" src="/images/books/page6/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                    <img id="beardmale6" src="/images/books/page6/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                    <img id="glassesmale6" src="/images/books/page6/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y a ti es lo unico que necesito en ese mundo</font></font></div>
                    </div></div>
            </div>


            <div id="page-wrapper-container">
                <div class="page-wrapper">
                    <img src="/images/books/page7/extra/no-avatars.jpg" class="page-img">
                    <div>
                        <div contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                            <div><br></div>
                            <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres la primer persona a la que llamo</font></font></div>
                        </div>
                    </div>
                </div>
            </div>



                <div class="page-wrapper">
                    <img src="/images/books/page8/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page8/woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale8" src="/images/books/page8/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale8" src="/images/books/page8/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale8" src="/images/books/page8/woman/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page8/man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale8" src="/images/books/page8/man/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale8"src="/images/books/page8/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale8" src="/images/books/page8/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale8" src="/images/books/page8/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Podemos hablar por horas...</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page9/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo siempre sonrio</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page10/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page10/woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale10" src="/images/books/page10/woman/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale10" src="/images/books/page10/woman/hair/brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale10" src="/images/books/page10/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page10/man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale10" src="/images/books/page10/man/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale10" src="/images/books/page10/man/hair/brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale10" src="/images/books/page10/man/beard/brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale10" src="/images/books/page10/man/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me haces muy feliz</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page11/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gracias por ayudarme a sostenerme</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page12/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu cargas mi bateria</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page13/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando te enojas</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page14/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page14/woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale14"src="/images/books/page14/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale14" src="/images/books/page14/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale14" src="/images/books/page14/woman/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page14/man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale14" src="/images/books/page14/man/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale14" src="/images/books/page14/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale14" src="/images/books/page14/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale14" src="/images/books/page14/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Aun me amas verdad? :c Claro que si</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page15/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:100px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page16/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page16/woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale16" src="/images/books/page16/woman/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale16" src="/images/books/page16/woman/hair/brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale16" src="/images/books/page16/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page16/man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale16" src="/images/books/page16/man/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale16" src="/images/books/page16/man/hair/brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale16" src="/images/books/page16/man/beard/brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale16" src="/images/books/page16/man/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos abrazamos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                     <img src="/images/books/page17/Extra/no-avatars.jpg" class="page-img">
                     <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando soñamos juntos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page18/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page18/woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale18" src="/images/books/page18/woman/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale18" src="/images/books/page18/woman/hair/brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale18" src="/images/books/page18/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page18/man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale18" src="/images/books/page18/man/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale18" src="/images/books/page18/man/hair/brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale18" src="/images/books/page18/man/beard/brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale18" src="/images/books/page18/man/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important;  right: 100px !important; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos entendemos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page19/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando comemos juntos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page20/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes en las nubes</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page21/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page21/woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale21" src="/images/books/page21/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale21" src="/images/books/page21/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale21" src="/images/books/page21/woman/glasses/glasses.png" class="extra" style="z-index: 1;">

                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page21/man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale21" src="/images/books/page21/man/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale21" src="/images/books/page21/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale21" src="/images/books/page21/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale21" src="/images/books/page21/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; bottom:50px; left: 10%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3; margin-top: 300px !important;" >

                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo dormir contigo</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page22/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tener citas...</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page23/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page23/woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale23" src="/images/books/page23/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale23" src="/images/books/page23/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale23" src="/images/books/page23/woman/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page23/man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale23" src="/images/books/page23/man/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale23" src="/images/books/page23/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale23" src="/images/books/page23/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale23" src="/images/books/page23/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cocinar juntos</font></font></div>
                        </div></div>
                <div class="extras">
                    <img src="/images/books/page23/extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page24/extra/no-avatars.jpg" class="page-img">
                    <div contenteditable="true" class="page-text large" style="position:absolute; top: 50%; left: 70%; transform: translateY(-50%) translateX(-50%); display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para la cena</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page25/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empezar la mañana a nuestra manera</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page26/extra/only-giver.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page26/woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale26" src="/images/books/page26/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale26" src="/images/books/page26/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres tan linda</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page27/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes loco</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page28/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos somos una pieza</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page29/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te doy mi medio panqueque</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page30/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo nuestros momentos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page31/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Construir recuerdos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page32/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page32/woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale32" src="/images/books/page32/woman/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale32" src="/images/books/page32/woman/hair/brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale32" src="/images/books/page32/woman/glasses/glasses.png" class="extra" style="z-index: 2;">

                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page32/man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale32" src="/images/books/page32/man/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale32" src="/images/books/page32/man/hair/brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale32" src="/images/books/page32/man/beard/brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale32" src="/images/books/page32/man/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tomarnos fotos</font></font></div>
                        </div></div>
                <div class="extras">
                    <img src="/images/books/page32/extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>
            </div>


                <div class="page-wrapper">
                    <img src="/images/books/page33/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontrar el camino juntos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page34/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos hasta el fin del mundo</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page35/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para una pelicula</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page36/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No ver netflix solos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page37/extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page37/woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale37" src="/images/books/page37/woman/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale37" src="/images/books/page37/woman/hair/brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale37" src="/images/books/page37/woman/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/images/books/page37/man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale37" src="/images/books/page37/man/eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale37" src="/images/books/page37/man/hair/brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale37" src="/images/books/page37/man/beard/brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale37" src="/images/books/page37/man/glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta lo que tenemos</font></font></div>
                        </div></div>
                <div class="extras">
                    <img src="/images/books/Page-37/extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>
            </div>


                <div class="page-wrapper">
                    <img src="/images/books/page38/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para masaje</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page39/extra/only-receiver.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/images/books/page39/man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale39" src="/images/books/page39/man/eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale39" src="/images/books/page39/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale39" src="/images/books/page39/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale39" src="/images/books/page39/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te amo de pies a cabeza</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page40/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prometeme que siempre estaremos juntos sin importar lo que pase</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page41/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:20px !important; left: 30px !important; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi espacio</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page42/extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiero envejecer contigo</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/page43/extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi mas hermoso descubrimiento</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/images/books/Page44/extra/no-avatars.jpg" class="page-img"
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y la luz de mi vida</font></font></div>
                        </div></div>
                </div>

                <div class="page-wrapper">
                    <img src="/images/books/page45/extra/two-avatars.jpg" class="page-img clickable">
                <div class="giver-images">
                    <img src="/images/books/page45/woman/giver-woman-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesfemale45" src="/images/books/page45/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairfemale45" src="/images/books/page45/woman/hair/brown/long1.png" class="extra" style="z-index: 1;">
                    <img id="glassesfemale45" src="/images/books/page45/woman/glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="receiver-images">
                    <img src="/images/books/page45/man/receiver-man-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesmale45"src="/images/books/page45/man/eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairmale45"src="/images/books/page45/man/hair/brown/half1.png" class="extra" style="z-index: 2;">
                    <img id="beardmale45" src="/images/books/page45/man/beard/brown/brown1.png" class="extra" style="z-index: 2;">
                    <img id="glassesmale45" src="/images/books/page45/man/glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="extras">
                    <img src="/images/books/page45/extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3 !important;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TE AMO</font></font></div>
                    </div></div>
            </div>
             </div>
     </div>
     <script src="<?php echo e(asset('js/books_pages_page1.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page2.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page3.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page4.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page6.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page7.js')); ?>"></script>

     <script src="<?php echo e(asset('js/books_pages_page8.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page10.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page14.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page16.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page18.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page21.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page23.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page26.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page32.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page37.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page39.js')); ?>"></script>
     <script src="<?php echo e(asset('js/books_pages_page45.js')); ?>"></script>
    </body>
</html>

<?php /**PATH C:\xampp\htdocs\Love-Book\resources\views/Books/Book_pages.blade.php ENDPATH**/ ?>