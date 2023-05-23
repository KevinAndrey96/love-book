<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book PDF</title>
    <style>

        *{
            margin: 0 !important;
            padding: 0 !important;
        }
.pages .page-wrapper .extra,
        .pages .page-wrapper .index {
            position: absolute;
            left: 0;
            top: 0;
            display: flex;
            font-size: 12px;
        }

        .page-wrapper {
            width: 100vw;
            height: 100vh;
            position: relative;
        }

        .pages .page-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .title-wrapper {
            position: absolute;
            top: 0;
            right: 10;
            width: 200%;
            padding: 1rem;
        }

        #text-page{
            position: absolute; top: 10px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 1vw; font-family: 'Lato', sans-serif; text-align: center;

        }

        h1 {
            font-size: 70px !important;
        }

        #text-page2{
            position:absolute; left: 5%;  top: -15px; right: 5%; display: flex; justify-content: center !important;  flex-direction: column; align-items:center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page3{
            position:absolute; top: -25px; left: 5%; right: 5%; display: flex; justify-content: center !important; flex-direction: column; align-items:center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page4{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page5{
            position:absolute; top: -20px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page6{
            position:absolute; top:1px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page7{
            position:absolute; top: -10px; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page8{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page9{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page10{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page11{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page12{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page13{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page14{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page15{
            position:absolute; top:100px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page16{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page17{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page18{
            position:absolute; top:1px !important;   display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page19{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page20{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page21{
            position:absolute; top: 400px;  right: 200px; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3; margin-top: 300px !important;
        }

        #text-page22{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page23{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page24{
            position:absolute; top: 45%; left: 35%;  display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page25{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page26{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page27{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page28{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page29{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page30{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;;
        }

        #text-page31{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page32{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page33{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page34{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page35{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page36{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }


        #text-page37{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page38{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page39{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page40{
            position:absolute; top:200px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page41{
            position:absolute; top:20px !important; left: 30px !important; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page42{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page43{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page44{
            position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page45{
                position:absolute; top:1px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 30px !important; font-family: 'Lato', sans-serif; z-index: 3 !important;}









    </style>
</head>
<body>
    <div id="product-step">
        <div class="row">
         <div class="col-12 pages">
             <div class="page-wrapper" id="first-page-wrapper">
                <img src={{ public_path('/img/books/page1/extra/two-avatars.jpg')}} class="modal-image">
            <div class="giver-img">
                <img src={{ public_path('/img/books/page1/woman/giver-woman-base.png')}} class="extra modal-image" style="z-index: 1;">
                <img id="eyesfemale" src={{ public_path('/img/books/page1/woman/eyes/brown.png')}} class="extra modal-image" style="z-index: 1;">
                <img id="hairfemale" src={{ public_path('/img/books/page1/woman/hair/brown/long1.png')}} class="extra modal-image" style="z-index: 1;">
                <img id="glassesfemale" src={{ public_path('/img/books/page1/woman/glasses/glasses.png')}} class="extra modal-image" style="z-index: 1;">
        </div>
        <div class="receiver-img">
            <img src={{ public_path('/img/books/page1/man/receiver-man-base.png')}} class="extra modal-image" style="z-index: 2;">
            <img id="eyesmale"src={{ public_path('/img/books/page1/man/eyes/brown.png')}} class="extra modal-image" style="z-index: 2;">
            <img id="hairmale"src={{ public_path('/img/books/page1/man/hair/brown/half1.png')}} class="extra modal-image" style="z-index: 2;">
            <img id="beard" src={{ public_path('/img/books/page1/man/beard/brown/brown1.png')}} class="extra modal-image" style="z-index: 2;">
            <img id="glassesmale" src={{ public_path('/img/books/page1/man/glasses/glasses.png')}} class="extra modal-image" style="z-index: 2;">
        </div>
        <div class="extras">
            <img src={{ public_path('/img/books/page1/extra/extra-1.png')}} class="extra modal-image" style="z-index: 3;">
        </div>
        <div class="tittle-wrapper"  contenteditable="true" id="text-page1" >
            <h1 id="names"  title="Esta será tu portada">Esta será tu portada</h1>
        </div>
    </div>

    <div class="page-wrapper" id="page2" data-order="2">
        <img src={{ public_path('/img/books/page2/extra/two-avatars.jpg')}} id="page-image" class="page-img modal-image1">
    <div class="giver-img">
            <img src={{ public_path('/img/books/page2/woman/giver-base.png')}} class="extra modal-image1" style="z-index: 2;">
            <img id="eyesfemale2" src={{ public_path('/img/books/page2/woman/eyes/brown.png')}} class="extra modal-image1" style="z-index: 2;">
            <img id="hairfemale2"src={{ public_path('/img/books/page2/woman/hair/brown/long1.png')}} class="extra modal-image1" style="z-index: 2;">
            <img id="glassesfemale2"src={{ public_path('/img/books/page2/woman/glasses/glasses.png')}} class="extra modal-image1" style="z-index: 2;">
        <div class="receiver-img">
            <img src={{ public_path('/img/books/page2/man/receiver-base.png')}} class="extra modal-image1" style="z-index: 1;">
            <img id="eyesmale2" src={{ public_path('/img/books/page2/man/eyes/brown.png')}} class="extra modal-image1" style="z-index: 1;">
            <img id="hairmale2" src={{ public_path('/img/books/page2/man/hair/brown/half1.png')}} class="extra modal-image1" style="z-index: 1;">
            <img id="beardmale2" src={{ public_path('/img/books/page2/man/beard/brown/brown1.png')}} class="extra modal-image1" style="z-index: 1;">
            <img id="glassesmale2" src={{ public_path('/img/books/page2/man/glasses/glasses.png')}} class="extra modal-image1" style="z-index: 1;">
        </div>
        <div class="extras">
            <img src={{ public_path('/img/books/page2/extra/extra-1.png')}} class="extra modal-image1" style="z-index: 3;">
            <div><div id="text-page2" contenteditable="true"  class="page-text large">
                <div><br></div>
                <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esta es nuestra historia</font></font></div>
                </div></div>

    <div class="page-wrapper" id="page3" data-order="3">
   <img src={{ public_path('/img/books/page3/extra/two-avatars(1).jpg')}} class="page-img modal-image3">
    <div class="giver-img">
      <img src={{ public_path('/img/books/page3/woman/giver-base.png')}} class="extra modal-image3" style="z-index: 2;">
      <img id="eyesfemale3" src={{ public_path('/img/books/page3/woman/eyes/brown.png')}} class="extra modal-image3" style="z-index: 2;">
      <img id="hairfemale3" src={{ public_path('/img/books/page3/woman/hair/brown/long1.png')}} class="extra modal-image3" style="z-index: 2;">
      <img id="glassesfemale3" src={{ public_path('/img/books/page3/woman/glasses/glasses.png')}} class="extra modal-image3" style="z-index: 2;">
    </div>
    <div class="receiver-img">
        <img src={{ public_path('/img/books/page3/man/receiver-base.png')}} class="extra modal-image3" style="z-index: 1;">
        <img id="eyesmale3" src={{ public_path('/img/books/page3/man/eyes/brown.png')}} class="extra modal-image3" style="z-index: 1;">
        <img id="hairmale3" src={{ public_path('/img/books/page3/man/hair/brown/half1.png')}} class="extra modal-image3" style="z-index: 1;">
        <img id="beardmale3" src={{ public_path('/img/books/page3/man/beard/brown/brown1.png')}} class="extra modal-image3" style="z-index: 1;">
        <img id="glassesmale3" src={{ public_path('/img/books/page3/man/glasses/glasses.png')}} class="extra modal-image3" style="z-index: 1;">
    </div>
    <div><div id="text-page3" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fue amor a primera vista</font></font></div>
        </div></div>

        <div class="page-wrapper" id="page4" data-order="4">
<img src={{ public_path('/img/books/page4/extra/two-avatars.jpg')}} class="page-img modal-image4">
        <div class="giver-img">
<img src={{ public_path('/img/books/page4/woman/giver-base.png')}} class="extra modal-image4" style="z-index: 1;">
<img id="eyesfemale4" src={{ public_path('/img/books/page4/woman/eyes/brown.png')}} class="extra modal-image4" style="z-index: 1;">
<img id="hairfemale4" src={{ public_path('/img/books/page4/woman/hair/brown/long1.png')}} class="extra modal-image4" style="z-index: 1;">
<img id="glassesfemale4" src={{ public_path('/img/books/page4/woman/glasses/glasses.png')}} class="extra modal-image4" style="z-index: 1;">
        </div>
        <div class="receiver-img">
<img src={{ public_path('/img/books/page4/man/giver-base.png')}} class="extra modal-image4" style="z-index: 2;">
<img id="eyesmale4" src={{ public_path('/img/books/page4/man/eyes/brown.png')}} class="extra modal-image4" style="z-index: 2;">
<img id="hairmale4" src={{ public_path('/img/books/page4/man/hair/brown/half1.png')}} class="extra modal-image4" style="z-index: 2;">
<img id="beardmale4" src={{ public_path('/img/books/page4/man/beard/brown/brown1.png')}} class="extra modal-image4" style="z-index: 2;">
<img id="glassesmale4" src={{ public_path('/img/books/page4/man/glasses/glasses.png')}} class="extra modal-image4" style="z-index: 2;">
        </div>
        <div><div id="text-page4" contenteditable="true" class="page-text large">
<div><br></div>
<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aun recuerdo nuestro primer beso</font></font></div>
</div></div>

<div class="page-wrapper" id="page5" data-order="5">
    <img src={{ public_path('/img/books/page5/extra/no-avatars.jpg')}} class="page-img modal-image5">
    <div><div id="text-page5" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo el mundo se ve distinto</font></font></div>
        </div></div>


    <div class="page-wrapper" id="page6" data-order="6">
        <img src={{ public_path('/img/books/page6/extra/two-avatars.jpg')}} class="page-img modal-image6">
    <div class="giver-img">
        <img src={{ public_path('/img/books/page6/woman/giver-base.png')}} class="extra modal-image6" style="z-index: 1;">
        <img id="eyesfemale6" src={{ public_path('/img/books/page6/woman/eyes/brown.png')}} class="extra modal-image6" style="z-index: 1;">
        <img id="hairfemale6" src={{ public_path('/img/books/page6/woman/hair/brown/long1.png')}} class="extra modal-image6" style="z-index: 1;">
        <img id="glassesfemale6" src={{ public_path('/img/books/page6/woman/glasses/glasses.png')}} class="extra modal-image6" style="z-index: 1;">
    </div>
    <div class="receiver-img">
        <img src={{ public_path('/img/books/page6/man/receiver-base.png')}} class="extra modal-image6" style="z-index: 2;">
        <img id="eyesmale6" src={{ public_path('/img/books/page6/man/eyes/brown.png')}} class="extra modal-image6" style="z-index: 2;">
        <img id="hairmale6" src={{ public_path('/img/books/page6/man/hair/brown/half1.png')}} class="extra modal-image6" style="z-index: 2;">
        <img id="beardmale6" src={{ public_path('/img/books/page6/man/beard/brown/brown1.png')}} class="extra modal-image6" style="z-index: 2;">
        <img id="glassesmale6" src={{ public_path('/img/books/page6/man/glasses/glasses.png')}} class="extra modal-image6" style="z-index: 2;">
    </div>
    <div><div id="text-page6" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y a ti es lo unico que necesito en ese mundo</font></font></div>
        </div></div>

        <div class="page-wrapper" id="page7" data-order="7">
<img src={{ public_path('/img/books/page7/extra/no-avatars.jpg')}} class="page-img modal-image7">
<div>
    <div id="text-page7" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres la primer persona a la que llamo</font></font></div>
    </div>
</div>

<div class="page-wrapper" id="page8" data-order="8">
    <img src={{ public_path('/img/books/page8/extra/two-avatars.jpg')}} class="page-img modal-image8">
    <div class="giver-img">
        <img src={{ public_path('/img/books/page8/woman/giver-base.png')}} class="extra modal-image8" style="z-index: 1;">
        <img id="eyesfemale8" src={{ public_path('/img/books/page8/woman/eyes/brown.png')}} class="extra modal-image8" style="z-index: 1;">
        <img id="hairfemale8" src={{ public_path('/img/books/page8/woman/hair/brown/long1.png')}} class="extra modal-image8" style="z-index: 1;">
        <img id="glassesfemale8" src={{ public_path('/img/books/page8/woman/glasses/glasses.png')}} class="extra modal-image8" style="z-index: 1;">
    </div>
    <div class="receiver-img">
        <img src={{ public_path('/img/books/page8/man/receiver-base.png')}} class="extra modal-image8" style="z-index: 2;">
        <img id="eyesmale8" src={{ public_path('/img/books/page8/man/eyes/brown.png')}} class="extra modal-image8" style="z-index: 2;">
        <img id="hairmale8"src={{ public_path('/img/books/page8/man/hair/brown/half1.png')}} class="extra modal-image8" style="z-index: 2;">
        <img id="beardmale8" src={{ public_path('/img/books/page8/man/beard/brown/brown1.png')}} class="extra modal-image8" style="z-index: 2;">
        <img id="glassesmale8" src={{ public_path('/img/books/page8/man/glasses/glasses.png')}} class="extra modal-image8" style="z-index: 2;">
    </div>
    <div><div id="text-page8" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Podemos hablar por horas...</font></font></div>
        </div></div>

        <div class="page-wrapper" id="page9" data-order="9">
<img src={{ public_path('/img/books/page9/extra/no-avatars.jpg')}} class="page-img modal-image9">
<div><div id="text-page9" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo siempre sonrio</font></font></div>
    </div></div>


    <div class="page-wrapper" id="page10" data-order="10">
        <img src={{ public_path('/img/books/page10/extra/two-avatars.jpg')}} class="page-img modal-image10">
        <div class="giver-img">
<img src={{ public_path('/img/books/page10/woman/giver-base.png')}} class="extra modal-image10" style="z-index: 2;">
<img id="eyesfemale10" src={{ public_path('/img/books/page10/woman/eyes/brown.png')}} class="extra modal-image10" style="z-index: 2;">
<img id="hairfemale10" src={{ public_path('/img/books/page10/woman/hair/brown/long1.png')}} class="extra modal-image10" style="z-index: 2;">
<img id="glassesfemale10" src={{ public_path('/img/books/page10/woman/glasses/glasses.png')}} class="extra modal-image10" style="z-index: 2;">
        </div>
        <div class="receiver-img">
<img src={{ public_path('/img/books/page10/man/receiver-base.png')}} class="extra modal-image10" style="z-index: 1;">
<img id="eyesmale10" src={{ public_path('/img/books/page10/man/eyes/brown.png')}} class="extra modal-image10" style="z-index: 1;">
<img id="hairmale10" src={{ public_path('/img/books/page10/man/hair/brown/half1.png')}} class="extra modal-image10" style="z-index: 1;">
<img id="beardmale10" src={{ public_path('/img/books/page10/man/beard/brown/brown1.png')}} class="extra modal-image10" style="z-index: 1;">
<img id="glassesmale10" src={{ public_path('/img/books/page10/man/glasses/glasses.png')}} class="extra modal-image10" style="z-index: 1;">
        </div>
        <div><div id="text-page10" contenteditable="true" class="page-text large">
<div><br></div>
<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me haces muy feliz</font></font></div>
</div></div>

<div class="page-wrapper" id="page11" data-order="11">
    <img src={{ public_path('/img/books/page11/extra/no-avatars.jpg')}} class="page-img modal-image11">
    <div><div id="text-page11" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gracias por ayudarme a sostenerme</font></font></div>
        </div></div>

        <div class="page-wrapper" id="page12" data-order="12">
<img src={{ public_path('/img/books/page12/extra/no-avatars(1).jpg')}} class="page-img modal-image12">
<div><div id="text-page12" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu cargas mi bateria</font></font></div>
    </div></div>


    <div class="page-wrapper" id="page13" data-order="13">
        <img src={{ public_path('/img/books/page13/extra/no-avatars.jpg')}} class="page-img modal-image13">
        <div><div id="text-page13" contenteditable="true" class="page-text large">
<div><br></div>
<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando te enojas</font></font></div>
</div></div>

<div class="page-wrapper" id="page14" data-order="14">
    <img src={{ public_path('/img/books/page14/extra/two-avatars.jpg')}} class="page-img modal-image14">
    <div class="giver-img">
        <img src={{ public_path('/img/books/page14/woman/giver-base.png')}} class="extra modal-image14" style="z-index: 1;">
        <img id="eyesfemale14"src={{ public_path('/img/books/page14/woman/eyes/brown.png')}} class="extra modal-image14" style="z-index: 1;">
        <img id="hairfemale14" src={{ public_path('/img/books/page14/woman/hair/brown/long1.png')}} class="extra modal-image14" style="z-index: 1;">
        <img id="glassesfemale14" src={{ public_path('/img/books/page14/woman/glasses/glasses.png')}} class="extra modal-image14" style="z-index: 1;">
    </div>
    <div class="receiver-img">
        <img src={{ public_path('/img/books/page14/man/receiver-base.png')}} class="extra modal-image14" style="z-index: 2;">
        <img id="eyesmale14" src={{ public_path('/img/books/page14/man/eyes/brown.png')}} class="extra modal-image14" style="z-index: 2;">
        <img id="hairmale14" src={{ public_path('/img/books/page14/man/hair/brown/half1.png')}} class="extra modal-image14" style="z-index: 2;">
        <img id="beardmale14" src={{ public_path('/img/books/page14/man/beard/brown/brown1.png')}} class="extra modal-image14" style="z-index: 2;">
        <img id="glassesmale14" src={{ public_path('/img/books/page14/man/glasses/glasses.png')}} class="extra modal-image14" style="z-index: 2;">
    </div>
    <div><div id="text-page14" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Aun me amas verdad? :c Claro que si</font></font></div>
        </div></div>

        <div class="page-wrapper" id="page15" data-order="15">
<img src={{ public_path('/img/books/page15/extra/no-avatars.jpg')}} class="page-img modal-image15">
<div><div id="text-page15" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando</font></font></div>
    </div></div>


    <div class="page-wrapper" id="page16" data-order="16">
        <img src={{ public_path('/img/books/page16/extra/two-avatars.jpg')}} class="page-img moda-image16">
        <div class="giver-img">
<img src={{ public_path('/img/books/page16/woman/giver-base.png')}} class="extra modal-image16" style="z-index: 2;">
<img id="eyesfemale16" src={{ public_path('/img/books/page16/woman/eyes/brown.png')}} class="extra modal-image16" style="z-index: 2;">
<img id="hairfemale16" src={{ public_path('/img/books/page16/woman/hair/brown/long1.png')}} class="extra modal-image16" style="z-index: 2;">
<img id="glassesfemale16" src={{ public_path('/img/books/page16/woman/glasses/glasses.png')}} class="extra modal-image16" style="z-index: 2;">
        </div>
        <div class="receiver-img">
<img src={{ public_path('/img/books/page16/man/receiver-base.png')}} class="extra modal-image16" style="z-index: 1;">
<img id="eyesmale16" src={{ public_path('/img/books/page16/man/eyes/brown.png')}} class="extra modal-image16" style="z-index: 1;">
<img id="hairmale16" src={{ public_path('/img/books/page16/man/hair/brown/half1.png')}} class="extra modal-image16" style="z-index: 1;">
<img id="beardmale16" src={{ public_path('/img/books/page16/man/beard/brown/brown1.png')}} class="extra modal-image16" style="z-index: 1;">
<img id="glassesmale16" src={{ public_path('/img/books/page16/man/glasses/glasses.png')}} class="extra modal-image16" style="z-index: 1;">
        </div>
        <div><div id="text-page16" contenteditable="true" class="page-text large">
<div><br></div>
<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos abrazamos</font></font></div>
</div></div>

<div class="page-wrapper" id="page17" data-order="17">
    <img src={{ public_path('/img/books/page17/extra/no-avatars.jpg')}} class="page-img modal-image17">
    <div><div id="text-page17" contenteditable="true" class="page-text large">
       <div><br></div>
       <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando soñamos juntos</font></font></div>
       </div></div>

<div class="page-wrapper" id="page18" data-order="18">
    <img src={{ public_path('/img/books/page18/extra/two-avatars.jpg')}} class="page-img modal-image18">
    <div class="giver-img">
         <img src={{ public_path('/img/books/page18/woman/giver-base.png')}} class="extra modal-image18" style="z-index: 2;">
         <img id="eyesfemale18" src={{ public_path('/img/books/page18/woman/eyes/brown.png')}} class="extra modal-image18" style="z-index: 2;">
         <img id="hairfemale18" src={{ public_path('/img/books/page18/woman/hair/brown/long1.png')}} class="extra modal-image18" style="z-index: 2;">
         <img id="glassesfemale18" src={{ public_path('/img/books/page18/woman/glasses/glasses.png')}} class="extra modal-image18" style="z-index: 2;">
        </div>
        <div class="receiver-img">
<img src={{ public_path('/img/books/page18/man/receiver-base.png')}} class="extra modal-image18" style="z-index: 1;">
<img id="eyesmale18" src={{ public_path('/img/books/page18/man/eyes/brown.png')}} class="extra modal-image18" style="z-index: 1;">
<img id="hairmale18" src={{ public_path('/img/books/page18/man/hair/brown/half1.png')}} class="extra modal-image18" style="z-index: 1;">
<img id="beardmale18" src={{ public_path('/img/books/page18/man/beard/brown/brown1.png')}} class="extra modal-image18" style="z-index: 1;">
<img id="glassesmale18" src={{ public_path('/img/books/page18/man/glasses/glasses.png')}} class="extra modal-image18" style="z-index: 1;">
        </div>
        <div><div id="text-page18" contenteditable="true" class="page-text large">
<div><br></div>
<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos entendemos</font></font></div>
</div></div>

    <div class="page-wrapper" id="page19" data-order="19">
<img src={{ public_path('/img/books/page19/extra/no-avatars.jpg')}} class="page-img modal-image19">
<div><div id="text-page19" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando comemos juntos</font></font></div>
    </div></div>

    <div class="page-wrapper" id="page20" data-order="20">
        <img src={{ public_path('/img/books/page20/extra/no-avatars(1).jpg')}} class="page-img modal-image20">
<div><div id="text-page20" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes en las nubes</font></font></div>
    </div></div>

    <div class="page-wrapper" id="page21" data-order="21">
        <img src={{ public_path('/img/books/page21/extra/two-avatars.jpg')}} class="page-img modal-image21">
        <div class="giver-img">
<img src={{ public_path('/img/books/page21/woman/giver-base.png')}} class="extra modal-image21" style="z-index: 1;">
<img id="eyesfemale21" src={{ public_path('/img/books/page21/woman/eyes/brown.png')}} class="extra modal-image21" style="z-index: 1;">
<img id="hairfemale21" src={{ public_path('/img/books/page21/woman/hair/brown/long1.png')}} class="extra modal-image21" style="z-index: 1;">
<img id="glassesfemale21" src={{ public_path('/img/books/page21/woman/glasses/glasses.png')}} class="extra modal-image21" style="z-index: 1;">
        </div>
        <div class="receiver-img">
<img src={{ public_path('/img/books/page21/man/receiver-base.png')}} class="extra modal-image21" style="z-index: 2;">
<img id="eyesmale21" src={{ public_path('/img/books/page21/man/eyes/brown.png')}} class="extra modal-image21" style="z-index: 2;">
<img id="hairmale21" src={{ public_path('/img/books/page21/man/hair/brown/half1.png')}} class="extra modal-image21" style="z-index: 2;">
<img id="beardmale21" src={{ public_path('/img/books/page21/man/beard/brown/brown1.png')}} class="extra modal-image21" style="z-index: 2;">
<img id="glassesmale21" src={{ public_path('/img/books/page21/man/glasses/glasses.png')}} class="extra modal-image21" style="z-index: 2;">
        </div>
        <div><div id="text-page21" contenteditable="true" class="page-text large">
<div><br></div>
<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo dormir contigo</font></font></div>
</div></div>

<div class="page-wrapper" id="page22" data-order="22">
    <img src={{ public_path('/img/books/page22/extra/no-avatars.jpg')}} class="page-img modal-image22">
 <div><div id="text-page22" contenteditable="true" class="page-text large">
<div><br></div>
<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tener citas...</font></font></div>
</div></div>

<div class="page-wrapper" id="page23" data-order="23">
    <img src={{ public_path('/img/books/page23/extra/two-avatars.jpg')}} class="page-img modal-image23">
    <div class="giver-img">
        <img src={{ public_path('/img/books/page23/woman/giver-base.png')}} class="extra modal-image23" style="z-index: 1;">
        <img id="eyesfemale23" src={{ public_path('/img/books/page23/woman/eyes/brown.png')}} class="extra modal-image23" style="z-index: 1;">
        <img id="hairfemale23" src={{ public_path('/img/books/page23/woman/hair/brown/long1.png')}} class="extra modal-image23" style="z-index: 1;">
        <img id="glassesfemale23" src={{ public_path('/img/books/page23/woman/glasses/glasses.png')}} class="extra modal-image23" style="z-index: 1;">
    </div>
    <div class="receiver-img">
        <img src={{ public_path('/img/books/page23/man/receiver-base.png')}} class="extra modal-image23" style="z-index: 2;">
        <img id="eyesmale23" src={{ public_path('/img/books/page23/man/eyes/brown.png')}} class="extra modal-image23" style="z-index: 2;">
        <img id="hairmale23" src={{ public_path('/img/books/page23/man/hair/brown/half1.png')}} class="extra modal-image23" style="z-index: 2;">
        <img id="beardmale23" src={{ public_path('/img/books/page23/man/beard/brown/brown1.png')}} class="extra modal-image23" style="z-index: 2;">
        <img id="glassesmale23" src={{ public_path('/img/books/page23/man/glasses/glasses.png')}} class="extra modal-image23" style="z-index: 2;">
    </div>
    <div><div id="text-page23" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cocinar juntos</font></font></div>
        </div></div> --}}


        <div class="page-wrapper" id="page24" data-order="24">
   <img src={{ public_path('/img/books/page24/extra/no-avatars.jpg')}} class="page-img modal-image24">
   <div id="text-page24" contenteditable="true" class="page-text large">
       <div><br></div>
       <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para la cena</font></font></div>
       </div></div>


    <div class="page-wrapper" id="page25" data-order="25">
   <img src={{ public_path('/img/books/page25/extra/no-avatars(1).jpg')}} class="page-img modal-image25">
   <div><div id="text-page25" contenteditable="true" class="page-text large">
       <div><br></div>
       <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empezar la mañana a nuestra manera</font></font></div>
       </div></div>

       <div class="page-wrapper" id="page26" data-order="26">
 <img src={{ public_path('/img/books/page26/extra/only-giver.jpg')}} class="page-img modal-image26">
 <div class="giver-img">
     <img src={{ public_path('/img/books/page26/woman/giver-base.png')}} class="extra modal-image26" style="z-index: 1;">
     <img id="eyesfemale26" src={{ public_path('/img/books/page26/woman/eyes/brown.png')}} class="extra modal-image26" style="z-index: 1;">
     <img id="hairfemale26" src={{ public_path('/img/books/page26/woman/hair/brown/long1.png')}} class="extra modal-image26" style="z-index: 1;">
 </div>
 <div><div id="text-page26" contenteditable="true" class="page-text large">
     <div><br></div>
     <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres tan linda</font></font></div>
     </div></div>


     <div class="page-wrapper" id="page27" data-order="27">
         <img src={{ public_path('/img/books/page27/extra/no-avatars.jpg')}} class="page-img modal-image27">
         <div><div  id="text-page27" contenteditable="true" class="page-text large">
             <div><br></div>
             <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes loco</font></font></div>
             </div></div>

             <div class="page-wrapper" id="page28" data-order="28">
<img src={{ public_path('/img/books/page28/extra/no-avatars(1).jpg')}} class="page-img modal-image28">
<div><div id="text-page28" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos somos una pieza</font></font></div>
    </div></div>

    <div class="page-wrapper" id="page29" data-order="29">
        <img src={{ public_path('/img/books/page29/extra/no-avatars.jpg')}} class="page-img modal-image29">
        <div><div id="text-page29" contenteditable="true" class="page-text large">
  <div><br></div>
  <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te doy mi medio panqueque</font></font></div>
  </div></div>

  <div class="page-wrapper" id="page30" data-order="30">
      <img src={{ public_path('/img/books/page30/extra/no-avatars(1).jpg')}} class="page-img modal-image30">
      <div><div id="text-page30" contenteditable="true" class="page-text large">
          <div><br></div>
          <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo nuestros momentos</font></font></div>
          </div></div>

          <div class="page-wrapper" id="page31" data-order="31">
              <img src={{ public_path('/img/books/page31/extra/no-avatars.jpg')}} class="page-img modal-image31">
              <div><div id="text-page31" contenteditable="true" class="page-text large">
 <div><br></div>
 <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Construir recuerdos</font></font></div>
 </div></div>


                <div class="page-wrapper" id="page32" data-order="32">
   <img src={{ public_path('/img/books/page32/extra/two-avatars.jpg')}} class="page-img modal-image32">
   <div class="giver-img">
       <img src={{ public_path('/img/books/page32/woman/giver-base.png')}} class="extra modal-image32" style="z-index: 2;">
       <img id="eyesfemale32" src={{ public_path('/img/books/page32/woman/eyes/brown.png')}} class="extra modal-image32" style="z-index: 2;">
       <img id="hairfemale32" src={{ public_path('/img/books/page32/woman/hair/brown/long1.png')}} class="extra modal-image32" style="z-index: 2;">
       <img id="glassesfemale32" src={{ public_path('/img/books/page32/woman/glasses/glasses.png')}} class="extra modal-image32" style="z-index: 2;">
   </div>
   <div class="receiver-img">
       <img src={{ public_path('/img/books/page32/man/receiver-base.png')}} class="extra modal-image32" style="z-index: 1;">
       <img id="eyesmale32" src={{ public_path('/img/books/page32/man/eyes/brown.png')}} class="extra modal-image32" style="z-index: 1;">
       <img id="hairmale32" src={{ public_path('/img/books/page32/man/hair/brown/half1.png')}} class="extra modal-image32" style="z-index: 1;">
       <img id="beardmale32" src={{ public_path('/img/books/page32/man/beard/brown/brown1.png')}} class="extra modal-image32" style="z-index: 1;">
       <img id="glassesmale32" src={{ public_path('/img/books/page32/man/glasses/glasses.png')}} class="extra modal-image32" style="z-index: 1;">
   </div>
   <div><div id="text-page32" contenteditable="true" class="page-text large">
       <div><br></div>
       <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tomarnos fotos</font></font></div>
       </div></div>

                <div class="page-wrapper" id="page33" data-order="33">
   <img src={{ public_path('/img/books/page33/extra/no-avatars.jpg')}} class="page-img modal-image33">
   <div><div id="text-page33" contenteditable="true" class="page-text large" style=">
       <div><br></div>
       <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontrar el camino juntos</font></font></div>
       </div></div>

       <div class="page-wrapper" id="page34" data-order="34">
 <img src={{ public_path('/img/books/page34/extra/no-avatars(1).jpg')}} class="page-img modal-image34">
 <div><div id="text-page34" contenteditable="true" class="page-text large">
     <div><br></div>
     <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos hasta el fin del mundo</font></font></div>
     </div></div>

     <div class="page-wrapper" id="page35" data-order="35">
         <img src={{ public_path('/img/books/page35/extra/no-avatars.jpg')}} class="page-img modal-image35">
         <div><div id="text-page35" contenteditable="true" class="page-text large">
             <div><br></div>
             <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para una pelicula</font></font></div>
             </div></div>

             <div class="page-wrapper" id="page36" data-order="36">
<img src={{ public_path('/img/books/page36/extra/no-avatars(1).jpg')}} class="page-img modal-image36">
<div><div id="text-page36" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No ver netflix solos</font></font></div>
    </div></div>

    <div class="page-wrapper" id="page37" data-order="37">
        <img src={{ public_path('/img/books/page37/extra/two-avatars.jpg')}} class="page-img modal-image37">
        <div class="giver-img">
  <img src={{ public_path('/img/books/page37/woman/giver-base.png')}} class="extra modal-image37" style="z-index: 2;">
  <img id="eyesfemale37" src={{ public_path('/img/books/page37/woman/eyes/brown.png')}} class="extra modal-image37" style="z-index: 2;">
  <img id="hairfemale37" src={{ public_path('/img/books/page37/woman/hair/brown/long1.png')}} class="extra modal-image37" style="z-index: 2;">
  <img id="glassesfemale37" src={{ public_path('/img/books/page37/woman/glasses/glasses.png')}} class="extra modal-image37" style="z-index: 2;">
        </div>
        <div class="receiver-img">
  <img src={{ public_path('/img/books/page37/man/receiver-base.png')}} class="extra modal-image37" style="z-index: 1;">
  <img id="eyesmale37" src={{ public_path('/img/books/page37/man/eyes/brown.png')}} class="extra modal-image37" style="z-index: 1;">
  <img id="hairmale37" src={{ public_path('/img/books/page37/man/hair/brown/half1.png')}} class="extra modal-image37" style="z-index: 1;">
  <img id="beardmale37" src={{ public_path('/img/books/page37/man/beard/brown/brown1.png')}} class="extra modal-image37" style="z-index: 1;">
  <img id="glassesmale37" src={{ public_path('/img/books/page37/man/glasses/glasses.png')}} class="extra modal-image37" style="z-index: 1;">
        </div>
        <div><div id="text-page37" contenteditable="true" class="page-text large">
  <div><br></div>
  <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta lo que tenemos</font></font></div>
  </div></div>
    <div class="extra">
                    <img src="/img/books/page37/extra/extra-1.png" class="extra modal-image37" style="z-index: 3;">
                </div>

  <div class="page-wrapper" id="page38" data-order="38">
      <img src={{ public_path('/img/books/page38/extra/no-avatars.jpg')}} class="page-img modal-image38">
      <div><div id="text-page38" contenteditable="true" class="page-text large">
          <div><br></div>
          <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para masaje</font></font></div>
          </div></div>

          <div class="page-wrapper" id="page39" data-order="39">
              <img src={{ public_path('/img/books/page39/extra/only-receiver.jpg')}} class="page-img modal-image39">
              <div class="giver-img">
 <img src={{ public_path('/img/books/page39/man/receiver-base.png')}} class="extra modal-image39" style="z-index: 2;">
 <img id="eyesmale39" src={{ public_path('/img/books/page39/man/eyes/brown.png')}} class="extra modal-image39" style="z-index: 2;">
 <img id="hairmale39" src={{ public_path('/img/books/page39/man/hair/brown/half1.png')}} class="extra modal-image39" style="z-index: 2;">
 <img id="beardmale39" src={{ public_path('/img/books/page39/man/beard/brown/brown1.png')}} class="extra modal-image39" style="z-index: 2;">
 <img id="glassesmale39" src={{ public_path('/img/books/page39/man/glasses/glasses.png')}} class="extra modal-image39" style="z-index: 2;">
              </div>
              <div><div id="text-page39" contenteditable="true" class="page-text large">
 <div><br></div>
 <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te amo de pies a cabeza</font></font></div>
 </div></div>

 <div class="page-wrapper" id="page40" data-order="40">
     <img src={{ public_path('/img/books/page40/extra/no-avatars.jpg')}} class="page-img modal-image40">
     <div><div id="text-page40" contenteditable="true" class="page-text large">
         <div><br></div>
         <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prometeme que siempre estaremos juntos sin importar lo que pase</font></font></div>
         </div></div>

         <div class="page-wrapper" id="page41" data-order="41">
   <img src={{ public_path('/img/books/page41/extra/no-avatars(1).jpg')}} class="page-img modal-image41">
   <div><div id="text-page41" contenteditable="true" class="page-text large">
       <div><br></div>
       <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi espacio</font></font></div>
       </div></div>

       <div class="page-wrapper" id="page42" data-order="42">
           <img src={{ public_path('/img/books/page42/extra/no-avatars.jpg')}} class="page-img modal-image42">
           <div><div id="text-page42" contenteditable="true" class="page-text large">
               <div><br></div>
               <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiero envejecer contigo</font></font></div>
               </div></div>

               <div class="page-wrapper" id="page43" data-order="43">
  <img src={{ public_path('/img/books/page43/extra/no-avatars(1).jpg')}} class="page-img modal-image43">
  <div><div id="text-page43" contenteditable="true" class="page-text large">
      <div><br></div>
      <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi mas hermoso descubrimiento</font></font></div>
      </div></div>

      <div class="page-wrapper" id="page44" data-order="44">
<img src={{ public_path('/img/books/page44/extra/no-avatars.jpg')}} class="page-img modal-image44">
<div><div id="text-page44" contenteditable="true" class="page-text large">
    <div><br></div>
    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y la luz de mi vida</font></font></div>
    </div></div>

    <div class="page-wrapper" id="page45" data-order="45">
        <img src={{ public_path('/img/books/page45/extra/two-avatars.jpg')}} class="page-img modal-image45">
    <div class="giver-img">
        <img src={{ public_path('/img/books/page45/woman/giver-woman-base.png')}} class="extra modal-image45" style="z-index: 1;">
        <img id="eyesfemale45" src={{ public_path('/img/books/page45/woman/eyes/brown.png')}} class="extra modal-image45" style="z-index: 1;">
        <img id="hairfemale45" src={{ public_path('/img/books/page45/woman/hair/brown/long1.png')}} class="extra modal-image45" style="z-index: 1;">
        <img id="glassesfemale45" src={{ public_path('/img/books/page45/woman/glasses/glasses.png')}} class="extra modal-image45" style="z-index: 1;">
    </div>
    <div class="receiver-img">
        <img src={{ public_path('/img/books/page45/man/receiver-man-base.png')}} class="extra modal-image45" style="z-index: 2;">
        <img id="eyesmale45"src={{ public_path('/img/books/page45/man/eyes/brown.png')}} class="extra modal-image45" style="z-index: 2;">
        <img id="hairmale45"src={{ public_path('/img/books/page45/man/hair/brown/half1.png')}} class="extra modal-image45" style="z-index: 2;">
        <img id="beardmale45" src={{ public_path('/img/books/page45/man/beard/brown/brown1.png')}} class="extra modal-image45" style="z-index: 2;">
        <img id="glassesmale45" src={{ public_path('/img/books/page45/man/glasses/glasses.png')}} class="extra modal-image45" style="z-index: 2;">
    </div>
    <div class="extras">
        <img src={{ public_path('/img/books/page45/extra/extra-1.png')}} class="extra modal-image45" style="z-index: 3;">
    </div>
    <div><div id="text-page45" contenteditable="true" class="page-text large">
        <div><br></div>
        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TE AMO</font></font></div>
        </div></div>
</div>
</div>
</body>
</html>





