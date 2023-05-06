<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personaliza tu libro</title>
    <link rel="stylesheet" href ="{{ asset('css/Book_pages.css')}}">
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
                    <a class="nav-item nav-link nav-btn" href="{{ url ('Books')}}">INICIO</a>
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
                <img src="/Images/Books/Page-1/Extra/two-avatars.jpg" class="page-img clickable" >
            <div class="giver-images">
                <img src="/Images/Books/Page-1/Woman/giver-woman-base.png" class="extra" style="z-index: 1;">
                <img id="eyesfemale" src="/Images/Books/Page-1/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                <img id="hairfemale" src="/Images/Books/Page-1/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                <img id="glassesfemale" src="/Images/Books/page-1/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">
        </div>
        <div class="receiver-images">
            <img src="/Images/Books/Page-1/Man/receiver-man-base.png" class="extra" style="z-index: 2;">
            <img id="eyesmale"src="/Images/Books/Page-1/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
            <img id="hairmale"src="/Images/Books/Page-1/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
            <img id="beard" src="/Images/Books/Page-1/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
            <img id="glassesmale" src="/Images/Books/Page-1/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
        </div>
        <div class="extras">
            <img src="/Images/Books/Page-1/Extra/extra-1.png" class="extra" style="z-index: 3;">
        </div>
        <div class="title-wrapper" contenteditable="true">
            <h1 id="names" title="Esta será tu portada" style="position: absolute; top: 10px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 1vw; font-family: 'Lato', sans-serif; text-align: center;">Esta será tu portada</h1>

        </div>


            <div class="page-wrapper">
                <img src="/Images/Books/Page-2/Extra/two-avatars.jpg" class="page-img">
            <div class="giver-images">
                    <img src="/Images/Books/Page-2/Woman/giver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesfemale2" src="/Images/Books/Page-2/Woman/Eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairfemale2"src="/Images/Books/Page-2/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 2;">
                    <img id="glassesfemale2"src="/Images/Books/Page-2/Woman/Glasses/glasses.png" class="extra" style="z-index: 2;">

                <div class="receiver-images">
                    <img src="/Images/Books/Page-2/Man/receiver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesmale2" src="/Images/Books/Page-2/Man/Eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairmale2" src="/Images/Books/Page-2/Man/Hair/Brown/half1.png" class="extra" style="z-index: 1;">
                    <img id="beardmale2" src="/Images/Books/Page-2/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 1;">
                    <img id="glassesmale2" src="/Images/Books/Page-2/Man/Glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="extras">
                    <img src="/Images/Books/Page-2/Extra/extra-1.png" class="extra" style="z-index: 3;">
                    <div><div contenteditable="true"  class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center !important;  flex-direction: column; align-items:center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esta es nuestra historia</font></font></div>
                        </div></div>
                </div>
                </div>
            </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-3/Extra/two-avatars (1).jpg" class="page-img">
                <div class="giver-images">
                    <img src="/Images/Books/Page-3/Woman/giver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesfemale3" src="/Images/Books/Page-3/Woman/Eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairfemale3" src="/Images/Books/Page-3/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 2;">
                    <img id="glassesfemale3" src="/Images/Books/Page-3/Woman/Glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="receiver-images">
                    <img src="/Images/Books/Page-3/Man/receiver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesmale3" src="/Images/Books/Page-3/Man/Eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairmale3" src="/Images/Books/Page-3/Man/Hair/Brown/half1.png" class="extra" style="z-index: 1;">
                    <img id="beardmale3" src="/Images/Books/Page-3/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 1;">
                    <img id="glassesmale3" src="/Images/Books/Page-3/Man/Glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center !important; flex-direction: column; align-items:center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fue amor a primera vista</font></font></div>
                    </div></div>
            </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-4/Extra/two-avatars.jpg" class="page-img">
                <div class="giver-images">
                    <img src="/Images/Books/Page-4/Woman/giver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesfemale4" src="/Images/Books/Page-4/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairfemale4" src="/Images/Books/Page-4/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                    <img id="glassesfemale4" src="/Images/Books/Page-4/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="receiver-images">
                    <img src="/Images/Books/Page-4/Man/giver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesmale4" src="/Images/Books/Page-4/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairmale4" src="/Images/Books/Page-4/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                    <img id="beardmale4" src="/Images/Books/Page-4/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                    <img id="glassesmale4" src="/Images/Books/Page-4/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aun recuerdo nuestro primer beso</font></font></div>
                    </div></div>
            </div>

                <div class="page-wrapper">
                    <img src="/Images/Books/Page-5/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo el mundo se ve distinto</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-6/Extra/two-avatars.jpg" class="page-img">
                <div class="giver-images">
                    <img src="/Images/Books/Page-6/Woman/giver-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesfemale6" src="/Images/Books/Page-6/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairfemale6" src="/Images/Books/Page-6/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                    <img id="glassesfemale6" src="/Images/Books/Page-6/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="receiver-images">
                    <img src="/Images/Books/Page-6/Man/receiver-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesmale6" src="/Images/Books/Page-6/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairmale6" src="/Images/Books/Page-6/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                    <img id="beardmale6" src="/Images/Books/Page-6/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                    <img id="glassesmale6" src="/Images/Books/Page-6/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y a ti es lo unico que necesito en ese mundo</font></font></div>
                    </div></div>
            </div>


            <div id="page-wrapper-container">
                <div class="page-wrapper">
                    <img src="/Images/Books/Page-7/Extra/no-avatars.jpg" class="page-img">
                    <div>
                        <div contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                            <div><br></div>
                            <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres la primer persona a la que llamo</font></font></div>
                        </div>
                    </div>
                </div>
            </div>



                <div class="page-wrapper">
                    <img src="/Images/Books/Page-8/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-8/Woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale8" src="/Images/Books/Page-8/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale8" src="/Images/Books/Page-8/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale8" src="/Images/Books/Page-8/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-8/Man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale8" src="/Images/Books/Page-8/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale8"src="/Images/Books/Page-8/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale8" src="/Images/Books/Page-8/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale8" src="/Images/Books/Page-8/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Podemos hablar por horas...</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-9/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo siempre sonrio</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-10/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-10/Woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale10" src="/Images/Books/Page-10/Woman/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale10" src="/Images/Books/Page-10/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale10" src="/Images/Books/Page-10/Woman/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-10/Man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale10" src="/Images/Books/Page-10/Man/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale10" src="/Images/Books/Page-10/Man/Hair/Brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale10" src="/Images/Books/Page-10/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale10" src="/Images/Books/Page-10/Man/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me haces muy feliz</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-11/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gracias por ayudarme a sostenerme</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-12/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu cargas mi bateria</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-13/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando te enojas</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-14/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-14/Woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale14"src="/Images/Books/Page-14/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale14" src="/Images/Books/Page-14/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale14" src="/Images/Books/Page-14/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-14/Man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale14" src="/Images/Books/Page-14/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale14" src="/Images/Books/Page-14/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale14" src="/Images/Books/Page-14/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale14" src="/Images/Books/Page-14/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Aun me amas verdad? :c Claro que si</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-15/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:100px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-16/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-16/Woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale16" src="/Images/Books/Page-16/Woman/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale16" src="/Images/Books/Page-16/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale16" src="/Images/Books/Page-16/Woman/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-16/Man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale16" src="/Images/Books/Page-16/Man/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale16" src="/Images/Books/Page-16/Man/Hair/Brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale16" src="/Images/Books/Page-16/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale16" src="/Images/Books/Page-16/Man/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos abrazamos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                     <img src="/Images/Books/Page-17/Extra/no-avatars.jpg" class="page-img">
                     <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando soñamos juntos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-18/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-18/Woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale18" src="/Images/Books/Page-18/Woman/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale18" src="/Images/Books/Page-18/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale18" src="/Images/Books/Page-18/Woman/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-18/Man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale18" src="/Images/Books/Page-18/Man/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale18" src="/Images/Books/Page-18/Man/Hair/Brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale18" src="/Images/Books/Page-18/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale18" src="/Images/Books/Page-18/Man/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important;  right: 100px !important; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos entendemos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-19/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando comemos juntos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-20/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes en las nubes</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-21/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-21/Woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale21" src="/Images/Books/Page-21/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale21" src="/Images/Books/Page-21/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale21" src="/Images/Books/Page-21/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">

                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-21/Man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale21" src="/Images/Books/Page-21/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale21" src="/Images/Books/Page-21/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale21" src="/Images/Books/Page-21/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale21" src="/Images/Books/Page-21/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; bottom:50px; left: 10%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3; margin-top: 300px !important;" >

                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo dormir contigo</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-22/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tener citas...</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-23/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-23/Woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale23" src="/Images/Books/Page-23/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale23" src="/Images/Books/Page-23/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                        <img id="glassesfemale23" src="/Images/Books/Page-23/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-23/Man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale23" src="/Images/Books/Page-23/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale23" src="/Images/Books/Page-23/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale23" src="/Images/Books/Page-23/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale23" src="/Images/Books/Page-23/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cocinar juntos</font></font></div>
                        </div></div>
                <div class="extras">
                    <img src="/Images/Books/Page-23/Extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-24/Extra/no-avatars.jpg" class="page-img">
                    <div contenteditable="true" class="page-text large" style="position:absolute; top: 50%; left: 70%; transform: translateY(-50%) translateX(-50%); display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para la cena</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-25/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empezar la mañana a nuestra manera</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-26/Extra/only-giver.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-26/Woman/giver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesfemale26" src="/Images/Books/Page-26/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairfemale26" src="/Images/Books/Page-26/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres tan linda</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-27/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes loco</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-28/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos somos una pieza</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-29/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te doy mi medio panqueque</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-30/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo nuestros momentos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-31/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Construir recuerdos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-32/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-32/Woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale32" src="/Images/Books/Page-32/Woman/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale32" src="/Images/Books/Page-32/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale32" src="/Images/Books/Page-32/Woman/Glasses/glasses.png" class="extra" style="z-index: 2;">

                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-32/Man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale32" src="/Images/Books/Page-32/Man/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale32" src="/Images/Books/Page-32/Man/Hair/Brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale32" src="/Images/Books/Page-32/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale32" src="/Images/Books/Page-32/Man/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tomarnos fotos</font></font></div>
                        </div></div>
                <div class="extras">
                    <img src="/Images/Books/Page-32/Extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>
            </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-33/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontrar el camino juntos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-34/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos hasta el fin del mundo</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-35/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para una pelicula</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-36/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No ver netflix solos</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-37/Extra/two-avatars.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-37/Woman/giver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesfemale37" src="/Images/Books/Page-37/Woman/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairfemale37" src="/Images/Books/Page-37/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 2;">
                        <img id="glassesfemale37" src="/Images/Books/Page-37/Woman/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div class="receiver-images">
                        <img src="/Images/Books/Page-37/Man/receiver-base.png" class="extra" style="z-index: 1;">
                        <img id="eyesmale37" src="/Images/Books/Page-37/Man/Eyes/brown.png" class="extra" style="z-index: 1;">
                        <img id="hairmale37" src="/Images/Books/Page-37/Man/Hair/Brown/half1.png" class="extra" style="z-index: 1;">
                        <img id="beardmale37" src="/Images/Books/Page-37/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 1;">
                        <img id="glassesmale37" src="/Images/Books/Page-37/Man/Glasses/glasses.png" class="extra" style="z-index: 1;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta lo que tenemos</font></font></div>
                        </div></div>
                <div class="extras">
                    <img src="/Images/Books/Page-37/Extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>
            </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-38/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para masaje</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-39/Extra/only-receiver.jpg" class="page-img">
                    <div class="giver-images">
                        <img src="/Images/Books/Page-39/Man/receiver-base.png" class="extra" style="z-index: 2;">
                        <img id="eyesmale39" src="/Images/Books/Page-39/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                        <img id="hairmale39" src="/Images/Books/Page-39/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                        <img id="beardmale39" src="/Images/Books/Page-39/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                        <img id="glassesmale39" src="/Images/Books/Page-39/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                    </div>
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te amo de pies a cabeza</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-40/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prometeme que siempre estaremos juntos sin importar lo que pase</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-41/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:20px !important; left: 30px !important; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi espacio</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-42/Extra/no-avatars.jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiero envejecer contigo</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-43/Extra/no-avatars (1).jpg" class="page-img">
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi mas hermoso descubrimiento</font></font></div>
                        </div></div>
                </div>


                <div class="page-wrapper">
                    <img src="/Images/Books/Page-44/Extra/no-avatars.jpg" class="page-img"
                    <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y la luz de mi vida</font></font></div>
                        </div></div>
                </div>

                <div class="page-wrapper">
                    <img src="/Images/Books/Page-1/Extra/two-avatars.jpg" class="page-img clickable">
                <div class="giver-images">
                    <img src="/Images/Books/Page-45/Woman/giver-woman-base.png" class="extra" style="z-index: 1;">
                    <img id="eyesfemale45" src="/Images/Books/Page-45/Woman/Eyes/brown.png" class="extra" style="z-index: 1;">
                    <img id="hairfemale45" src="/Images/Books/Page-45/Woman/Hair/Brown/long1.png" class="extra" style="z-index: 1;">
                    <img id="glassesfemale45" src="/Images/Books/page-45/Woman/Glasses/glasses.png" class="extra" style="z-index: 1;">
                </div>
                <div class="receiver-images">
                    <img src="/Images/Books/Page-45/Man/receiver-man-base.png" class="extra" style="z-index: 2;">
                    <img id="eyesmale45"src="/Images/Books/Page-45/Man/Eyes/brown.png" class="extra" style="z-index: 2;">
                    <img id="hairmale45"src="/Images/Books/Page-45/Man/Hair/Brown/half1.png" class="extra" style="z-index: 2;">
                    <img id="beardmale45" src="/Images/Books/Page-45/Man/Beard/Brown/brown1.png" class="extra" style="z-index: 2;">
                    <img id="glassesmale45" src="/Images/Books/Page-45/Man/Glasses/glasses.png" class="extra" style="z-index: 2;">
                </div>
                <div class="extras">
                    <img src="/Images/Books/Page-45/Extra/extra-1.png" class="extra" style="z-index: 3;">
                </div>
                <div><div contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3 !important;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TE AMO</font></font></div>
                    </div></div>
            </div>
             </div>
     </div>
     <script src="{{ asset('js/Books_pages_page1.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page2.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page3.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page4.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page6.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page7.js')}}"></script>

     <script src="{{ asset('js/Books_pages_page8.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page10.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page14.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page16.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page18.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page21.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page23.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page26.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page32.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page37.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page39.js')}}"></script>
     <script src="{{ asset('js/Books_pages_page45.js')}}"></script>
    </body>
</html>

