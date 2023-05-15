// Obtener referencias a elementos HTML

var eyesmale = document.getElementById("eyesmale");
var eyesfemale = document.getElementById("eyesfemale");
var hairmale = document.getElementById("hairmale");
var hairfemale = document.getElementById("hairfemale");
var glassesmale = document.getElementById("glassesmale");
var glassesfemale = document.getElementById("glassesfemale");
var beard = document.getElementById("beard");
const titleElement = document.getElementById('names');

// Establecer la ruta de la imagen de las gafas para hombres y mujeres

var glassesFemalePath = "/img/books/page1/woman/glasses/glasses.png";
var glassesMalePath = "/img/books/page1/man/glasses/glasses.png";

// Obtener el color de ojos guardado en el Local Storage para hombres y mujeres

var eyesColorMale = localStorage.getItem("eyesColorMale");
var eyesColorFemale = localStorage.getItem("eyesColorFemale");

// Obtener el color y tipo de pelo guardado en el Local Storage para hombres y mujeres
var hairColorMale = localStorage.getItem("hairColorMale");
var hairColorFemale = localStorage.getItem("hairColorFemale");

// Obtener las gafas guardadas en el Local Storage para hombres y mujeres

var glassesMale = localStorage.getItem("glassesMale");
var glassesFemale = localStorage.getItem("glassesFemale");

// Obtener el color y tipo de barba guardado en el Local Storage para hombres

var beardColorMale = localStorage.getItem("beardColorMale");
var beardDisplay = localStorage.getItem("beardDisplay");

// Obtener los nombres almacenados en el Local Storage y mostrarlos en el título

var nameMale = localStorage.getItem('nameMale');
var nameFemale = localStorage.getItem('nameFemale');

// Mostrar las gafas en el elemento del DOM correspondiente según lo que está guardado en el Local Storage

if (glassesFemale === "block") {
    glassesfemale.style.display = "block";
    glassesfemale.src = glassesFemalePath;
  } else {
    glassesfemale.style.display = "none";
  }

  if (glassesMale === "block") {
    glassesmale.style.display = "block";
    glassesmale.src = glassesMalePath;
  } else {
    glassesmale.style.display = "none";
  }

  // Obtener la última parte de la ruta que contiene el color de ojos

  var eyesColorSuffixMale = eyesColorMale.substring(eyesColorMale.lastIndexOf("/"));
  var eyesColorSuffixFemale = eyesColorFemale.substring(eyesColorFemale.lastIndexOf("/"));

// Obtener las dos últimas partes de la ruta que contiene el tipo y color de los ojos para hombres y mujeres

  var hairPartsMan = hairColorMale.split("/");
  var hairColorMan = hairPartsMan[hairPartsMan.length - 2];
  var hairTypeMan = hairPartsMan[hairPartsMan.length - 1].split(".")[0];

  var hairPartsWoman = hairColorFemale.split("/");
  var hairColorWoman = hairPartsWoman[hairPartsWoman.length - 2];
  var hairTypeWoman = hairPartsWoman[hairPartsWoman.length - 1].split(".")[0];

  var beardParts = beardColorMale.split("/");
  var beardColor = beardParts[beardParts.length - 2];
  var beardType = beardParts[beardParts.length - 1].split(".")[0];

  // Obtener el color y tipo de barba para hombres
  var eyesMale = "/img/books/page1/man/eyes" + eyesColorSuffixMale;
  var eyesFemale = "/img/books/page1/woman/eyes" + eyesColorSuffixFemale;
  var hairMale = "/img/books/page1/man/hair/" + hairColorMan + "/" + hairTypeMan + ".png";
  var hairFemale = "/img/books/page1/woman/hair/" + hairColorWoman + "/" + hairTypeWoman + ".png";

  // Mostrar o esconder la imagen de la barba en función del valor almacenado en el Local Storage

  if (beardDisplay === "none") {
    beard.style.display = "none";
  } else if (beardColorMale) {
    // Obtener la ruta de la imagen de la barba

    var beardParts = beardColorMale.split("/");
    var beardColor = beardParts[beardParts.length - 2];
    var beardType = beardParts[beardParts.length - 1].split(".")[0];
    var beardMale = "/img/books/page1/man/beard/" + beardColor + "/" + beardType + ".png";
    beard.style.display = "block";
    beard.src = beardMale;
  } else {
    beard.style.display = "none";
  }

  if (nameMale && nameFemale) {
  titleElement.textContent = ` ${nameMale} y ${nameFemale}`;
  }

  $(document).ready(function() {
    $('.insert-before-btn').click(function() {
      var pageWrapper = $(this).parent(); // Obtén el contenedor de la imagen
      var prevPageWrapper = pageWrapper.prev('.page-wrapper'); // Obtén el contenedor de la imagen anterior

      if (prevPageWrapper.length && !prevPageWrapper.is("#first-page-wrapper")) {
        // Si hay una imagen anterior y no es la primera página, inserta la imagen actual antes de ella
        prevPageWrapper.before(pageWrapper);
      } else {
        // Si no hay una imagen anterior o es la primera página, no se hace nada
        return false;
      }
    });

    $('.insert-after-btn').click(function() {
      var pageWrapper = $(this).parent(); // Obtén el contenedor de la imagen
      var nextPageWrapper = pageWrapper.next('.page-wrapper'); // Obtén el contenedor de la imagen siguiente

      if (nextPageWrapper.length) {
        // Si hay una imagen siguiente, inserta la imagen actual después de ella
        nextPageWrapper.after(pageWrapper);
      } else {
        // Si no hay una imagen siguiente, inserta la imagen actual al final del contenedor
        pageWrapper.parent().append(pageWrapper);
      }
    });
  });




  var btns = document.querySelectorAll('.myBtn, .myBtn1, .myBtn3, .myBtn4, .myBtn5, .myBtn6, .myBtn7, .myBtn8, .myBtn9, .myBtn10, .myBtn11, .myBtn12, .myBtn13, .myBtn14, .myBtn15, .myBtn16, .myBtn17, .myBtn18, .myBtn19, .myBtn20, .myBtn21, .myBtn22, .myBtn23, .myBtn24, .myBtn25, .myBtn26, .myBtn27, .myBtn28, .myBtn29, .myBtn30, .myBtn31, .myBtn32, .myBtn33, .myBtn34, .myBtn35, .myBtn36, .myBtn37, .myBtn38, .myBtn39, .myBtn40, .myBtn41, .myBtn42, .myBtn43, .myBtn44, .myBtn45');
  var modal1 = document.getElementById('myModal');
  var modal2 = document.getElementById('myModal1');
  var modal3 = document.getElementById('myModal3');
  var modal4 = document.getElementById('myModal4');
  var modal5 = document.getElementById('myModal5');
  var modal6 = document.getElementById('myModal6');
  var modal7 = document.getElementById('myModal7');
  var modal8 = document.getElementById('myModal8');
  var modal9 = document.getElementById('myModal9');
  var modal10 = document.getElementById('myModal10');
  var modal11 = document.getElementById('myModal11');
  var modal12 = document.getElementById('myModal12');
  var modal13 = document.getElementById('myModal13');
  var modal14 = document.getElementById('myModal14');
  var modal15 = document.getElementById('myModal15');
  var modal16 = document.getElementById('myModal16');
  var modal17 = document.getElementById('myModal17');
  var modal18 = document.getElementById('myModal18');
  var modal19 = document.getElementById('myModal19');
  var modal20 = document.getElementById('myModal20');
  var modal21 = document.getElementById('myModal21');
  var modal22 = document.getElementById('myModal22');
  var modal23 = document.getElementById('myModal23');
  var modal24 = document.getElementById('myModal24');
  var modal25 = document.getElementById('myModal25');
  var modal26 = document.getElementById('myModal26');
  var modal27 = document.getElementById('myModal27');
  var modal28 = document.getElementById('myModal28');
  var modal29 = document.getElementById('myModal29');
  var modal30 = document.getElementById('myModal30');
  var modal31 = document.getElementById('myModal31');
  var modal32 = document.getElementById('myModal32');
  var modal33 = document.getElementById('myModal33');
  var modal34 = document.getElementById('myModal34');
  var modal35 = document.getElementById('myModal35');
  var modal36 = document.getElementById('myModal36');
  var modal37 = document.getElementById('myModal37');
  var modal38 = document.getElementById('myModal38');
  var modal39 = document.getElementById('myModal39');
  var modal40 = document.getElementById('myModal40');
  var modal41 = document.getElementById('myModal41');
  var modal42 = document.getElementById('myModal42');
  var modal43 = document.getElementById('myModal43');
  var modal44 = document.getElementById('myModal44');
  var modal45 = document.getElementById('myModal45');


  var spans1 = document.querySelectorAll(".close1");
  var spans2 = document.querySelectorAll(".close2");
  var spans3 = document.querySelectorAll(".close3");
  var spans4 = document.querySelectorAll(".close4");
  var spans5 = document.querySelectorAll(".close5");
  var spans6 = document.querySelectorAll(".close6");
  var spans7 = document.querySelectorAll(".close7");
  var spans8 = document.querySelectorAll(".close8");
  var spans9 = document.querySelectorAll(".close9");
  var spans10 = document.querySelectorAll(".close10");
  var spans11 = document.querySelectorAll(".close11");
  var spans12 = document.querySelectorAll(".close12");
  var spans13 = document.querySelectorAll(".close13");
  var spans14 = document.querySelectorAll(".close14");
  var spans15 = document.querySelectorAll(".close15");
  var spans16 = document.querySelectorAll(".close16");
  var spans17 = document.querySelectorAll(".close17");
  var spans18 = document.querySelectorAll(".close18");
  var spans19 = document.querySelectorAll(".close19");
  var spans20 = document.querySelectorAll(".close20");
  var spans21 = document.querySelectorAll(".close21");
  var spans22 = document.querySelectorAll(".close22");
  var spans23 = document.querySelectorAll(".close23");
  var spans24 = document.querySelectorAll(".close24");
  var spans25 = document.querySelectorAll(".close25");
  var spans26 = document.querySelectorAll(".close26");
  var spans27 = document.querySelectorAll(".close27");
  var spans28 = document.querySelectorAll(".close28");
  var spans29 = document.querySelectorAll(".close29");
  var spans30 = document.querySelectorAll(".close30");
  var spans31 = document.querySelectorAll(".close31");
  var spans32 = document.querySelectorAll(".close32");
  var spans33 = document.querySelectorAll(".close33");
  var spans34 = document.querySelectorAll(".close34");
  var spans35 = document.querySelectorAll(".close35");
  var spans36 = document.querySelectorAll(".close36");
  var spans37 = document.querySelectorAll(".close37");
  var spans38 = document.querySelectorAll(".close38");
  var spans39 = document.querySelectorAll(".close39");
  var spans40 = document.querySelectorAll(".close40");
  var spans41 = document.querySelectorAll(".close41");
  var spans42 = document.querySelectorAll(".close42");
  var spans43 = document.querySelectorAll(".close43");
  var spans44 = document.querySelectorAll(".close44");
  var spans45 = document.querySelectorAll(".close45");

  // Función para mostrar el primer modal
  function showModal1() {
    modal1.style.display = "block";
  }

  // Función para mostrar el segundo modal
  function showModal2() {
    modal2.style.display = "block";
  }

  // Función para mostrar el tercer modal
  function showModal3() {
    modal3.style.display = "block";
  }

  // Función para mostrar el cuarto modal
  function showModal4() {
    modal4.style.display = "block";
  }

  function showModal5() {
    modal5.style.display = "block";
  }

  function showModal6() {
    modal6.style.display = "block";
  }

  function showModal7() {
    modal7.style.display = "block";
  }

  function showModal8() {
    modal8.style.display = "block";
  }

  function showModal9() {
    modal9.style.display = "block";
  }

  function showModal10() {
    modal10.style.display = "block";
  }

  function showModal11() {
    modal11.style.display = "block";
  }

  // Función para mostrar el segundo modal
  function showModal12() {
    modal12.style.display = "block";
  }

  // Función para mostrar el tercer modal
  function showModal13() {
    modal13.style.display = "block";
  }

  // Función para mostrar el cuarto modal
  function showModal14() {
    modal14.style.display = "block";
  }

  function showModal15() {
    modal15.style.display = "block";
  }

  function showModal16() {
    modal16.style.display = "block";
  }

  function showModal17() {
    modal17.style.display = "block";
  }

  function showModal18() {
    modal18.style.display = "block";
  }

  function showModal19() {
    modal19.style.display = "block";
  }

  function showModal20() {
    modal20.style.display = "block";
  }

  function showModal21() {
    modal21.style.display = "block";
  }

  // Función para mostrar el segundo modal
  function showModal22() {
    modal22.style.display = "block";
  }

  // Función para mostrar el tercer modal
  function showModal23() {
    modal23.style.display = "block";
  }

  // Función para mostrar el cuarto modal
  function showModal24() {
    modal24.style.display = "block";
  }

  function showModal25() {
    modal25.style.display = "block";
  }

  function showModal26() {
    modal26.style.display = "block";
  }

  function showModal27() {
    modal27.style.display = "block";
  }

  function showModal28() {
    modal28.style.display = "block";
  }

  function showModal29() {
    modal29.style.display = "block";
  }

  function showModal30() {
    modal30.style.display = "block";
  }

  function showModal31() {
    modal31.style.display = "block";
  }

  // Función para mostrar el segundo modal
  function showModal32() {
    modal32.style.display = "block";
  }

  // Función para mostrar el tercer modal
  function showModal33() {
    modal33.style.display = "block";
  }

  // Función para mostrar el cuarto modal
  function showModal34() {
    modal34.style.display = "block";
  }

  function showModal35() {
    modal35.style.display = "block";
  }

  function showModal36() {
    modal36.style.display = "block";
  }

  function showModal37() {
    modal37.style.display = "block";
  }

  function showModal38() {
    modal38.style.display = "block";
  }

  function showModal39() {
    modal39.style.display = "block";
  }

  function showModal40() {
    modal40.style.display = "block";
  }

  function showModal41() {
    modal41.style.display = "block";
  }

  function showModal42() {
    modal42.style.display = "block";
  }

  function showModal43() {
    modal43.style.display = "block";
  }

  function showModal44() {
    modal44.style.display = "block";
  }

  function showModal45() {
    modal45.style.display = "block";
  }



  // Función para ocultar el primer modal
  function hideModal1() {
    modal1.style.display = "none";
  }

  // Función para ocultar el segundo modal
  function hideModal2() {
    modal2.style.display = "none";
  }

  // Función para ocultar el tercer modal
  function hideModal3() {
    modal3.style.display = "none";
  }

  // Función para ocultar el cuarto modal
  function hideModal4() {
    modal4.style.display = "none";
  }

  function hideModal5() {
    modal5.style.display = "none";
  }

  function hideModal6() {
    modal6.style.display = "none";
  }

  function hideModal7() {
    modal7.style.display = "none";
  }

  function hideModal8() {
    modal8.style.display = "none";
  }

  function hideModal9() {
    modal9.style.display = "none";
  }

  function hideModal10() {
    modal10.style.display = "none";
  }

  function hideModal11() {
    modal11.style.display = "none";
  }

  // Función para ocultar el segundo modal
  function hideModal12() {
    modal12.style.display = "none";
  }

  // Función para ocultar el tercer modal
  function hideModal13() {
    modal13.style.display = "none";
  }

  // Función para ocultar el cuarto modal
  function hideModal14() {
    modal14.style.display = "none";
  }

  function hideModal15() {
    modal15.style.display = "none";
  }

  function hideModal16() {
    modal16.style.display = "none";
  }

  function hideModal17() {
    modal17.style.display = "none";
  }

  function hideModal18() {
    modal18.style.display = "none";
  }

  function hideModal19() {
    modal19.style.display = "none";
  }

  function hideModal20() {
    modal20.style.display = "none";
  }

  function hideModal21() {
    modal21.style.display = "none";
  }

  // Función para ocultar el segundo modal
  function hideModal22() {
    modal22.style.display = "none";
  }

  // Función para ocultar el tercer modal
  function hideModal23() {
    modal23.style.display = "none";
  }

  // Función para ocultar el cuarto modal
  function hideModal24() {
    modal24.style.display = "none";
  }

  function hideModal25() {
    modal25.style.display = "none";
  }

  function hideModal26() {
    modal26.style.display = "none";
  }

  function hideModal27() {
    modal27.style.display = "none";
  }

  function hideModal28() {
    modal28.style.display = "none";
  }

  function hideModal29() {
    modal29.style.display = "none";
  }

  function hideModal30() {
    modal30.style.display = "none";
  }

  function hideModal31() {
    modal31.style.display = "none";
  }

  // Función para ocultar el segundo modal
  function hideModal32() {
    modal32.style.display = "none";
  }

  // Función para ocultar el tercer modal
  function hideModal33() {
    modal33.style.display = "none";
  }

  // Función para ocultar el cuarto modal
  function hideModal34() {
    modal34.style.display = "none";
  }

  function hideModal35() {
    modal35.style.display = "none";
  }

  function hideModal36() {
    modal36.style.display = "none";
  }

  function hideModal37() {
    modal37.style.display = "none";
  }

  function hideModal38() {
    modal38.style.display = "none";
  }

  function hideModal39() {
    modal39.style.display = "none";
  }

  function hideModal40() {
    modal40.style.display = "none";
  }

  function hideModal41() {
    modal41.style.display = "none";
  }

  function hideModal42() {
    modal42.style.display = "none";
  }

  function hideModal43() {
    modal43.style.display = "none";
  }

  function hideModal44() {
    modal44.style.display = "none";
  }

  function hideModal45() {
    modal45.style.display = "none";
  }

  // Asigna la función de mostrar el modal correspondiente a cada botón
  for (var i = 0; i < btns.length; i++) {
    btns[i].onclick = function() {
      if (this.classList.contains('myBtn1')) {
        showModal2();
      } else if (this.classList.contains('myBtn3')) {
        showModal3();
      } else if (this.classList.contains('myBtn4')) {
        showModal4();
      } else if (this.classList.contains('myBtn5')) {
        showModal5();
      } else if (this.classList.contains('myBtn6')) {
        showModal6();
      } else if (this.classList.contains('myBtn7')) {
        showModal7();
      } else if (this.classList.contains('myBtn8')) {
        showModal8();
      } else if (this.classList.contains('myBtn9')) {
        showModal9();
      } else if (this.classList.contains('myBtn10')) {
        showModal10();
    } else if (this.classList.contains('myBtn11')) {
        showModal11();
      } else if (this.classList.contains('myBtn12')) {
        showModal12();
      } else if (this.classList.contains('myBtn13')) {
        showModal13();
      } else if (this.classList.contains('myBtn14')) {
        showModal14();
      } else if (this.classList.contains('myBtn15')) {
        showModal15();
      } else if (this.classList.contains('myBtn16')) {
        showModal16();
      } else if (this.classList.contains('myBtn17')) {
        showModal17();
      } else if (this.classList.contains('myBtn18')) {
        showModal18();
      } else if (this.classList.contains('myBtn19')) {
        showModal19();
      } else if (this.classList.contains('myBtn20')) {
        showModal20()
      }  else if (this.classList.contains('myBtn21')) {
        showModal21();
      } else if (this.classList.contains('myBtn22')) {
        showModal22();
      } else if (this.classList.contains('myBtn23')) {
        showModal23();
      } else if (this.classList.contains('myBtn24')) {
        showModal24();
      } else if (this.classList.contains('myBtn25')) {
        showModal25();
      } else if (this.classList.contains('myBtn26')) {
        showModal26();
      } else if (this.classList.contains('myBtn27')) {
        showModal27();
    } else if (this.classList.contains('myBtn28')) {
        showModal28();
      } else if (this.classList.contains('myBtn29')) {
        showModal29();
      } else if (this.classList.contains('myBtn30')) {
        showModal30();
      } else if (this.classList.contains('myBtn31')) {
        showModal31();
      } else if (this.classList.contains('myBtn32')) {
        showModal32();
      } else if (this.classList.contains('myBtn33')) {
        showModal33();
      } else if (this.classList.contains('myBtn34')) {
        showModal34();
      } else if (this.classList.contains('myBtn35')) {
        showModal35();
      } else if (this.classList.contains('myBtn36')) {
        showModal36();
      } else if (this.classList.contains('myBtn37')) {
        showModal37()
      } else if (this.classList.contains('myBtn38')) {
        showModal38();
      } else if (this.classList.contains('myBtn39')) {
        showModal39();
      } else if (this.classList.contains('myBtn40')) {
        showModal40();
      } else if (this.classList.contains('myBtn41')) {
        showModal41();
      } else if (this.classList.contains('myBtn42')) {
        showModal42();
      } else if (this.classList.contains('myBtn43')) {
        showModal43();
      } else if (this.classList.contains('myBtn44')) {
        showModal44();
      } else if (this.classList.contains('myBtn45')) {
        showModal45()
      }else {
        showModal1();
      }
    }
  }

  var images = document.querySelectorAll('.modal-img');
  for (var i = 0; i < images.length; i++) {
    images[i].onclick = function() {
      swal('Perfecto', 'Has cambiado la imagen', 'success');
      hideModal(this.closest('.modal'));
    }
  }





  // Cuando se hace clic en <span> (x), se oculta el modal correspondiente
  for (var i = 0; i < spans1.length; i++) {
    spans1[i].onclick = function() {
      hideModal(modal1);
    }
  }

  for (var i = 0; i < spans2.length; i++) {
    spans2[i].onclick = function() {
      hideModal(modal2);
    }
  }

  for (var i = 0; i < spans3.length; i++) {
    spans3[i].onclick = function() {
      hideModal(modal3);
    }
  }

  for (var i = 0; i < spans4.length; i++) {
    spans4[i].onclick = function() {
      hideModal(modal4);
    }
  }

  for (var i = 0; i < spans5.length; i++) {
    spans5[i].onclick = function() {
      hideModal(modal5);
    }
  }

  for (var i = 0; i < spans6.length; i++) {
    spans6[i].onclick = function() {
      hideModal(modal6);
    }
  }

  for (var i = 0; i < spans7.length; i++) {
    spans7[i].onclick = function() {
      hideModal(modal7);
    }
  }

  for (var i = 0; i < spans8.length; i++) {
    spans8[i].onclick = function() {
      hideModal(modal8);
    }
  }

  for (var i = 0; i < spans9.length; i++) {
    spans9[i].onclick = function() {
      hideModal(modal9);
    }
  }

  for (var i = 0; i < spans10.length; i++) {
    spans10[i].onclick = function() {
      hideModal(modal10);
    }
  }

  for (var i = 0; i < spans11.length; i++) {
    spans11[i].onclick = function() {
      hideModal(modal11);
    }
  }

  for (var i = 0; i < spans12.length; i++) {
    spans12[i].onclick = function() {
      hideModal(modal12);
    }
  }

  for (var i = 0; i < spans13.length; i++) {
    spans13[i].onclick = function() {
      hideModal(modal13);
    }
  }

  for (var i = 0; i < spans14.length; i++) {
    spans14[i].onclick = function() {
      hideModal(modal14);
    }
  }

  for (var i = 0; i < spans15.length; i++) {
    spans15[i].onclick = function() {
      hideModal(modal15);
    }
  }

  for (var i = 0; i < spans16.length; i++) {
    spans16[i].onclick = function() {
      hideModal(modal16);
    }
  }

  for (var i = 0; i < spans17.length; i++) {
    spans17[i].onclick = function() {
      hideModal(modal17);
    }
  }

  for (var i = 0; i < spans18.length; i++) {
    spans18[i].onclick = function() {
      hideModal(modal18);
    }
  }

  for (var i = 0; i < spans19.length; i++) {
    spans19[i].onclick = function() {
      hideModal(modal19);
    }
  }

  for (var i = 0; i < spans20.length; i++) {
    spans20[i].onclick = function() {
      hideModal(modal20);
    }
  }

  for (var i = 0; i < spans21.length; i++) {
    spans21[i].onclick = function() {
      hideModal(modal21);
    }
  }

  for (var i = 0; i < spans22.length; i++) {
    spans22[i].onclick = function() {
      hideModal(modal22);
    }
  }

  for (var i = 0; i < spans23.length; i++) {
    spans23[i].onclick = function() {
      hideModal(modal23);
    }
  }

  for (var i = 0; i < spans24.length; i++) {
    spans24[i].onclick = function() {
      hideModal(modal24);
    }
  }

  for (var i = 0; i < spans25.length; i++) {
    spans25[i].onclick = function() {
      hideModal(modal25);
    }
  }

  for (var i = 0; i < spans26.length; i++) {
    spans26[i].onclick = function() {
      hideModal(modal26);
    }
  }

  for (var i = 0; i < spans27.length; i++) {
    spans27[i].onclick = function() {
      hideModal(modal27);
    }
  }

  for (var i = 0; i < spans28.length; i++) {
    spans28[i].onclick = function() {
      hideModal(modal28);
    }
  }

  for (var i = 0; i < spans29.length; i++) {
    spans29[i].onclick = function() {
      hideModal(modal29);
    }
  }

  for (var i = 0; i < spans30.length; i++) {
    spans30[i].onclick = function() {
      hideModal(modal30);
    }
  }

  for (var i = 0; i < spans31.length; i++) {
    spans31[i].onclick = function() {
      hideModal(modal31);
    }
  }

  for (var i = 0; i < spans32.length; i++) {
    spans32[i].onclick = function() {
      hideModal(modal32);
    }
  }

  for (var i = 0; i < spans33.length; i++) {
    spans33[i].onclick = function() {
      hideModal(modal33);
    }
  }

  for (var i = 0; i < spans34.length; i++) {
    spans34[i].onclick = function() {
      hideModal(modal34);
    }
  }

  for (var i = 0; i < spans35.length; i++) {
    spans35[i].onclick = function() {
      hideModal(modal35);
    }
  }

  for (var i = 0; i < spans36.length; i++) {
    spans36[i].onclick = function() {
      hideModal(modal36);
    }
  }

  for (var i = 0; i < spans37.length; i++) {
    spans37[i].onclick = function() {
      hideModal(modal37);
    }
  }

  for (var i = 0; i < spans38.length; i++) {
    spans38[i].onclick = function() {
      hideModal(modal38);
    }
  }

  for (var i = 0; i < spans39.length; i++) {
    spans39[i].onclick = function() {
      hideModal(modal39);
    }
  }

  for (var i = 0; i < spans40.length; i++) {
    spans40[i].onclick = function() {
      hideModal(modal40);
    }
  }

  for (var i = 0; i < spans41.length; i++) {
    spans41[i].onclick = function() {
      hideModal(modal41);
    }
  }

  for (var i = 0; i < spans42.length; i++) {
    spans42[i].onclick = function() {
      hideModal(modal42);
    }
  }

  for (var i = 0; i < spans43.length; i++) {
    spans43[i].onclick = function() {
      hideModal(modal43);
    }
  }

  for (var i = 0; i < spans44.length; i++) {
    spans44[i].onclick = function() {
      hideModal(modal44);
    }
  }

  for (var i = 0; i < spans45.length; i++) {
    spans45[i].onclick = function() {
      hideModal(modal45);
    }
  }


  function hideModal(modal) {
    modal.style.display = "none";
  }



  // Función para mostrar la imagen en el modal
  $(document).ready(function() {
    $('.image-group img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image').attr('src', src);
      });
    })
  });

  // Función para mostrar la imagen en el modal
  $(document).ready(function() {
    $('.image-group1 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image1').attr('src', src);
      });
    })
  });

$(document).ready(function() {
  $('.image-group3 img').each(function() {
    $(this).click(function() {
      var src = $(this).attr('src');
      $('.modal-image3').attr('src', src);
    });
  });
});

$(document).ready(function() {
    $('.image-group4 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image4').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group5 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image5').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group6 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image6').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group7 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image7').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group8 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image8').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group9 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image9').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group10 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image10').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group11 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image11').attr('src', src);
      });
    })
  });

$(document).ready(function() {
  $('.image-group12 img').each(function() {
    $(this).click(function() {
      var src = $(this).attr('src');
      $('.modal-image12').attr('src', src);
    });
  });
});

$(document).ready(function() {
    $('.image-group13 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image13').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group14 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image14').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group15 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image15').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group16 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image16').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group17 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image17').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group18 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image18').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group19 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image19').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group20 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image20').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group21 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image21').attr('src', src);
      });
    })
  });

  // Función para mostrar la imagen en el modal
  $(document).ready(function() {
    $('.image-group22 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image22').attr('src', src);
      });
    })
  });

$(document).ready(function() {
  $('.image-group23 img').each(function() {
    $(this).click(function() {
      var src = $(this).attr('src');
      $('.modal-image23').attr('src', src);
    });
  });
});

$(document).ready(function() {
    $('.image-group24 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image24').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group25 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image25').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group26 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image26').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group27 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image27').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group28 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image28').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group29 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image29').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group30 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image30').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group31 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image31').attr('src', src);
      });
    })
  });

$(document).ready(function() {
  $('.image-group32 img').each(function() {
    $(this).click(function() {
      var src = $(this).attr('src');
      $('.modal-image32').attr('src', src);
    });
  });
});

$(document).ready(function() {
    $('.image-group33 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image33').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group34 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image34').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group35 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image35').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group36 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image36').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group37 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image37').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group38 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image38').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group39 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image39').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group40 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image40').attr('src', src);
      });
    });
  });


  $(document).ready(function() {
    $('.image-group41 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image41').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group42 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image42').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group43 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image43').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group44 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image44').attr('src', src);
      });
    });
  });

  $(document).ready(function() {
    $('.image-group45 img').each(function() {
      $(this).click(function() {
        var src = $(this).attr('src');
        $('.modal-image45').attr('src', src);
      });
    });
  });







// Establecer la ruta completa en la imagen correspondiente para los ojos y el cabello
  eyesmale.src = eyesMale;
  eyesfemale.src = eyesFemale;
  hairmale.src = hairMale;
  hairfemale.src = hairFemale;





