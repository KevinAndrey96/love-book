// Obtener elementos HTML de las imágenes del cabello de la mujer
var hair1 = document.getElementById("hair-1");
var hair2 = document.getElementById("hair-2");
var hair3 = document.getElementById("hair-3");
var hair4 = document.getElementById("hair-4");
var hair5 = document.getElementById("hair-5");
var hair6 = document.getElementById("hair-6");
var hair7 = document.getElementById("hair-7");
var hair8 = document.getElementById("hair-8");
var hairchange = document.getElementById("hairchange");

// Obtener elementos HTML de las imágenes de los ojos de la mujer
var eyes1 = document.getElementById("eyes-1");
var eyes2 = document.getElementById("eyes-2");
var eyes3 = document.getElementById("eyes-3");
var eyes4 = document.getElementById("eyes-4");

// Definir rutas a las imágenes de los ojos de diferentes colores
var brownEyes = "/Images/Woman/Eyes/brown.png";
var greenEyes = "/Images/Woman/Eyes/green.png";
var blueEyes  = "/Images/Woman/Eyes/blue.png";
var blackEyes = "/Images/Woman/Eyes/black.png";

// Obtener elementos HTML de las imágenes de los lentes de la mujer
var notGlasses = document.getElementById("glasses-0");
var glasses    = document.getElementById("glasses-1");
var glasseschange = document.getElementById("glasseschange");

// Definir ruta a la imagen de los lentes
var glassess = "/Images/Woman/Glasses/glasses.png";

// Definir rutas a las imágenes de diferentes peinados de color marrón
var brown1 = "/Images/Woman/Hair/Brown/long1.png";
var brown2 = "/Images/Woman/Hair/Brown/long2.png";
var brown3 = "/Images/Woman/Hair/Brown/curly1.png";
var brown4 = "/Images/Woman/Hair/Brown/short3.png";
var brown5 = "/Images/Woman/Hair/Brown/pickedup.png";
var brown6 = "/Images/Woman/Hair/Brown/curly2.png";
var brown7 = "/Images/Woman/Hair/Brown/short2.png";
var brown8 = "/Images/Woman/Hair/Brown/short1.png";

// Obtener botones y secciones para cambiar la apariencia de la mujer
const btnHair = document.getElementById('btn-hair');
const btnGlasses = document.getElementById('btn-glasses');
const btnEyes = document.getElementById('btn-eyes');
const sectionHair = document.getElementById('hair-section');
const sectionGlasses = document.getElementById('glasses-section');
const sectionEyes = document.getElementById('eyes-section');


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

// Asignar funciones de clic a los elementos HTML de las imágenes de los ojos
eyes1.onclick = function(){
    eyeschange.src = blackEyes;
}

eyes2.onclick = function(){
    eyeschange.src = brownEyes;
}

eyes3.onclick = function(){
    eyeschange.src = greenEyes;
}

eyes4.onclick = function(){
    eyeschange.src = blueEyes;
}

// Asignar funciones de clic a los elementos HTML de las imágenes de las gafas quitar-poner
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

    hairImage.src = "/Images/Woman/Hair/" + color + "/" + newHair;
}

// Ocultar secciones al cargar la página
document.getElementById("eyes-section").style.display = "none";
document.getElementById("glasses-section").style.display = "none";

// Mostrar la sección de cabello y ocultar las demás al hacer clic en el botón de cabello
btnHair.addEventListener('click', () => {
    sectionHair.style.display = 'block';
    sectionGlasses.style.display = 'none';
    sectionEyes.style.display = 'none';
});

// Mostrar la sección de gafas y ocultar las demás al hacer clic en el botón de gafas
btnGlasses.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'block';
    sectionEyes.style.display = 'none';
});

// Mostrar la sección de ojos y ocultar las demás al hacer clic en el botón de ojos
btnEyes.addEventListener('click', () => {
    sectionHair.style.display = 'none';
    sectionGlasses.style.display = 'none';
    sectionEyes.style.display = 'block';
});

