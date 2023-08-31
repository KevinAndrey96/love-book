// Obtener elementos HTML de las imágenes del cabello de la mujer
var hair1 = document.getElementById("hair-1");
var hair2 = document.getElementById("hair-2");
var hair3 = document.getElementById("hair-3");
var hair4 = document.getElementById("hair-4");
var hair5 = document.getElementById("hair-5");
var hair6 = document.getElementById("hair-6");
var hair7 = document.getElementById("hair-7");
var hair8 = document.getElementById("hair-8");
var hairchangefemale = document.getElementById("hairchangefemale");

// Obtener elementos HTML de las imágenes de los ojos de la mujer
var eyes1 = document.getElementById("eyes-1");
var eyes2 = document.getElementById("eyes-2");
var eyes3 = document.getElementById("eyes-3");
var eyes4 = document.getElementById("eyes-4");
var eyeschangefemale = document.getElementById("eyeschangefemale");


// Definir rutas a las imágenes de los ojos de diferentes colores
var brownEyes = "/img/woman/eyes/brown.png";
var greenEyes = "/img/woman/eyes/green.png";
var blueEyes  = "/img/woman/eyes/blue.png";
var blackEyes = "/img/woman/eyes/black.png";

// Obtener elementos HTML de las imágenes de los lentes de la mujer
var notGlasses = document.getElementById("glasses-0");
var glasses    = document.getElementById("glasses-1");
var glasseschangefemale = document.getElementById("glasseschange");

// Definir ruta a la imagen de los lentes
var glassess = "/img/woman/glasses/glasses.png";

// Definir rutas a las imágenes de diferentes peinados de color marrón
var brown1 = "/img/woman/hair/brown/long1.png";
var brown2 = "/img/woman/hair/brown/long2.png";
var brown3 = "/img/woman/hair/brown/curly1.png";
var brown4 = "/img/woman/hair/brown/short3.png";
var brown5 = "/img/woman/hair/brown/pickedup.png";
var brown6 = "/img/woman/hair/brown/curly2.png";
var brown7 = "/img/woman/hair/brown/short2.png";
var brown8 = "/img/woman/hair/brown/short1.png";

// Obtener botones y secciones para cambiar la apariencia de la mujer
const btnHair = document.getElementById('btn-hair');
const btnGlasses = document.getElementById('btn-glasses');
const btnEyes = document.getElementById('btn-eyes');
const sectionHair = document.getElementById('hair-section');
const sectionGlasses = document.getElementById('glasses-section');
const sectionEyes = document.getElementById('eyes-section');
const sectionColor = document.getElementById('color-section');


// Obtener boton continuar
const btnContinue = document.getElementById('btn-continue');

var formContainer = document.querySelector(".form-group");


const hairInputs = document.querySelectorAll('.hair-select .col-6');

  hairInputs.forEach((input) => {
    input.addEventListener('click', function () {
      if (input.classList.contains('selected')) {
        input.classList.remove('selected');
      } else {
        hairInputs.forEach((inp) => {
          inp.classList.remove('selected');
        });
        input.classList.add('selected');
      }
    });
  });


  hair1.onclick = function() {
    changeHairStyle(brown1);
}

hair2.onclick = function() {
    changeHairStyle(brown2);
}

hair3.onclick = function() {
    changeHairStyle(brown3);
}

hair4.onclick = function() {
    changeHairStyle(brown4);
}

hair5.onclick = function() {
    changeHairStyle(brown5);
}

hair6.onclick = function() {
    changeHairStyle(brown6);
}

hair7.onclick = function() {
    changeHairStyle(brown7);
}

hair8.onclick = function() {
    changeHairStyle(brown8);
}

function changeHairStyle(newHair) {
    let hairImage = document.getElementById("hairchangefemale");
    hairImage.src = newHair;
    changeHairColor(currentColor);
}

function changeHairColor(color) {
    currentColor = color; // Actualizar el color seleccionado

    let hairImage = document.getElementById("hairchangefemale");
    let currentHair = hairImage.src.split("/").pop();
    let currentHairWithoutColor = currentHair.replace(currentColor, "");
    hairImage.src = "/img/woman/hair/" + currentColor + "/" + currentHairWithoutColor;

    const colorBoxes = document.querySelectorAll('.color-select .col-6');
    colorBoxes.forEach((box) => {
        box.classList.remove('selected');
    });

    const selectedBox = document.getElementById(color);
    selectedBox.classList.add('selected');
}

// Asignar funciones de clic a los elementos HTML de las imágenes de los ojos
eyes1.onclick = function(){
    eyeschangefemale.src = blackEyes;
}

eyes2.onclick = function(){
    eyeschangefemale.src = brownEyes;
}

eyes3.onclick = function(){
    eyeschangefemale.src = greenEyes;
}

eyes4.onclick = function(){
    eyeschangefemale.src = blueEyes;
}

const glassesDivs = document.querySelectorAll('.glasses-select > div');

glassesDivs.forEach((div) => {
  div.addEventListener('click', function () {
    glassesDivs.forEach((dv) => {
      dv.classList.remove('selected');
    });
    div.classList.add('selected');
  });
});

const eyesDivs = document.querySelectorAll('.eyes-select div');

eyesDivs.forEach((div) => {
  div.addEventListener('click', function () {
    eyesDivs.forEach((dv) => {
      dv.classList.remove('selected');
    });
    div.classList.add('selected');
  });
});

// Asignar funciones de clic a los elementos HTML de las imágenes de las gafas quitar-poner
glasses.onclick = function(){
    glasseschangefemale.style.display = "block";
}

notGlasses.onclick = function(){
    glasseschangefemale.style.display = "none";
}

/**
 * Cambia el color del cabello de una imagen.
 * @param {string} color - El nombre del color deseado.
 * */


// Ocultar secciones al cargar la página
document.getElementById("eyes-section").style.display = "none";
document.getElementById("glasses-section").style.display = "none";

// Mostrar la sección de cabello y ocultar las demás al hacer clic en el botón de cabello
btnHair.addEventListener('click', () => {
    sectionHair.style.display = 'block';
    sectionColor.style.display = 'block';
    sectionGlasses.style.display = 'none';
    sectionEyes.style.display = 'none';


});

// Mostrar la sección de gafas y ocultar las demás al hacer clic en el botón de gafas
btnGlasses.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'block';
    sectionEyes.style.display = 'none';
    sectionColor.style.display = 'none';

});

// Mostrar la sección de ojos y ocultar las demás al hacer clic en el botón de ojos
btnEyes.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionEyes.style.display = 'block';
    sectionColor.style.display = 'none';



});

document.getElementById("btn-continue").addEventListener("click", function() {


    localStorage.setItem("hairColorFemale", hairchangefemale.src);
    localStorage.setItem("eyesColorFemale", eyeschangefemale.src);
    localStorage.setItem("glassesFemale", glasseschangefemale.style.display);

    if (localStorage.getItem("hairColorMale") && localStorage.getItem("hairColorFemale")) {
      // Redirigir a la siguiente página
      window.location.href = "/front-page";
    } else {
      window.location.href = "/avatar-male";
    }
  });
  



  const buttons = document.querySelectorAll('.btn1');

  buttons.forEach((button) => {
    button.addEventListener('click', function () {
      buttons.forEach((btn) => {
        btn.classList.remove('selected');
      });
      button.classList.add('selected');
    });
  });
