<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personaliza tu libro</title>
    <link rel="stylesheet" href ="{{ asset('css/Book_pages.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <title>Paginas de tu libro</title>
  <body>

    <div id="product-step">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Las paginas de tu libro</h3>
            <h6>Puedes editarlas a tu gusto al hacer clic en ellas</h6>
            </div>
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

            <div class="page-wrapper" id="page2" data-order="2">
                        <img src="/img/books/page2/extra/two-avatars.jpg" id="page-image" class="page-img modal-image1">
                    <div class="giver-img">
                            <img src="/img/books/page2/woman/giver-base.png" class="extra modal-image1" style="z-index: 2;">
                            <img id="eyesfemale2" src="/img/books/page2/woman/eyes/brown.png" class="extra modal-image1" style="z-index: 2;">
                            <img id="hairfemale2"src="/img/books/page2/woman/hair/brown/long1.png" class="extra modal-image1" style="z-index: 2;">
                            <img id="glassesfemale2"src="/img/books/page2/woman/glasses/glasses.png" class="extra modal-image1" style="z-index: 2;">
                        <div class="receiver-img">
                            <img src="/img/books/page2/man/receiver-base.png" class="extra modal-image1" style="z-index: 1;">
                            <img id="eyesmale2" src="/img/books/page2/man/eyes/brown.png" class="extra modal-image1" style="z-index: 1;">
                            <img id="hairmale2" src="/img/books/page2/man/hair/brown/half1.png" class="extra modal-image1" style="z-index: 1;">
                            <img id="beardmale2" src="/img/books/page2/man/beard/brown/brown1.png" class="extra modal-image1" style="z-index: 1;">
                            <img id="glassesmale2" src="/img/books/page2/man/glasses/glasses.png" class="extra modal-image1" style="z-index: 1;">
                        </div>
                        <div class="extras">
                            <img src="/img/books/page2/extra/extra-1.png" class="extra modal-image1" style="z-index: 3;">
                            <div><div id="text-page2" contenteditable="true"  class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center !important;  flex-direction: column; align-items:center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 6;" >
                                <div><br></div>
                                <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esta es nuestra historia</font></font></div>
                                </div></div>
                </div>
                </div>
                <button class="btn btn-primary myBtn1" data-target="modal-image">Cambia tu imagen</button>
                <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                <button class="btn btn-primary insert-after-btn">Insertar después</button>
                <div id="myModal1" class="modal">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <span class="close2">&times;</span>
                        <h2>Cambia tu imagen</h2>
                        <div class="image-group1">
                          <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                        </div>
                        <div class="image-group1">
                          <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                        </div>
                        <div class="image-group1">
                          <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>



                <div class="page-wrapper" id="page3" data-order="3">
                    <img src="/img/books/page3/extra/two-avatars (1).jpg" class="page-img modal-image3">
                <div class="giver-img">
                    <img src="/img/books/page3/woman/giver-base.png" class="extra modal-image3" style="z-index: 2;">
                    <img id="eyesfemale3" src="/img/books/page3/woman/eyes/brown.png" class="extra modal-image3" style="z-index: 2;">
                    <img id="hairfemale3" src="/img/books/page3/woman/hair/brown/long1.png" class="extra modal-image3" style="z-index: 2;">
                    <img id="glassesfemale3" src="/img/books/page3/woman/glasses/glasses.png" class="extra modal-image3" style="z-index: 2;">
                </div>
                <div class="receiver-img">
                    <img src="/img/books/page3/man/receiver-base.png" class="extra modal-image3" style="z-index: 1;">
                    <img id="eyesmale3" src="/img/books/page3/man/eyes/brown.png" class="extra modal-image3" style="z-index: 1;">
                    <img id="hairmale3" src="/img/books/page3/man/hair/brown/half1.png" class="extra modal-image3" style="z-index: 1;">
                    <img id="beardmale3" src="/img/books/page3/man/beard/brown/brown1.png" class="extra modal-image3" style="z-index: 1;">
                    <img id="glassesmale3" src="/img/books/page3/man/glasses/glasses.png" class="extra modal-image3" style="z-index: 1;">
                </div>
                <div><div id="text-page3" contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center !important; flex-direction: column; align-items:center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fue amor a primera vista</font></font></div>
                    </div></div>
                    <button class="btn btn-primary myBtn3">Cambia tu imagen</button>
                    <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                    <button class="btn btn-primary insert-after-btn">Insertar después</button>
                    <div id="myModal3" class="modal">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                            <span class="close3">&times;</span>
                            <h2>Cambia tu imagen</h2>
                            <div class="image-group3">
                              <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                            </div>
                            <div class="image-group3">
                              <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                            </div>
                            <div class="image-group3">
                              <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                            </div>
                          </div>
                        </div>
                      </div>
            </div>



                <div class="page-wrapper" id="page4" data-order="4">
                    <img src="/img/books/page4/extra/two-avatars.jpg" class="page-img modal-image4">
                <div class="giver-img">
                    <img src="/img/books/page4/woman/giver-base.png" class="extra modal-image4" style="z-index: 1;">
                    <img id="eyesfemale4" src="/img/books/page4/woman/eyes/brown.png" class="extra modal-image4" style="z-index: 1;">
                    <img id="hairfemale4" src="/img/books/page4/woman/hair/brown/long1.png" class="extra modal-image4" style="z-index: 1;">
                    <img id="glassesfemale4" src="/img/books/page4/woman/glasses/glasses.png" class="extra modal-image4" style="z-index: 1;">
                </div>
                <div class="receiver-img">
                    <img src="/img/books/page4/man/giver-base.png" class="extra modal-image4" style="z-index: 2;">
                    <img id="eyesmale4" src="/img/books/page4/man/eyes/brown.png" class="extra modal-image4" style="z-index: 2;">
                    <img id="hairmale4" src="/img/books/page4/man/hair/brown/half1.png" class="extra modal-image4" style="z-index: 2;">
                    <img id="beardmale4" src="/img/books/page4/man/beard/brown/brown1.png" class="extra modal-image4" style="z-index: 2;">
                    <img id="glassesmale4" src="/img/books/page4/man/glasses/glasses.png" class="extra modal-image4" style="z-index: 2;">
                </div>
                <div><div id="text-page4" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aun recuerdo nuestro primer beso</font></font></div>
                    </div></div>
                    <button class="btn btn-primary myBtn4">Cambia tu imagen</button>
                    <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                    <button class="btn btn-primary insert-after-btn">Insertar después</button>
                    <div id="myModal4" class="modal">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                            <span class="close4">&times;</span>
                            <h2>Cambia tu imagen</h2>
                            <div class="image-group4">
                              <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                            </div>
                            <div class="image-group4">
                              <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                            </div>
                            <div class="image-group4">
                              <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                            </div>
                          </div>
                        </div>
                      </div>
            </div>



                <div class="page-wrapper" id="page5" data-order="5">
                    <img src="/img/books/page5/extra/no-avatars.jpg" class="page-img modal-image5">
                    <div><div id="text-page5" contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo el mundo se ve distinto</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn5">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal5" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close5">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group5">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group5">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group5">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page6" data-order="6">
                    <img src="/img/books/page6/extra/two-avatars.jpg" class="page-img modal-image6">
                <div class="giver-img">
                    <img src="/img/books/page6/woman/giver-base.png" class="extra modal-image6" style="z-index: 1;">
                    <img id="eyesfemale6" src="/img/books/page6/woman/eyes/brown.png" class="extra modal-image6" style="z-index: 1;">
                    <img id="hairfemale6" src="/img/books/page6/woman/hair/brown/long1.png" class="extra modal-image6" style="z-index: 1;">
                    <img id="glassesfemale6" src="/img/books/page6/woman/glasses/glasses.png" class="extra modal-image6" style="z-index: 1;">
                </div>
                <div class="receiver-img">
                    <img src="/img/books/page6/man/receiver-base.png" class="extra modal-image6" style="z-index: 2;">
                    <img id="eyesmale6" src="/img/books/page6/man/eyes/brown.png" class="extra modal-image6" style="z-index: 2;">
                    <img id="hairmale6" src="/img/books/page6/man/hair/brown/half1.png" class="extra modal-image6" style="z-index: 2;">
                    <img id="beardmale6" src="/img/books/page6/man/beard/brown/brown1.png" class="extra modal-image6" style="z-index: 2;">
                    <img id="glassesmale6" src="/img/books/page6/man/glasses/glasses.png" class="extra modal-image6" style="z-index: 2;">
                </div>
                <div><div id="text-page6" contenteditable="true" class="page-text large" style="position:absolute; top:1px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y a ti es lo unico que necesito en ese mundo</font></font></div>
                    </div></div>
                    <button class="btn btn-primary myBtn6">Cambia tu imagen</button>
                    <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                    <button class="btn btn-primary insert-after-btn">Insertar después</button>
                    <div id="myModal6" class="modal">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                            <span class="close6">&times;</span>
                            <h2>Cambia tu imagen</h2>
                            <div class="image-group6">
                              <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                            </div>
                            <div class="image-group6">
                              <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                            </div>
                            <div class="image-group6">
                              <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                            </div>
                          </div>
                        </div>
                      </div>
            </div>



                <div class="page-wrapper" id="page7" data-order="7">
                    <img src="/img/books/page7/extra/no-avatars.jpg" class="page-img modal-image7">
                    <div>
                        <div id="text-page7" contenteditable="true" class="page-text large" style="position:absolute; top:10%; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                            <div><br></div>
                            <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres la primer persona a la que llamo</font></font></div>
                        </div>
                    </div>
                    <button class="btn btn-primary myBtn7">Cambia tu imagen</button>
                <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                <button class="btn btn-primary insert-after-btn">Insertar después</button>
                <div id="myModal7" class="modal">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <span class="close7">&times;</span>
                        <h2>Cambia tu imagen</h2>
                        <div class="image-group7">
                          <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                        </div>
                        <div class="image-group7">
                          <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                        </div>
                        <div class="image-group7">
                          <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>





                <div class="page-wrapper" id="page8" data-order="8">
                    <img src="/img/books/page8/extra/two-avatars.jpg" class="page-img modal-image8">
                    <div class="giver-img">
                        <img src="/img/books/page8/woman/giver-base.png" class="extra modal-image8" style="z-index: 1;">
                        <img id="eyesfemale8" src="/img/books/page8/woman/eyes/brown.png" class="extra modal-image8" style="z-index: 1;">
                        <img id="hairfemale8" src="/img/books/page8/woman/hair/brown/long1.png" class="extra modal-image8" style="z-index: 1;">
                        <img id="glassesfemale8" src="/img/books/page8/woman/glasses/glasses.png" class="extra modal-image8" style="z-index: 1;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page8/man/receiver-base.png" class="extra modal-image8" style="z-index: 2;">
                        <img id="eyesmale8" src="/img/books/page8/man/eyes/brown.png" class="extra modal-image8" style="z-index: 2;">
                        <img id="hairmale8"src="/img/books/page8/man/hair/brown/half1.png" class="extra modal-image8" style="z-index: 2;">
                        <img id="beardmale8" src="/img/books/page8/man/beard/brown/brown1.png" class="extra modal-image8" style="z-index: 2;">
                        <img id="glassesmale8" src="/img/books/page8/man/glasses/glasses.png" class="extra modal-image8" style="z-index: 2;">
                    </div>
                    <div><div id="text-page8" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Podemos hablar por horas...</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn8">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal8" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close8">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group8">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group8">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group8">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page9" data-order="9">
                    <img src="/img/books/page9/extra/no-avatars.jpg" class="page-img modal-image9">
                    <div><div id="text-page9" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo siempre sonrio</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn9">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal9" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close9">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group9">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group9">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group9">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page10" data-order="10">
                    <img src="/img/books/page10/extra/two-avatars.jpg" class="page-img modal-image10">
                    <div class="giver-img">
                        <img src="/img/books/page10/woman/giver-base.png" class="extra modal-image10" style="z-index: 2;">
                        <img id="eyesfemale10" src="/img/books/page10/woman/eyes/brown.png" class="extra modal-image10" style="z-index: 2;">
                        <img id="hairfemale10" src="/img/books/page10/woman/hair/brown/long1.png" class="extra modal-image10" style="z-index: 2;">
                        <img id="glassesfemale10" src="/img/books/page10/woman/glasses/glasses.png" class="extra modal-image10" style="z-index: 2;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page10/man/receiver-base.png" class="extra modal-image10" style="z-index: 1;">
                        <img id="eyesmale10" src="/img/books/page10/man/eyes/brown.png" class="extra modal-image10" style="z-index: 1;">
                        <img id="hairmale10" src="/img/books/page10/man/hair/brown/half1.png" class="extra modal-image10" style="z-index: 1;">
                        <img id="beardmale10" src="/img/books/page10/man/beard/brown/brown1.png" class="extra modal-image10" style="z-index: 1;">
                        <img id="glassesmale10" src="/img/books/page10/man/glasses/glasses.png" class="extra modal-image10" style="z-index: 1;">
                    </div>
                    <div><div id="text-page10" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me haces muy feliz</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn10">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal10" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close10">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group10">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group10">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group10">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page11" data-order="11">
                    <img src="/img/books/page11/extra/no-avatars.jpg" class="page-img modal-image11">
                    <div><div id="text-page11" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gracias por ayudarme a sostenerme</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn11">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal11" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close11">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group11">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group11">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group11">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page12" data-order="12">
                    <img src="/img/books/page12/extra/no-avatars (1).jpg" class="page-img modal-image12">
                    <div><div id="text-page12" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu cargas mi bateria</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn12">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal12" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close12">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group12">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group12">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group12">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page13" data-order="13">
                    <img src="/img/books/page13/extra/no-avatars.jpg" class="page-img modal-image13">
                    <div><div id="text-page13" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando te enojas</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn13">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal13" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close13">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group13">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group13">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group13">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page14" data-order="14">
                    <img src="/img/books/page14/extra/two-avatars.jpg" class="page-img modal-image14">
                    <div class="giver-img">
                        <img src="/img/books/page14/woman/giver-base.png" class="extra modal-image14" style="z-index: 1;">
                        <img id="eyesfemale14"src="/img/books/page14/woman/eyes/brown.png" class="extra modal-image14" style="z-index: 1;">
                        <img id="hairfemale14" src="/img/books/page14/woman/hair/brown/long1.png" class="extra modal-image14" style="z-index: 1;">
                        <img id="glassesfemale14" src="/img/books/page14/woman/glasses/glasses.png" class="extra modal-image14" style="z-index: 1;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page14/man/receiver-base.png" class="extra modal-image14" style="z-index: 2;">
                        <img id="eyesmale14" src="/img/books/page14/man/eyes/brown.png" class="extra modal-image14" style="z-index: 2;">
                        <img id="hairmale14" src="/img/books/page14/man/hair/brown/half1.png" class="extra modal-image14" style="z-index: 2;">
                        <img id="beardmale14" src="/img/books/page14/man/beard/brown/brown1.png" class="extra modal-image14" style="z-index: 2;">
                        <img id="glassesmale14" src="/img/books/page14/man/glasses/glasses.png" class="extra modal-image14" style="z-index: 2;">
                    </div>
                    <div><div id="text-page14" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Aun me amas verdad? :c Claro que si</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn14">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal14" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close14">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group14">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group14">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group14">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page15" data-order="15">
                    <img src="/img/books/page15/extra/no-avatars.jpg" class="page-img modal-image15">
                    <div><div id="text-page15" contenteditable="true" class="page-text large" style="position:absolute; top:100px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn15">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal15" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close15">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group15">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group15">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group15">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page16" data-order="16">
                    <img src="/img/books/page16/extra/two-avatars.jpg" class="page-img moda-image16">
                    <div class="giver-img">
                        <img src="/img/books/page16/woman/giver-base.png" class="extra modal-image16" style="z-index: 2;">
                        <img id="eyesfemale16" src="/img/books/page16/woman/eyes/brown.png" class="extra modal-image16" style="z-index: 2;">
                        <img id="hairfemale16" src="/img/books/page16/woman/hair/brown/long1.png" class="extra modal-image16" style="z-index: 2;">
                        <img id="glassesfemale16" src="/img/books/page16/woman/glasses/glasses.png" class="extra modal-image16" style="z-index: 2;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page16/man/receiver-base.png" class="extra modal-image16" style="z-index: 1;">
                        <img id="eyesmale16" src="/img/books/page16/man/eyes/brown.png" class="extra modal-image16" style="z-index: 1;">
                        <img id="hairmale16" src="/img/books/page16/man/hair/brown/half1.png" class="extra modal-image16" style="z-index: 1;">
                        <img id="beardmale16" src="/img/books/page16/man/beard/brown/brown1.png" class="extra modal-image16" style="z-index: 1;">
                        <img id="glassesmale16" src="/img/books/page16/man/glasses/glasses.png" class="extra modal-image16" style="z-index: 1;">
                    </div>
                    <div><div id="text-page16" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos abrazamos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn16">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal16" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close16">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group16">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group16">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group16">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page17" data-order="17">
                     <img src="/img/books/page17/extra/no-avatars.jpg" class="page-img modal-image17">
                     <div><div id="text-page17" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando soñamos juntos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn17">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal17" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close17">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group17">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group17">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group17">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page18" data-order="18">
                    <img src="/img/books/page18/extra/two-avatars.jpg" class="page-img modal-image18">
                    <div class="giver-img">
                        <img src="/img/books/page18/woman/giver-base.png" class="extra modal-image18" style="z-index: 2;">
                        <img id="eyesfemale18" src="/img/books/page18/woman/eyes/brown.png" class="extra modal-image18" style="z-index: 2;">
                        <img id="hairfemale18" src="/img/books/page18/woman/hair/brown/long1.png" class="extra modal-image18" style="z-index: 2;">
                        <img id="glassesfemale18" src="/img/books/page18/woman/glasses/glasses.png" class="extra modal-image18" style="z-index: 2;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page18/man/receiver-base.png" class="extra modal-image18" style="z-index: 1;">
                        <img id="eyesmale18" src="/img/books/page18/man/eyes/brown.png" class="extra modal-image18" style="z-index: 1;">
                        <img id="hairmale18" src="/img/books/page18/man/hair/brown/half1.png" class="extra modal-image18" style="z-index: 1;">
                        <img id="beardmale18" src="/img/books/page18/man/beard/brown/brown1.png" class="extra modal-image18" style="z-index: 1;">
                        <img id="glassesmale18" src="/img/books/page18/man/glasses/glasses.png" class="extra modal-image18" style="z-index: 1;">
                    </div>
                    <div><div id="text-page18" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important;  right: 100px !important; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos entendemos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn18">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal18" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close18">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group18">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group18">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group18">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page19" data-order="19">
                    <img src="/img/books/page19/extra/no-avatars.jpg" class="page-img modal-image19">
                    <div><div id="text-page19" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando comemos juntos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn19">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal19" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close19">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group19">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group19">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group19">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>


                <div class="page-wrapper" id="page20" data-order="20">
                    <img src="/img/books/page20/extra/no-avatars (1).jpg" class="page-img modal-image20">
                    <div><div id="text-page20" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes en las nubes</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn20">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal20" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close20">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group20">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group20">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group20">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>



                <div class="page-wrapper" id="page21" data-order="21">
                    <img src="/img/books/page21/extra/two-avatars.jpg" class="page-img modal-image21">
                    <div class="giver-img">
                        <img src="/img/books/page21/woman/giver-base.png" class="extra modal-image21" style="z-index: 1;">
                        <img id="eyesfemale21" src="/img/books/page21/woman/eyes/brown.png" class="extra modal-image21" style="z-index: 1;">
                        <img id="hairfemale21" src="/img/books/page21/woman/hair/brown/long1.png" class="extra modal-image21" style="z-index: 1;">
                        <img id="glassesfemale21" src="/img/books/page21/woman/glasses/glasses.png" class="extra modal-image21" style="z-index: 1;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page21/man/receiver-base.png" class="extra modal-image21" style="z-index: 2;">
                        <img id="eyesmale21" src="/img/books/page21/man/eyes/brown.png" class="extra modal-image21" style="z-index: 2;">
                        <img id="hairmale21" src="/img/books/page21/man/hair/brown/half1.png" class="extra modal-image21" style="z-index: 2;">
                        <img id="beardmale21" src="/img/books/page21/man/beard/brown/brown1.png" class="extra modal-image21" style="z-index: 2;">
                        <img id="glassesmale21" src="/img/books/page21/man/glasses/glasses.png" class="extra modal-image21" style="z-index: 2;">
                    </div>
                    <div><div id="text-page21" contenteditable="true" class="page-text large" style="position:absolute; top:10px; left: 50% !important; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3; margin-top: 300px !important;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo dormir contigo</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn21">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal21" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close21">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group21">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group21">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group21">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>



                <div class="page-wrapper" id="page22" data-order="22">
                    <img src="/img/books/page22/extra/no-avatars.jpg" class="page-img modal-image22">
                    <div><div id="text-page22" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tener citas...</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn22">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal22" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close22">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group22">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group22">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group22">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>



                <div class="page-wrapper" id="page23" data-order="23">
                    <img src="/img/books/page23/extra/two-avatars.jpg" class="page-img modal-image23">
                    <div class="giver-img">
                        <img src="/img/books/page23/woman/giver-base.png" class="extra modal-image23" style="z-index: 1;">
                        <img id="eyesfemale23" src="/img/books/page23/woman/eyes/brown.png" class="extra modal-image23" style="z-index: 1;">
                        <img id="hairfemale23" src="/img/books/page23/woman/hair/brown/long1.png" class="extra modal-image23" style="z-index: 1;">
                        <img id="glassesfemale23" src="/img/books/page23/woman/glasses/glasses.png" class="extra modal-image23" style="z-index: 1;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page23/man/receiver-base.png" class="extra modal-image23" style="z-index: 2;">
                        <img id="eyesmale23" src="/img/books/page23/man/eyes/brown.png" class="extra modal-image23" style="z-index: 2;">
                        <img id="hairmale23" src="/img/books/page23/man/hair/brown/half1.png" class="extra modal-image23" style="z-index: 2;">
                        <img id="beardmale23" src="/img/books/page23/man/beard/brown/brown1.png" class="extra modal-image23" style="z-index: 2;">
                        <img id="glassesmale23" src="/img/books/page23/man/glasses/glasses.png" class="extra modal-image23" style="z-index: 2;">
                    </div>
                    <div><div id="text-page23" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cocinar juntos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn23">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                <div class="extras">
                    <img src="/img/books/page23/extra/extra-1.png" class="extra modal-image23" style="z-index: 3;">
                    <div id="myModal23" class="modal">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                            <span class="close23">&times;</span>
                            <h2>Cambia tu imagen</h2>
                            <div class="image-group23">
                              <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                            </div>
                            <div class="image-group23">
                              <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                            </div>
                            <div class="image-group23">
                              <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="page-wrapper" id="page24" data-order="24">
                    <img src="/img/books/page24/extra/no-avatars.jpg" class="page-img modal-image24">
                    <div id="text-page24" contenteditable="true" class="page-text large" style="position:absolute; top: 50%; left: 70%; transform: translateY(-50%) translateX(-50%); display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para la cena</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn24">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal24" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close24">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group24">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group24">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group24">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page25" data-order="25">
                    <img src="/img/books/page25/extra/no-avatars (1).jpg" class="page-img modal-image25">
                    <div><div id="text-page25" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empezar la mañana a nuestra manera</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn25">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal25" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close25">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group25">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group25">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group25">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page26" data-order="26">
                    <img src="/img/books/page26/extra/only-giver.jpg" class="page-img modal-image26">
                    <div class="giver-img">
                        <img src="/img/books/page26/woman/giver-base.png" class="extra modal-image26" style="z-index: 1;">
                        <img id="eyesfemale26" src="/img/books/page26/woman/eyes/brown.png" class="extra modal-image26" style="z-index: 1;">
                        <img id="hairfemale26" src="/img/books/page26/woman/hair/brown/long1.png" class="extra modal-image26" style="z-index: 1;">
                    </div>
                    <div><div id="text-page26" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres tan linda</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn26">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal26" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close26">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group26">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group26">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group26">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page27" data-order="27">
                    <img src="/img/books/page27/extra/no-avatars.jpg" class="page-img modal-image27">
                    <div><div  id="text-page27" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes loco</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn27">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal27" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close27">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group27">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group27">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group27">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>



                <div class="page-wrapper" id="page28" data-order="28">
                    <img src="/img/books/page28/extra/no-avatars (1).jpg" class="page-img modal-image28">
                    <div><div id="text-page28" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos somos una pieza</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn28">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal28" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close28">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group28">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group28">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group28">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>



                <div class="page-wrapper" id="page29" data-order="29">
                    <img src="/img/books/page29/extra/no-avatars.jpg" class="page-img modal-image29">
                    <div><div id="text-page29" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te doy mi medio panqueque</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn29">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal29" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close29">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group29">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group29">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group29">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page30" data-order="30">
                    <img src="/img/books/page30/extra/no-avatars (1).jpg" class="page-img modal-image30">
                    <div><div id="text-page30" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo nuestros momentos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn30">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal30" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close30">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group30">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group30">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group30">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page31" data-order="31">
                    <img src="/img/books/page31/extra/no-avatars.jpg" class="page-img modal-image31">
                    <div><div id="text-page31" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Construir recuerdos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn31">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal31" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close31">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group31">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group31">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group31">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page32" data-order="32">
                    <img src="/img/books/page32/extra/two-avatars.jpg" class="page-img modal-image32">
                    <div class="giver-img">
                        <img src="/img/books/page32/woman/giver-base.png" class="extra modal-image32" style="z-index: 2;">
                        <img id="eyesfemale32" src="/img/books/page32/woman/eyes/brown.png" class="extra modal-image32" style="z-index: 2;">
                        <img id="hairfemale32" src="/img/books/page32/woman/hair/brown/long1.png" class="extra modal-image32" style="z-index: 2;">
                        <img id="glassesfemale32" src="/img/books/page32/woman/glasses/glasses.png" class="extra modal-image32" style="z-index: 2;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page32/man/receiver-base.png" class="extra modal-image32" style="z-index: 1;">
                        <img id="eyesmale32" src="/img/books/page32/man/eyes/brown.png" class="extra modal-image32" style="z-index: 1;">
                        <img id="hairmale32" src="/img/books/page32/man/hair/brown/half1.png" class="extra modal-image32" style="z-index: 1;">
                        <img id="beardmale32" src="/img/books/page32/man/beard/brown/brown1.png" class="extra modal-image32" style="z-index: 1;">
                        <img id="glassesmale32" src="/img/books/page32/man/glasses/glasses.png" class="extra modal-image32" style="z-index: 1;">
                    </div>
                    <div><div id="text-page32" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tomarnos fotos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn32">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                <div class="extras">
                    <img src="/img/books/page32/extra/extra-1.png" class="extra modal-image32" style="z-index: 3;">
                </div>
                <div id="myModal32" class="modal">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <span class="close32">&times;</span>
                        <h2>Cambia tu imagen</h2>
                        <div class="image-group32">
                          <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                        </div>
                        <div class="image-group32">
                          <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                        </div>
                        <div class="image-group32">
                          <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>




                <div class="page-wrapper" id="page33" data-order="33">
                    <img src="/img/books/page33/extra/no-avatars.jpg" class="page-img modal-image33">
                    <div><div id="text-page33" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontrar el camino juntos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn33">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal33" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close33">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group33">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group33">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group33">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page34" data-order="34">
                    <img src="/img/books/page34/extra/no-avatars (1).jpg" class="page-img modal-image34">
                    <div><div id="text-page34" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos hasta el fin del mundo</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn34">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal34" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close34">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group34">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group34">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group34">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page35" data-order="35">
                    <img src="/img/books/page35/extra/no-avatars.jpg" class="page-img modal-image35">
                    <div><div id="text-page35" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para una pelicula</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn35">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal35" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close35">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group35">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group35">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group35">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>




                <div class="page-wrapper" id="page36" data-order="36">
                    <img src="/img/books/page36/extra/no-avatars (1).jpg" class="page-img modal-image36">
                    <div><div id="text-page36" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No ver netflix solos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn36">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal36" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close36">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group36">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group36">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group36">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page37" data-order="37">
                    <img src="/img/books/page37/extra/two-avatars.jpg" class="page-img modal-image37">
                    <div class="giver-img">
                        <img src="/img/books/page37/woman/giver-base.png" class="extra modal-image37" style="z-index: 2;">
                        <img id="eyesfemale37" src="/img/books/page37/woman/eyes/brown.png" class="extra modal-image37" style="z-index: 2;">
                        <img id="hairfemale37" src="/img/books/page37/woman/hair/brown/long1.png" class="extra modal-image37" style="z-index: 2;">
                        <img id="glassesfemale37" src="/img/books/page37/woman/glasses/glasses.png" class="extra modal-image37" style="z-index: 2;">
                    </div>
                    <div class="receiver-img">
                        <img src="/img/books/page37/man/receiver-base.png" class="extra modal-image37" style="z-index: 1;">
                        <img id="eyesmale37" src="/img/books/page37/man/eyes/brown.png" class="extra modal-image37" style="z-index: 1;">
                        <img id="hairmale37" src="/img/books/page37/man/hair/brown/half1.png" class="extra modal-image37" style="z-index: 1;">
                        <img id="beardmale37" src="/img/books/page37/man/beard/brown/brown1.png" class="extra modal-image37" style="z-index: 1;">
                        <img id="glassesmale37" src="/img/books/page37/man/glasses/glasses.png" class="extra modal-image37" style="z-index: 1;">
                    </div>
                    <div><div id="text-page37" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta lo que tenemos</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn37">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                <div class="extra">
                    <img src="/img/books/page37/extra/extra-1.png" class="extra modal-image37" style="z-index: 3;">
                </div>
                <div id="myModal37" class="modal">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <span class="close37">&times;</span>
                        <h2>Cambia tu imagen</h2>
                        <div class="image-group37">
                          <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                        </div>
                        <div class="image-group37">
                          <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                        </div>
                        <div class="image-group37">
                          <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                          <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

                <div class="page-wrapper" id="page38" data-order="38">
                    <img src="/img/books/page38/extra/no-avatars.jpg" class="page-img modal-image38">
                    <div><div id="text-page38" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para masaje</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn38">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal38" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close38">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group38">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group38">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group38">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page39" data-order="39">
                    <img src="/img/books/page39/extra/only-receiver.jpg" class="page-img modal-image39">
                    <div class="giver-img">
                        <img src="/img/books/page39/man/receiver-base.png" class="extra modal-image39" style="z-index: 2;">
                        <img id="eyesmale39" src="/img/books/page39/man/eyes/brown.png" class="extra modal-image39" style="z-index: 2;">
                        <img id="hairmale39" src="/img/books/page39/man/hair/brown/half1.png" class="extra modal-image39" style="z-index: 2;">
                        <img id="beardmale39" src="/img/books/page39/man/beard/brown/brown1.png" class="extra modal-image39" style="z-index: 2;">
                        <img id="glassesmale39" src="/img/books/page39/man/glasses/glasses.png" class="extra modal-image39" style="z-index: 2;">
                    </div>
                    <div><div id="text-page39" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te amo de pies a cabeza</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn39">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal39" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close39">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group39">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group39">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group39">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page40" data-order="40">
                    <img src="/img/books/page40/extra/no-avatars.jpg" class="page-img modal-image40">
                    <div><div id="text-page40" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prometeme que siempre estaremos juntos sin importar lo que pase</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn40">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal40" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close40">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group40">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group40">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group40">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page41" data-order="41">
                    <img src="/img/books/page41/extra/no-avatars (1).jpg" class="page-img modal-image41">
                    <div><div id="text-page41" contenteditable="true" class="page-text large" style="position:absolute; top:20px !important; left: 30px !important; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi espacio</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn41">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal41" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close41">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group41">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group41">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group41">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page42" data-order="42">
                    <img src="/img/books/page42/extra/no-avatars.jpg" class="page-img modal-image42">
                    <div><div id="text-page42" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiero envejecer contigo</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn42">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal42" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close42">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group42">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group42">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group42">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>


                <div class="page-wrapper" id="page43" data-order="43">
                    <img src="/img/books/page43/extra/no-avatars (1).jpg" class="page-img modal-image43">
                    <div><div id="text-page43" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi mas hermoso descubrimiento</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn43">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal43" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close43">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group43">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group43">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group43">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                <div class="page-wrapper" id="page44" data-order="44">
                    <img src="/img/books/page44/extra/no-avatars.jpg" class="page-img modal-image44">
                    <div><div id="text-page44" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3;" >
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y la luz de mi vida</font></font></div>
                        </div></div>
                        <button class="btn btn-primary myBtn44">Cambia tu imagen</button>
                        <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                        <button class="btn btn-primary insert-after-btn">Insertar después</button>
                        <div id="myModal44" class="modal">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <span class="close44">&times;</span>
                                <h2>Cambia tu imagen</h2>
                                <div class="image-group44">
                                  <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                                </div>
                                <div class="image-group44">
                                  <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                                </div>
                                <div class="image-group44">
                                  <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                                  <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                                </div>
                              </div>
                            </div>
                          </div>
                </div>



                <div class="page-wrapper" id="page45" data-order="45">
                    <img src="/img/books/page45/extra/two-avatars.jpg" class="page-img modal-image45">
                <div class="giver-img">
                    <img src="/img/books/page45/woman/giver-woman-base.png" class="extra modal-image45" style="z-index: 1;">
                    <img id="eyesfemale45" src="/img/books/page45/woman/eyes/brown.png" class="extra modal-image45" style="z-index: 1;">
                    <img id="hairfemale45" src="/img/books/page45/woman/hair/brown/long1.png" class="extra modal-image45" style="z-index: 1;">
                    <img id="glassesfemale45" src="/img/books/page45/woman/glasses/glasses.png" class="extra modal-image45" style="z-index: 1;">
                </div>
                <div class="receiver-img">
                    <img src="/img/books/page45/man/receiver-man-base.png" class="extra modal-image45" style="z-index: 2;">
                    <img id="eyesmale45"src="/img/books/page45/man/eyes/brown.png" class="extra modal-image45" style="z-index: 2;">
                    <img id="hairmale45"src="/img/books/page45/man/hair/brown/half1.png" class="extra modal-image45" style="z-index: 2;">
                    <img id="beardmale45" src="/img/books/page45/man/beard/brown/brown1.png" class="extra modal-image45" style="z-index: 2;">
                    <img id="glassesmale45" src="/img/books/page45/man/glasses/glasses.png" class="extra modal-image45" style="z-index: 2;">
                </div>
                <div class="extras">
                    <img src="/img/books/page45/extra/extra-1.png" class="extra modal-image45" style="z-index: 3;">
                </div>
                <div><div id="text-page45" contenteditable="true" class="page-text large" style="position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 90% !important; font-family: 'Lato', sans-serif; z-index: 3 !important;" >
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TE AMO</font></font></div>
                    </div></div>
                    <button class="btn btn-primary myBtn45">Cambia tu imagen</button>
                    <button class="btn btn-primary insert-before-btn">Insertar antes</button>
                    <button class="btn btn-primary insert-after-btn">Insertar después</button>
                    <div id="myModal45" class="modal">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                            <span class="close45">&times;</span>
                            <h2>Cambia tu imagen</h2>
                            <div class="image-group45">
                              <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                            </div>
                            <div class="image-group45">
                              <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                            </div>
                            <div class="image-group45">
                              <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                              <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                            </div>
                          </div>
                        </div>
                      </div>
            </div>

            <button id="guardarLibroBtn">Guardar libro</button>



             </div>
             <div id="myModal" class="modal">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <span class="close1">&times;</span>
                    <h2>Cambia tu imagen</h2>
                    <div class="image-group">
                      <img src="/img/books/page2/extra/blank.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars (1).jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars (2).jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars6.jpg" class="modal-img">
                    </div>
                    <div class="image-group">
                      <img src="/img/books/page2/extra/no-avatars7.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars8.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars9.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars10.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars11.jpg" class="modal-img">
                    </div>
                    <div class="image-group">
                      <img src="/img/books/page2/extra/no-avatars12.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars13.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars14.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars15.jpg" class="modal-img">
                      <img src="/img/books/page2/extra/no-avatars16.jpg" class="modal-img">
                    </div>
                  </div>
                </div>
              </div>
     </div>
     <script src="{{ asset('js/Book_front_page.js')}}"></script>
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

