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




    </body>
    </html>
