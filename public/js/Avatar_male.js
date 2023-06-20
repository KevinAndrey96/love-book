// Obtener elementos HTML de las imágenes del cabello del hombre
var hair1 = document.getElementById("hair-1");
var hair2 = document.getElementById("hair-2");
var hair3 = document.getElementById("hair-3");
var hair4 = document.getElementById("hair-4");
var hair5 = document.getElementById("hair-5");
var hair6 = document.getElementById("hair-6");
var hair7 = document.getElementById("hair-7");
var hair8 = document.getElementById("hair-8");
var hair9 = document.getElementById("hair-9");
var hairchange = document.getElementById("hairchange");

var formContainer = document.querySelector(".form-group");


// Obtener elementos HTML de las imágenes de la barba del hombre
var beard1 = document.getElementById("beard-1");
var beard2 = document.getElementById("beard-2");
var beard3 = document.getElementById("beard-3");
var beard4 = document.getElementById("beard-4");
var beard5 = document.getElementById("beard-5");
var beard6 = document.getElementById("beard-6");
var beard7 = document.getElementById("beard-7");
var beardchange = document.getElementById("beardchange");


// Definir rutas a las imágenes de diferentes barbas de color marrón

var beardBrown1 = "/img/man/beard/brown/brown1.png";
var beardBrown2 = "/img/man/beard/brown/brown2.png";
var beardBrown3 = "/img/man/beard/brown/brown3.png";
var beardBrown4 = "/img/man/beard/brown/brown4.png";
var beardBrown5 = "/img/man/beard/brown/brown5.png";
var beardBrown6 = "/img/man/beard/brown/brown6.png";

// Obtener elementos HTML de las imágenes de los ojos del hombre
var eyes1 = document.getElementById("eyes-1");
var eyes2 = document.getElementById("eyes-2");
var eyes3 = document.getElementById("eyes-3");
var eyes4 = document.getElementById("eyes-4");

// Definir rutas a las imágenes de los ojos de diferentes colores
var brownEyes = "/img/man/eyes/brown.png";
var blackEyes = "/img/man/eyes/black.png";
var blueEyes  = "/img/man/eyes/blue.png";
var greenEyes = "/img/man/eyes/green.png";
var eyeschange = document.getElementById("eyeschange");

// Obtener elementos HTML de las imágenes de los lentes del hombre
var notGlasses = document.getElementById("glasses-0");
var glasses    = document.getElementById("glasses-1");
var glassess = "/img/man/glasses/glasses.png";
var glasseschange = document.getElementById("glasseschange");

// Definir rutas a las imágenes de diferentes peinados de color marrón
var brown1 = "/img/man/hair/brown/half1.png";
var brown2 = "/img/man/hair/brown/half2.png";
var brown3 = "/img/man/hair/brown/half3.png";
var brown4 = "/img/man/hair/brown/bald1.png";
var brown5 = "/img/man/hair/brown/bald2.png";
var brown6 = "/img/man/hair/brown/short1.png";
var brown7 = "/img/man/hair/brown/short2.png";
var brown8 = "/img/man/hair/brown/long1.png";
var brown9 = "/img/man/hair/brown/long2.png";

// Obtener botones y secciones para cambiar la apariencia del hombre
const btnHair = document.getElementById('btn-hair');
const btnGlasses = document.getElementById('btn-glasses');
const btnEyes = document.getElementById('btn-eyes');
const btnBeard = document.getElementById('btn-beard');
const sectionHair = document.getElementById('hair-section');
const sectionGlasses = document.getElementById('glasses-section');
const sectionEyes = document.getElementById('eyes-section');
const sectionBeard = document.getElementById('beard-section');
const sectionBeardColor = document.getElementById('color-beard-section');
const sectionColor = document.getElementById('color-section');




// Obtener boton continuar
const btnContinue = document.getElementById('btn-continue');



// Asignar funciones de clic a los elementos HTML de las imágenes del cabello
hair1.onclick = function(){
    hairchange.src = brown1;
}

hair2.onclick = function(){
    hairchange.src = brown2;
}

hair3.onclick = function(){
    hairchange.src = brown3;
}

hair4.onclick = function(){
    hairchange.src = brown4;
}

hair5.onclick = function(){
    hairchange.src = brown5;
}

hair6.onclick = function(){
    hairchange.src = brown6;
}

hair7.onclick = function(){
    hairchange.src = brown7;
}

hair8.onclick = function(){

    hairchange.src = brown8;
}

hair9.onclick = function(){
    hairchange.src = brown9;
}

// Asignar funciones de clic a los elementos HTML de las imágenes de la barba
beard1.onclick = function(){
    beardchange.src = beardBrown1;
}

beard2.onclick = function(){
    beardchange.src = beardBrown2;
}

beard3.onclick = function(){
    beardchange.src = beardBrown3;
}

beard4.onclick = function(){
    beardchange.src = beardBrown4;
}

beard5.onclick = function(){
    beardchange.src = beardBrown5;
}

beard6.onclick = function(){
    beardchange.src = beardBrown6;
}

beard7.onclick = function(){
    beardchange.style.display = "none";
}

// Asignar funciones de clic a los elementos HTML de las imágenes de los ojos
eyes1.onclick = function(){
    eyeschange.src = brownEyes;
}

eyes2.onclick = function(){
    eyeschange.src = blackEyes;
}

eyes3.onclick = function(){
    eyeschange.src = blueEyes;
}

eyes4.onclick = function(){
    eyeschange.src = greenEyes;
}

// Asignar funciones de clic a los elementos HTML de las imágenes de los lentes
glasses.onclick = function(){
    glasseschange.style.display = "block";
}

notGlasses.onclick = function(){
    glasseschange.style.display = "none";
}

/**
 * Cambia el color del cabello de una imagen.
 * @param {string} color - El nombre del color deseado.
 * */
function changeHairColor(color) {

    let hairImage = document.getElementById("hairchange");
    let currentHair = hairImage.src.split("/").pop();

    let newHair = currentHair.replace(color);

    hairImage.src = "/img/man/hair/" + color + "/" + newHair;
}

/**
 * Cambia el color de la barba de una imagen.
 * @param {string} color - El nombre del color deseado.
 * */
  function changeBeardColor(color) {

    let beardImage = document.getElementById("beardchange");
    let currentBeard = beardImage.src.split("/").pop();

    let newBeard = currentBeard.replace(currentBeard.slice(0, -5), color);

    beardImage.src = "/img/man/beard/" + color + "/" + newBeard;
}

// Ocultar secciones al cargar la página
document.getElementById("eyes-section").style.display = "none";
document.getElementById("glasses-section").style.display = "none";
document.getElementById("beard-section").style.display = "none";
document.getElementById("color-beard-section").style.display = "none";



// Mostrar la sección de cabello y ocultar las demás al hacer clic en el botón de cabello
btnHair.addEventListener('click', () => {
    sectionHair.style.display = 'block';
    sectionBeard.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionEyes.style.display = 'none';
    sectionBeardColor.style.display = 'none';
    sectionColor.style.display = 'block';
    formContainer.style.display = 'block';



});

// Mostrar la sección de gafas y ocultar las demás al hacer clic en el botón de gafas
btnGlasses.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionBeard.style.display = 'none';
    sectionGlasses.style.display = 'block';
    sectionEyes.style.display = 'none';
    sectionBeardColor.style.display = 'none';
    sectionColor.style.display = 'none';
    formContainer.style.display = 'none';

});

// Mostrar la sección de ojos y ocultar las demás al hacer clic en el botón de ojos
btnEyes.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionBeard.style.display = 'none';
    sectionEyes.style.display = 'block';
    sectionBeardColor.style.display = 'none';
    sectionColor.style.display = 'none';
    formContainer.style.display = 'none';


});

// Mostrar la sección de barba y ocultar las demás al hacer clic en el botón de barba
btnBeard.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionBeard.style.display = 'block';
    sectionEyes.style.display = 'none';
    sectionBeardColor.style.display = 'block';
    sectionColor.style.display = 'none';
    formContainer.style.display = 'block';


});

document.getElementById("btn-continue").addEventListener("click", function() {

    var name = document.getElementById("nameMale").value;

    // Validar que el campo del nombre ha sido llenado
    if (name === "") {
        swal('Espera', 'Debes ingresar un nombre', 'error');
        return; // Detener la ejecución de la función si el campo del nombre está vacío
      }

    // Guardar cambios en el Local Storage
    localStorage.setItem("hairColorMale", hairchange.src);
    localStorage.setItem("eyesColorMale", eyeschange.src);
    localStorage.setItem("beardColorMale", beardchange.src);
    localStorage.setItem("beardDisplay", beardchange.style.display);
    localStorage.setItem("glassesMale", glasseschange.style.display);
    localStorage.setItem("nameMale", name);

    if (localStorage.getItem("hairColorMale") && localStorage.getItem("hairColorFemale")) {
      // Redirigir a la siguiente página
      window.location.href = "/front-page";
    } else {
      window.location.href = "/avatar-female";
    }
  });









