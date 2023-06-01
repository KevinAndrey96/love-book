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

        .tittle-wrapper {
            position: absolute; top: 10px;
             left: 20% !important;
             display: flex;
             justify-content: center !important;
             flex-direction: column;
             font-size: 1vw;
             font-family: 'Lato', sans-serif;
             text-align: center !important;
            z-index:6 !important;
        }





        h1 {
            font-size: 70px !important;
        }

        #text-page2{
            position:absolute; text-align:center; left: 8%;  top: 15px; right: 5%; display: flex; justify-content: center !important;  flex-direction: column; align-items:center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page3{
            position:absolute; text-align:center; top: 15px; left: 8%; right: 5%; display: flex; justify-content: center !important; flex-direction: column; align-items:center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page4{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page5{
            position:absolute; text-align:center; top: 15px; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page6{
            position:absolute; text-align:center; top:-10px; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page7{
            position:absolute; text-align:center; top: -10px; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page8{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page9{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page10{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page11{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page12{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page13{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page14{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page15{
            position:absolute; text-align:center; top:120px !important;  left:5px; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page16{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page17{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page18{
            position:absolute; text-align:center; top:7px !important;   display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page19{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;
        }

        #text-page20{
            position:absolute; text-align:center; top:20px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 6;        }

        #text-page21{
            position:absolute; text-align:center; top: 450px;  right: 150px; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: '6ato', sans-serif; z-index: 3; margin-top: 300px !important;
        }

        #text-page22{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page23{
            position:absolute; text-align:center; top:10px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page24{
            position:absolute; text-align:center; top: 40%; left: 18%;  display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page25{
            position:absolute; text-align:center; top:10px !important; left: 5%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page26{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page27{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page28{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page29{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page30{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;;
        }

        #text-page31{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page32{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page33{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page34{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page35{
            position:absolute; text-align:center; top:1px !important; left: 10%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page36{
            position:absolute; text-align:center; top:1px !important; left: 10%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }


        #text-page37{
            position:absolute; text-align:center; top:1px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;}

        #text-page38{
            position:absolute; text-align:center; top:20px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page39{
            position:absolute; text-align:center; top:-5px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page40{
            position:absolute; text-align:center; top:250px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page41{
            position:absolute; text-align:center; top:25px !important; left: 180px !important; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page42{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;
        }

        #text-page43{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page44{
            position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3;        }

        #text-page45{
                position:absolute; text-align:center; top:15px !important; left: 8%; right: 5%; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 60px !important; font-family: 'Lato', sans-serif; z-index: 3 !important;}









    </style>
</head>
<body><div class="row">
            
         <div class="col-12 pages">
            <div class="page-wrapper" id="first-page-wrapper">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/extra/two-avatars.jpg" class="page-img img-fluid">
                    <div class="giver-img">
                      <img src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/woman/giver-base.png" class="extra" style="z-index: 1;">
                      <img id="eyesfemalee3" src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/woman/eyes/brown.png" class="extra" style="z-index: 1;">
                      <img id="hairfemalee3" src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/woman/hair/very-light/pickedup.png" class="extra" style="z-index: 1;">
                      <img id="glassesfemalee3" src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/woman/glasses/glasses.png" class="extra" style="z-index: 2; display: none;">
                    </div>
                    <div class="receiver-img">
                      <img src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/man/receiver-base.png" class="extra" style="z-index: 2;">
                      <img id="eyesmalee3" src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/man/eyes/brown.png" onclick="selectContainerContent('frontpage4')" class="extra" style="z-index: 3;">
                      <img id="hairmalee3" src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/man/hair/grey/long2.png" class="extra" style="z-index: 2;">
                      <img id="beardd3" src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/man/beard/light/light1.png" class="extra" style="z-index: 2; display: block;">
                      <img id="glassesmalee3" src="C:\xampp\htdocs\Love-Book\public\img/frontpage/frontpage4/man/glasses/glasses.png" class="extra" style="z-index: 2; display: none;">
                    </div>
                    <div class="tittle-wrapper text-center" style="z-index: 100;">
                      <h1 id="names3" title="Esta será tu portada"> carlos2 y xsxs</h1>
                    </div>
                </div>

    <div class="page-wrapper" id="page2" data-order="2">
        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page2/extra/two-avatars.jpg" id="page-image" class="page-img modal-image1">
        <div class="giver-img">
            <img src="C:\xampp\htdocs\Love-Book\public\img/books/page2/woman/giver-base.png" class="extra modal-image1" style="z-index: 2;">
            <img id="eyesfemale2" src="C:\xampp\htdocs\Love-Book\public\img/books/page2/woman/eyes/brown.png" class="extra modal-image1" style="z-index: 2;">
            <img id="hairfemale2" src="C:\xampp\htdocs\Love-Book\public\img/books/page2/woman/hair/very-light/pickedup.png" class="extra modal-image1" style="z-index: 2;">
            <img id="glassesfemale2" src="C:\xampp\htdocs\Love-Book\public\img/books/page2/woman/glasses/glasses.png" class="extra modal-image1" style="z-index: 2; display: none;">
        </div>
        <div class="receiver-img">
            <img src="C:\xampp\htdocs\Love-Book\public\img/books/page2/man/receiver-base.png" class="extra modal-image1" style="z-index: 1;">
            <img id="eyesmale2" src="C:\xampp\htdocs\Love-Book\public\img/books/page2/man/eyes/brown.png" class="extra modal-image1" style="z-index: 1;">
            <img id="hairmale2" src="C:\xampp\htdocs\Love-Book\public\img/books/page2/man/hair/grey/long2.png" class="extra modal-image1" style="z-index: 1;">
            <img id="beardmale2" src="C:\xampp\htdocs\Love-Book\public\img/books/page2/man/beard/light/light1.png" class="extra modal-image1" style="z-index: 1; display: block;">
            <img id="glassesmale2" src="C:\xampp\htdocs\Love-Book\public\img/books/page2/man/glasses/glasses.png" class="extra modal-image1" style="z-index: 1; display: none;">
        </div>
        <div>
            <div id="text-page2" contenteditable="true" class="page-text large">
                <div><br></div>
                <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esta es nuestra historia</font></font></div>
            </div>
        </div>
        <div class="extras">
            <img src="C:\xampp\htdocs\Love-Book\public\img/books/page2/extra/extra-1.png" class="extra modal-image1" style="z-index: 3;">
        </div>

                
                
                
                
            </div>



                <div class="page-wrapper" id="page3" data-order="3">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page3/extra/two-avatars(1).jpg" class="page-img modal-image3">
                <div class="giver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page3/woman/giver-base.png" class="extra modal-image3" style="z-index: 2;">
                    <img id="eyesfemale3" src="C:\xampp\htdocs\Love-Book\public\img/books/page3/woman/eyes/brown.png" class="extra modal-image3" style="z-index: 2;">
                    <img id="hairfemale3" src="C:\xampp\htdocs\Love-Book\public\img/books/page3/woman/hair/very-light/pickedup.png" class="extra modal-image3" style="z-index: 2;">
                    <img id="glassesfemale3" src="C:\xampp\htdocs\Love-Book\public\img/books/page3/woman/glasses/glasses.png" class="extra modal-image3" style="z-index: 2; display: none;">
                </div>
                <div class="receiver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page3/man/receiver-base.png" class="extra modal-image3" style="z-index: 1;">
                    <img id="eyesmale3" src="C:\xampp\htdocs\Love-Book\public\img/books/page3/man/eyes/brown.png" class="extra modal-image3" style="z-index: 1;">
                    <img id="hairmale3" src="C:\xampp\htdocs\Love-Book\public\img/books/page3/man/hair/grey/long2.png" class="extra modal-image3" style="z-index: 1;">
                    <img id="beardmale3" src="C:\xampp\htdocs\Love-Book\public\img/books/page3/man/beard/light/light1.png" class="extra modal-image3" style="z-index: 1; display: block;">
                    <img id="glassesmale3" src="C:\xampp\htdocs\Love-Book\public\img/books/page3/man/glasses/glasses.png" class="extra modal-image3" style="z-index: 1; display: none;">
                </div>
                <div><div id="text-page3" contenteditable="true" class="page-text large">
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fue amor a primera vista</font></font></div>
                    </div></div>
                    
                    
                    
                    
            </div>



                <div class="page-wrapper" id="page4" data-order="4">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page4/extra/two-avatars.jpg" class="page-img modal-image4">
                <div class="giver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page4/woman/giver-base.png" class="extra modal-image4" style="z-index: 1;">
                    <img id="eyesfemale4" src="C:\xampp\htdocs\Love-Book\public\img/books/page4/woman/eyes/brown.png" class="extra modal-image4" style="z-index: 1;">
                    <img id="hairfemale4" src="C:\xampp\htdocs\Love-Book\public\img/books/page4/woman/hair/very-light/pickedup.png" class="extra modal-image4" style="z-index: 1;">
                    <img id="glassesfemale4" src="C:\xampp\htdocs\Love-Book\public\img/books/page4/woman/glasses/glasses.png" class="extra modal-image4" style="z-index: 1; display: none;">
                </div>
                <div class="receiver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page4/man/giver-base.png" class="extra modal-image4" style="z-index: 2;">
                    <img id="eyesmale4" src="C:\xampp\htdocs\Love-Book\public\img/books/page4/man/eyes/brown.png" class="extra modal-image4" style="z-index: 2;">
                    <img id="hairmale4" src="C:\xampp\htdocs\Love-Book\public\img/books/page4/man/hair/grey/long2.png" class="extra modal-image4" style="z-index: 2;">
                    <img id="beardmale4" src="C:\xampp\htdocs\Love-Book\public\img/books/page4/man/beard/light/light1.png" class="extra modal-image4" style="z-index: 2; display: block;">
                    <img id="glassesmale4" src="C:\xampp\htdocs\Love-Book\public\img/books/page4/man/glasses/glasses.png" class="extra modal-image4" style="z-index: 2; display: none;">
                </div>
                <div><div id="text-page4" contenteditable="true" class="page-text large">
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aun recuerdo nuestro primer beso</font></font></div>
                    </div></div>
                    
                    
                    
                    
            </div>



                <div class="page-wrapper" id="page5" data-order="5">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page5/extra/no-avatars.jpg" class="page-img modal-image5">
                    <div><div id="text-page5" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo el mundo se ve distinto</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page6" data-order="6">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page6/extra/two-avatars.jpg" class="page-img modal-image6">
                <div class="giver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page6/woman/giver-base.png" class="extra modal-image6" style="z-index: 1;">
                    <img id="eyesfemale6" src="C:\xampp\htdocs\Love-Book\public\img/books/page6/woman/eyes/brown.png" class="extra modal-image6" style="z-index: 1;">
                    <img id="hairfemale6" src="C:\xampp\htdocs\Love-Book\public\img/books/page6/woman/hair/very-light/pickedup.png" class="extra modal-image6" style="z-index: 1;">
                    <img id="glassesfemale6" src="C:\xampp\htdocs\Love-Book\public\img/books/page6/woman/glasses/glasses.png" class="extra modal-image6" style="z-index: 1; display: none;">
                </div>
                <div class="receiver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page6/man/receiver-base.png" class="extra modal-image6" style="z-index: 2;">
                    <img id="eyesmale6" src="C:\xampp\htdocs\Love-Book\public\img/books/page6/man/eyes/brown.png" class="extra modal-image6" style="z-index: 2;">
                    <img id="hairmale6" src="C:\xampp\htdocs\Love-Book\public\img/books/page6/man/hair/grey/long2.png" class="extra modal-image6" style="z-index: 2;">
                    <img id="beardmale6" src="C:\xampp\htdocs\Love-Book\public\img/books/page6/man/beard/light/light1.png" class="extra modal-image6" style="z-index: 2; display: block;">
                    <img id="glassesmale6" src="C:\xampp\htdocs\Love-Book\public\img/books/page6/man/glasses/glasses.png" class="extra modal-image6" style="z-index: 2; display: none;">
                </div>
                <div><div id="text-page6" contenteditable="true" class="page-text large">
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y a ti es lo unico que necesito en<br> ese mundo</font></font></div>
                    </div></div>
                    
                    
                    
                    
            </div>



                <div class="page-wrapper" id="page7" data-order="7">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page7/extra/no-avatars.jpg" class="page-img modal-image7">
                    <div>
                        <div id="text-page7" contenteditable="true" class="page-text large">
                            <div><br></div>
                            <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres la primer persona a la que<br> llamo</font></font></div>
                        </div>
                    </div>
                    
                
                
                
            </div>





                <div class="page-wrapper" id="page8" data-order="8">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page8/extra/two-avatars.jpg" class="page-img modal-image8">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page8/woman/giver-base.png" class="extra modal-image8" style="z-index: 1;">
                        <img id="eyesfemale8" src="C:\xampp\htdocs\Love-Book\public\img/books/page8/woman/eyes/brown.png" class="extra modal-image8" style="z-index: 1;">
                        <img id="hairfemale8" src="C:\xampp\htdocs\Love-Book\public\img/books/page8/woman/hair/very-light/pickedup.png" class="extra modal-image8" style="z-index: 1;">
                        <img id="glassesfemale8" src="C:\xampp\htdocs\Love-Book\public\img/books/page8/woman/glasses/glasses.png" class="extra modal-image8" style="z-index: 1; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page8/man/receiver-base.png" class="extra modal-image8" style="z-index: 2;">
                        <img id="eyesmale8" src="C:\xampp\htdocs\Love-Book\public\img/books/page8/man/eyes/brown.png" class="extra modal-image8" style="z-index: 2;">
                        <img id="hairmale8" src="C:\xampp\htdocs\Love-Book\public\img/books/page8/man/hair/grey/long2.png" class="extra modal-image8" style="z-index: 2;">
                        <img id="beardmale8" src="C:\xampp\htdocs\Love-Book\public\img/books/page8/man/beard/light/light1.png" class="extra modal-image8" style="z-index: 2; display: block;">
                        <img id="glassesmale8" src="C:\xampp\htdocs\Love-Book\public\img/books/page8/man/glasses/glasses.png" class="extra modal-image8" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page8" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Podemos hablar por horas...</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page9" data-order="9">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page9/extra/no-avatars.jpg" class="page-img modal-image9">
                    <div><div id="text-page9" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contigo siempre sonrio</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page10" data-order="10">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page10/extra/two-avatars.jpg" class="page-img modal-image10">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page10/man/receiver-base.png" class="extra modal-image10" style="z-index: 1;">
                        <img id="eyesmale10" src="C:\xampp\htdocs\Love-Book\public\img/books/page10/man/eyes/brown.png" class="extra modal-image10" style="z-index: 1;">
                        <img id="hairmale10" src="C:\xampp\htdocs\Love-Book\public\img/books/page10/man/hair/grey/long2.png" class="extra modal-image10" style="z-index: 1;">
                        <img id="beardmale10" src="C:\xampp\htdocs\Love-Book\public\img/books/page10/man/beard/light/light1.png" class="extra modal-image10" style="z-index: 1; display: block;">
                        <img id="glassesmale10" src="C:\xampp\htdocs\Love-Book\public\img/books/page10/man/glasses/glasses.png" class="extra modal-image10" style="z-index: 1; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page10/woman/giver-base.png" class="extra modal-image10" style="z-index: 2;">
                        <img id="eyesfemale10" src="C:\xampp\htdocs\Love-Book\public\img/books/page10/woman/eyes/brown.png" class="extra modal-image10" style="z-index: 2;">
                        <img id="hairfemale10" src="C:\xampp\htdocs\Love-Book\public\img/books/page10/woman/hair/very-light/pickedup.png" class="extra modal-image10" style="z-index: 2;">
                        <img id="glassesfemale10" src="C:\xampp\htdocs\Love-Book\public\img/books/page10/woman/glasses/glasses.png" class="extra modal-image10" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page10" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me haces muy feliz</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page11" data-order="11">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page11/extra/no-avatars.jpg" class="page-img modal-image11">
                    <div><div id="text-page11" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gracias por ayudarme a <br>sostenerme</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page12" data-order="12">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page12/extra/no-avatars(1).jpg" class="page-img modal-image12">
                    <div><div id="text-page12" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu cargas mi bateria</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page13" data-order="13">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page13/extra/no-avatars.jpg" class="page-img modal-image13">
                    <div><div id="text-page13" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta cuando te enojas</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page14" data-order="14">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page14/extra/two-avatars.jpg" class="page-img modal-image14">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page14/woman/giver-base.png" class="extra modal-image14" style="z-index: 1;">
                        <img id="eyesfemale14" src="C:\xampp\htdocs\Love-Book\public\img/books/page14/woman/eyes/brown.png" class="extra modal-image14" style="z-index: 1;">
                        <img id="hairfemale14" src="C:\xampp\htdocs\Love-Book\public\img/books/page14/woman/hair/very-light/pickedup.png" class="extra modal-image14" style="z-index: 1;">
                        <img id="glassesfemale14" src="C:\xampp\htdocs\Love-Book\public\img/books/page14/woman/glasses/glasses.png" class="extra modal-image14" style="z-index: 1; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page14/man/receiver-base.png" class="extra modal-image14" style="z-index: 2;">
                        <img id="eyesmale14" src="C:\xampp\htdocs\Love-Book\public\img/books/page14/man/eyes/brown.png" class="extra modal-image14" style="z-index: 2;">
                        <img id="hairmale14" src="C:\xampp\htdocs\Love-Book\public\img/books/page14/man/hair/grey/long2.png" class="extra modal-image14" style="z-index: 2;">
                        <img id="beardmale14" src="C:\xampp\htdocs\Love-Book\public\img/books/page14/man/beard/light/light1.png" class="extra modal-image14" style="z-index: 2; display: block;">
                        <img id="glassesmale14" src="C:\xampp\htdocs\Love-Book\public\img/books/page14/man/glasses/glasses.png" class="extra modal-image14" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page14" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Aun me amas verdad? <br>Claro que si</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page15" data-order="15">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page15/extra/no-avatars.jpg" class="page-img modal-image15">
                    <div><div id="text-page15" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta <br>cuando</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page16" data-order="16">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page16/extra/two-avatars.jpg" class="page-img moda-image16">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page16/man/receiver-base.png" class="extra modal-image16" style="z-index: 1;">
                        <img id="eyesmale16" src="C:\xampp\htdocs\Love-Book\public\img/books/page16/man/eyes/brown.png" class="extra modal-image16" style="z-index: 1;">
                        <img id="hairmale16" src="C:\xampp\htdocs\Love-Book\public\img/books/page16/man/hair/grey/long2.png" class="extra modal-image16" style="z-index: 1;">
                        <img id="beardmale16" src="C:\xampp\htdocs\Love-Book\public\img/books/page16/man/beard/light/light1.png" class="extra modal-image16" style="z-index: 1; display: block;">
                        <img id="glassesmale16" src="C:\xampp\htdocs\Love-Book\public\img/books/page16/man/glasses/glasses.png" class="extra modal-image16" style="z-index: 1; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page16/woman/giver-base.png" class="extra modal-image16" style="z-index: 2;">
                        <img id="eyesfemale16" src="C:\xampp\htdocs\Love-Book\public\img/books/page16/woman/eyes/brown.png" class="extra modal-image16" style="z-index: 2;">
                        <img id="hairfemale16" src="C:\xampp\htdocs\Love-Book\public\img/books/page16/woman/hair/very-light/pickedup.png" class="extra modal-image16" style="z-index: 2;">
                        <img id="glassesfemale16" src="C:\xampp\htdocs\Love-Book\public\img/books/page16/woman/glasses/glasses.png" class="extra modal-image16" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page16" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos abrazamos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page17" data-order="17">
                     <img src="C:\xampp\htdocs\Love-Book\public\img/books/page17/extra/no-avatars.jpg" class="page-img modal-image17">
                     <div><div id="text-page17" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando soñamos juntos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page18" data-order="18">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page18/extra/two-avatars.jpg" class="page-img modal-image18">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page18/woman/giver-base.png" class="extra modal-image18" style="z-index: 2;">
                        <img id="eyesfemale18" src="C:\xampp\htdocs\Love-Book\public\img/books/page18/woman/eyes/brown.png" class="extra modal-image18" style="z-index: 2;">
                        <img id="hairfemale18" src="C:\xampp\htdocs\Love-Book\public\img/books/page18/woman/hair/very-light/pickedup.png" class="extra modal-image18" style="z-index: 2;">
                        <img id="glassesfemale18" src="C:\xampp\htdocs\Love-Book\public\img/books/page18/woman/glasses/glasses.png" class="extra modal-image18" style="z-index: 2; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page18/man/receiver-base.png" class="extra modal-image18" style="z-index: 1;">
                        <img id="eyesmale18" src="C:\xampp\htdocs\Love-Book\public\img/books/page18/man/eyes/brown.png" class="extra modal-image18" style="z-index: 1;">
                        <img id="hairmale18" src="C:\xampp\htdocs\Love-Book\public\img/books/page18/man/hair/grey/long2.png" class="extra modal-image18" style="z-index: 1;">
                        <img id="beardmale18" src="C:\xampp\htdocs\Love-Book\public\img/books/page18/man/beard/light/light1.png" class="extra modal-image18" style="z-index: 1; display: block;">
                        <img id="glassesmale18" src="C:\xampp\htdocs\Love-Book\public\img/books/page18/man/glasses/glasses.png" class="extra modal-image18" style="z-index: 1; display: none;">
                    </div>
                    <div><div id="text-page18" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos <br>entendemos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page19" data-order="19">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page19/extra/no-avatars.jpg" class="page-img modal-image19">
                    <div><div id="text-page19" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuando comemos juntos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>


                <div class="page-wrapper" id="page20" data-order="20">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page20/extra/no-avatars(1).jpg" class="page-img modal-image20">
                    <div><div id="text-page20" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes en las nubes</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>



                <div class="page-wrapper" id="page21" data-order="21">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page21/extra/two-avatars.jpg" class="page-img modal-image21">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page21/woman/giver-base.png" class="extra modal-image21" style="z-index: 1;">
                        <img id="eyesfemale21" src="C:\xampp\htdocs\Love-Book\public\img/books/page21/woman/eyes/brown.png" class="extra modal-image21" style="z-index: 1;">
                        <img id="hairfemale21" src="C:\xampp\htdocs\Love-Book\public\img/books/page21/woman/hair/very-light/pickedup.png" class="extra modal-image21" style="z-index: 1;">
                        <img id="glassesfemale21" src="C:\xampp\htdocs\Love-Book\public\img/books/page21/woman/glasses/glasses.png" class="extra modal-image21" style="z-index: 1; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page21/man/receiver-base.png" class="extra modal-image21" style="z-index: 2;">
                        <img id="eyesmale21" src="C:\xampp\htdocs\Love-Book\public\img/books/page21/man/eyes/brown.png" class="extra modal-image21" style="z-index: 2;">
                        <img id="hairmale21" src="C:\xampp\htdocs\Love-Book\public\img/books/page21/man/hair/grey/long2.png" class="extra modal-image21" style="z-index: 2;">
                        <img id="beardmale21" src="C:\xampp\htdocs\Love-Book\public\img/books/page21/man/beard/light/light1.png" class="extra modal-image21" style="z-index: 2; display: block;">
                        <img id="glassesmale21" src="C:\xampp\htdocs\Love-Book\public\img/books/page21/man/glasses/glasses.png" class="extra modal-image21" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page21" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo dormir contigo</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>



                <div class="page-wrapper" id="page22" data-order="22">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page22/extra/no-avatars.jpg" class="page-img modal-image22">
                    <div id="text-page22" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tener citas...</font></font></div>
                    </div>
                    
                    
                    
                    
                </div>




                <div class="page-wrapper" id="page23" data-order="23">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page23/extra/two-avatars.jpg" class="page-img modal-image23">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page23/woman/giver-base.png" class="extra modal-image23" style="z-index: 1;">
                        <img id="eyesfemale23" src="C:\xampp\htdocs\Love-Book\public\img/books/page23/woman/eyes/brown.png" class="extra modal-image23" style="z-index: 1;">
                        <img id="hairfemale23" src="C:\xampp\htdocs\Love-Book\public\img/books/page23/woman/hair/very-light/pickedup.png" class="extra modal-image23" style="z-index: 1;">
                        <img id="glassesfemale23" src="C:\xampp\htdocs\Love-Book\public\img/books/page23/woman/glasses/glasses.png" class="extra modal-image23" style="z-index: 1; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page23/man/receiver-base.png" class="extra modal-image23" style="z-index: 2;">
                        <img id="eyesmale23" src="C:\xampp\htdocs\Love-Book\public\img/books/page23/man/eyes/brown.png" class="extra modal-image23" style="z-index: 2;">
                        <img id="hairmale23" src="C:\xampp\htdocs\Love-Book\public\img/books/page23/man/hair/grey/long2.png" class="extra modal-image23" style="z-index: 2;">
                        <img id="beardmale23" src="C:\xampp\htdocs\Love-Book\public\img/books/page23/man/beard/light/light1.png" class="extra modal-image23" style="z-index: 2; display: block;">
                        <img id="glassesmale23" src="C:\xampp\htdocs\Love-Book\public\img/books/page23/man/glasses/glasses.png" class="extra modal-image23" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page23" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cocinar juntos</font></font></div>
                        </div></div>
                        
                        
                        
                <div class="extras">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page23/extra/extra-1.png" class="extra modal-image23" style="z-index: 3;">
                    
                </div>

                <div class="page-wrapper" id="page24" data-order="24">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page24/extra/no-avatars.jpg" class="page-img modal-image24">
                    <div id="text-page24" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para la cena</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page25" data-order="25">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page25/extra/no-avatars(1).jpg" class="page-img modal-image25">
                    <div><div id="text-page25" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empezar la mañana a nuestra <br>manera</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page26" data-order="26">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page26/extra/only-giver.jpg" class="page-img modal-image26">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page26/woman/giver-base.png" class="extra modal-image26" style="z-index: 1;">
                        <img id="eyesfemale26" src="C:\xampp\htdocs\Love-Book\public\img/books/page26/woman/eyes/brown.png" class="extra modal-image26" style="z-index: 1;">
                        <img id="hairfemale26" src="C:\xampp\htdocs\Love-Book\public\img/books/page26/woman/hair/very-light/pickedup.png" class="extra modal-image26" style="z-index: 1;">
                    </div>
                    <div><div id="text-page26" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eres tan linda</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page27" data-order="27">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page27/extra/no-avatars.jpg" class="page-img modal-image27">
                    <div><div id="text-page27" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me tienes loco</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>



                <div class="page-wrapper" id="page28" data-order="28">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page28/extra/no-avatars(1).jpg" class="page-img modal-image28">
                    <div><div id="text-page28" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos somos una pieza</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>



                <div class="page-wrapper" id="page29" data-order="29">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page29/extra/no-avatars.jpg" class="page-img modal-image29">
                    <div><div id="text-page29" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te doy mi medio panqueque</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page30" data-order="30">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page30/extra/no-avatars(1).jpg" class="page-img modal-image30">
                    <div><div id="text-page30" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amo nuestros momentos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page31" data-order="31">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page31/extra/no-avatars.jpg" class="page-img modal-image31">
                    <div><div id="text-page31" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Construir recuerdos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page32" data-order="32">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page32/extra/two-avatars.jpg" class="page-img modal-image32">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page32/man/receiver-base.png" class="extra modal-image32" style="z-index: 1;">
                        <img id="eyesmale32" src="C:\xampp\htdocs\Love-Book\public\img/books/page32/man/eyes/brown.png" class="extra modal-image32" style="z-index: 1;">
                        <img id="hairmale32" src="C:\xampp\htdocs\Love-Book\public\img/books/page32/man/hair/grey/long2.png" class="extra modal-image32" style="z-index: 1;">
                        <img id="beardmale32" src="C:\xampp\htdocs\Love-Book\public\img/books/page32/man/beard/light/light1.png" class="extra modal-image32" style="z-index: 1; display: block;">
                        <img id="glassesmale32" src="C:\xampp\htdocs\Love-Book\public\img/books/page32/man/glasses/glasses.png" class="extra modal-image32" style="z-index: 1; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page32/woman/giver-base.png" class="extra modal-image32" style="z-index: 2;">
                        <img id="eyesfemale32" src="C:\xampp\htdocs\Love-Book\public\img/books/page32/woman/eyes/brown.png" class="extra modal-image32" style="z-index: 2;">
                        <img id="hairfemale32" src="C:\xampp\htdocs\Love-Book\public\img/books/page32/woman/hair/very-light/pickedup.png" class="extra modal-image32" style="z-index: 2;">
                        <img id="glassesfemale32" src="C:\xampp\htdocs\Love-Book\public\img/books/page32/woman/glasses/glasses.png" class="extra modal-image32" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page32" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tomarnos fotos</font></font></div>
                        </div></div>
                        
                        
                        
                <div class="extras">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page32/extra/extra-1.png" class="extra modal-image32" style="z-index: 3;">
                </div>
                
            </div>

                <div class="page-wrapper" id="page33" data-order="33">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page33/extra/no-avatars.jpg" class="page-img modal-image33">
                    <div><div id="text-page33" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontrar el camino juntos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page34" data-order="34">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page34/extra/no-avatars(1).jpg" class="page-img modal-image34">
                    <div><div id="text-page34" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unidos hasta el fin del mundo</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page35" data-order="35">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page35/extra/no-avatars.jpg" class="page-img modal-image35">
                    <div><div id="text-page35" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para una pelicula</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>




                <div class="page-wrapper" id="page36" data-order="36">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page36/extra/no-avatars(1).jpg" class="page-img modal-image36">
                    <div><div id="text-page36" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No ver netflix solos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page37" data-order="37">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page37/extra/two-avatars.jpg" class="page-img modal-image37">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page37/woman/giver-base.png" class="extra modal-image37" style="z-index: 2;">
                        <img id="eyesfemale37" src="img/books/page37/woman/eyes/brown.png" class="extra modal-image37" style="z-index: 2;">
                        <img id="hairfemale37" src="img/books/page37/woman/hair/very-light/pickedup.png" class="extra modal-image37" style="z-index: 2;">
                        <img id="glassesfemale37" src="C:\xampp\htdocs\Love-Book\public\img/books/page37/woman/glasses/glasses.png" class="extra modal-image37" style="z-index: 2; display: none;">
                    </div>
                    <div class="receiver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page37/man/receiver-base.png" class="extra modal-image37" style="z-index: 1;">
                        <img id="eyesmale37" src="img/books/page37/man/eyes/brown.png" class="extra modal-image37" style="z-index: 1;">
                        <img id="hairmale37" src="img/books/page37/man/hair/grey/long2.png" class="extra modal-image37" style="z-index: 1;">
                        <img id="beardmale37" src="img/books/page37/man/beard/light/light1.png" class="extra modal-image37" style="z-index: 1; display: block;">
                        <img id="glassesmale37" src="C:\xampp\htdocs\Love-Book\public\img/books/page37/man/glasses/glasses.png" class="extra modal-image37" style="z-index: 1; display: none;">
                    </div>
                    <div><div id="text-page37" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Me encanta lo que tenemos</font></font></div>
                        </div></div>
                        
                        
                        
                <div class="extra">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page37/extra/extra-1.png" class="extra modal-image37" style="z-index: 3;">
                </div>
                
            </div>

                <div class="page-wrapper" id="page38" data-order="38">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page38/extra/no-avatars.jpg" class="page-img modal-image38">
                    <div><div id="text-page38" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupon para masaje</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page39" data-order="39">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page39/extra/only-receiver.jpg" class="page-img modal-image39">
                    <div class="giver-img">
                        <img src="C:\xampp\htdocs\Love-Book\public\img/books/page39/man/receiver-base.png" class="extra modal-image39" style="z-index: 2;">
                        <img id="eyesmale39" src="C:\xampp\htdocs\Love-Book\public\img/books/page39/man/eyes/brown.png" class="extra modal-image39" style="z-index: 2;">
                        <img id="hairmale39" src="C:\xampp\htdocs\Love-Book\public\img/books/page39/man/hair/grey/long2.png" class="extra modal-image39" style="z-index: 2;">
                        <img id="beardmale39" src="C:\xampp\htdocs\Love-Book\public\img/books/page39/man/beard/light/light1.png" class="extra modal-image39" style="z-index: 2; display: block;">
                        <img id="glassesmale39" src="C:\xampp\htdocs\Love-Book\public\img/books/page39/man/glasses/glasses.png" class="extra modal-image39" style="z-index: 2; display: none;">
                    </div>
                    <div><div id="text-page39" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Te amo de pies a cabeza</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page40" data-order="40">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page40/extra/no-avatars.jpg" class="page-img modal-image40">
                    <div><div id="text-page40" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prometeme que siempre<br> estaremos juntos</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page41" data-order="41">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page41/extra/no-avatars(1).jpg" class="page-img modal-image41">
                    <div><div id="text-page41" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi<br>espacio</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page42" data-order="42">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page42/extra/no-avatars.jpg" class="page-img modal-image42">
                    <div><div id="text-page42" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiero envejecer contigo</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>


                <div class="page-wrapper" id="page43" data-order="43">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page43/extra/no-avatars(1).jpg" class="page-img modal-image43">
                    <div><div id="text-page43" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu eres mi mas hermoso <br>descubrimiento</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>

                <div class="page-wrapper" id="page44" data-order="44">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page44/extra/no-avatars.jpg" class="page-img modal-image44">
                    <div><div id="text-page44" contenteditable="true" class="page-text large">
                        <div><br></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y la luz de mi vida</font></font></div>
                        </div></div>
                        
                        
                        
                        
                </div>



                <div class="page-wrapper" id="page45" data-order="45">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page45/extra/two-avatars.jpg" class="page-img modal-image45">
                <div class="giver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page45/woman/giver-woman-base.png" class="extra modal-image45" style="z-index: 1;">
                    <img id="eyesfemale45" src="C:\xampp\htdocs\Love-Book\public\img/books/page45/woman/eyes/brown.png" class="extra modal-image45" style="z-index: 1;">
                    <img id="hairfemale45" src="C:\xampp\htdocs\Love-Book\public\img/books/page45/woman/hair/very-light/pickedup.png" class="extra modal-image45" style="z-index: 1;">
                    <img id="glassesfemale45" src="C:\xampp\htdocs\Love-Book\public\img/books/page45/woman/glasses/glasses.png" class="extra modal-image45" style="z-index: 1; display: none;">
                </div>
                <div class="receiver-img">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page45/man/receiver-man-base.png" class="extra modal-image45" style="z-index: 2;">
                    <img id="eyesmale45" src="C:\xampp\htdocs\Love-Book\public\img/books/page45/man/eyes/brown.png" class="extra modal-image45" style="z-index: 2;">
                    <img id="hairmale45" src="C:\xampp\htdocs\Love-Book\public\img/books/page45/man/hair/grey/long2.png" class="extra modal-image45" style="z-index: 2;">
                    <img id="beardmale45" src="C:\xampp\htdocs\Love-Book\public\img/books/page45/man/beard/light/light1.png" class="extra modal-image45" style="z-index: 2; display: block;">
                    <img id="glassesmale45" src="C:\xampp\htdocs\Love-Book\public\img/books/page45/man/glasses/glasses.png" class="extra modal-image45" style="z-index: 2; display: none;">
                </div>
                <div class="extras">
                    <img src="C:\xampp\htdocs\Love-Book\public\img/books/page45/extra/extra-1.png" class="extra modal-image45" style="z-index: 3;">
                </div>
                <div><div id="text-page45" contenteditable="true" class="page-text large">
                    <div><br></div>
                    <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TE AMO</font></font></div>
                    </div></div>
                    
                    
                    
                    
            </div>

             </div>
             
              


     </div></body>
    </html>
