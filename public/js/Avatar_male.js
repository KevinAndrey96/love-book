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

var beardBrown1 = "/Images/Man/Beard/Brown/brown1.png";
var beardBrown2 = "/Images/Man/Beard/Brown/brown2.png";
var beardBrown3 = "/Images/Man/Beard/Brown/brown3.png";
var beardBrown4 = "/Images/Man/Beard/Brown/brown4.png";
var beardBrown5 = "/Images/Man/Beard/Brown/brown5.png";
var beardBrown6 = "/Images/Man/Beard/Brown/brown6.png";

// Obtener elementos HTML de las imágenes de los ojos del hombre
var eyes1 = document.getElementById("eyes-1");
var eyes2 = document.getElementById("eyes-2");
var eyes3 = document.getElementById("eyes-3");
var eyes4 = document.getElementById("eyes-4");

// Definir rutas a las imágenes de los ojos de diferentes colores
var brownEyes = "/Images/Man/Eyes/brown.png";
var blackEyes = "/Images/Man/Eyes/black.png";
var blueEyes  = "/Images/Man/Eyes/blue.png";
var greenEyes = "/Images/Man/Eyes/green.png";
var eyeschange = document.getElementById("eyeschange");

// Obtener elementos HTML de las imágenes de los lentes del hombre
var notGlasses = document.getElementById("glasses-0");
var glasses    = document.getElementById("glasses-1");
var glassess = "/Images/Man/Glasses/glasses.png";
var glasseschange = document.getElementById("glasseschange");

// Definir rutas a las imágenes de diferentes peinados de color marrón
var brown1 = "/Images/Man/Hair/Brown/half1.png";
var brown2 = "/Images/Man/Hair/Brown/half2.png";
var brown3 = "/Images/Man/Hair/Brown/half3.png";
var brown4 = "/Images/Man/Hair/Brown/bald1.png";
var brown5 = "/Images/Man/Hair/Brown/bald2.png";
var brown6 = "/Images/Man/Hair/Brown/short1.png";
var brown7 = "/Images/Man/Hair/Brown/short2.png";
var brown8 = "/Images/Man/Hair/Brown/long1.png";
var brown9 = "/Images/Man/Hair/Brown/long2.png";

// Obtener botones y secciones para cambiar la apariencia del hombre
const btnHair = document.getElementById('btn-hair');
const btnGlasses = document.getElementById('btn-glasses');
const btnEyes = document.getElementById('btn-eyes');
const btnBeard = document.getElementById('btn-beard');
const sectionHair = document.getElementById('hair-section');
const sectionGlasses = document.getElementById('glasses-section');
const sectionEyes = document.getElementById('eyes-section');
const sectionBeard = document.getElementById('beard-section');

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

    hairImage.src = "/Images/Man/Hair/" + color + "/" + newHair;
}

/**
 * Cambia el color de la barba de una imagen.
 * @param {string} color - El nombre del color deseado.
 * */
  function changeBeardColor(color) {

    let beardImage = document.getElementById("beardchange");
    let currentBeard = beardImage.src.split("/").pop();

    let newBeard = currentBeard.replace(currentBeard.slice(0, -5), color);

    beardImage.src = "/Images/Man/Beard/" + color + "/" + newBeard;
}

// Ocultar secciones al cargar la página
document.getElementById("eyes-section").style.display = "none";
document.getElementById("glasses-section").style.display = "none";
document.getElementById("beard-section").style.display = "none";


// Mostrar la sección de cabello y ocultar las demás al hacer clic en el botón de cabello
btnHair.addEventListener('click', () => {
    sectionHair.style.display = 'block';
    sectionBeard.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionEyes.style.display = 'none';
});

// Mostrar la sección de gafas y ocultar las demás al hacer clic en el botón de gafas
btnGlasses.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionBeard.style.display = 'none';
    sectionGlasses.style.display = 'block';
    sectionEyes.style.display = 'none';
});

// Mostrar la sección de ojos y ocultar las demás al hacer clic en el botón de ojos
btnEyes.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionBeard.style.display = 'none';
    sectionEyes.style.display = 'block';
});

// Mostrar la sección de barba y ocultar las demás al hacer clic en el botón de barba
btnBeard.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionBeard.style.display = 'block';
    sectionEyes.style.display = 'none';
});

document.getElementById("btn-continue").addEventListener("click", function() {

    var name = document.getElementById("nameMale").value;

    // Validar que el campo del nombre ha sido llenado
    if (name === "") {
        alert("Por favor ingrese el nombre");
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
      window.location.href = "/FrontPage";
    } else {
      window.location.href = "/Avatar/Female";
    }
  });









