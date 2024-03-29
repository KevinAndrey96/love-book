// Obtener referencias a elementos HTML

var eyesmale = document.getElementById("eyesmalee2");
var eyesfemale = document.getElementById("eyesfemalee2");
var hairmale = document.getElementById("hairmalee2");
var hairfemale = document.getElementById("hairfemalee2");
var glassesmale = document.getElementById("glassesmalee2");
var glassesfemale = document.getElementById("glassesfemalee2");
var beard = document.getElementById("beardd2");
var titleElement = document.getElementById('names2');


// Establecer la ruta de la imagen de las gafas para hombres y mujeres

var glassesFemalePath = "/img/frontpage/frontpage3/woman/glasses/glasses.png";
var glassesMalePath = "/img/frontpage/frontpage3/man/glasses/glasses.png";

var glassesFemalePathShort = "/img/frontpage/frontpage3/woman/glasses/glasses2.png"; // Nueva ruta para gafas2


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

if (glassesFemale === "block") {
    glassesfemale.style.display = "block";
} else {
    glassesfemale.style.display = "none";
}

if (hairColorFemale && hairColorFemale.includes("short1")) {
    glassesfemale.src = glassesFemalePathShort; // Usar la ruta de gafas2
} else {
    glassesfemale.src = glassesFemalePath; // Usar la ruta de gafas original
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
  var beardColor = beardParts[beardParts.length - 3];
  var beardType = beardParts[beardParts.length - 1].split(".")[0];

  // Obtener el color y tipo de barba para hombres
  var eyesMale = "/img/frontpage/frontpage3/man/eyes" + eyesColorSuffixMale;
  var eyesFemale = "/img/frontpage/frontpage3/woman/eyes" + eyesColorSuffixFemale;
  var hairMale = "/img/frontpage/frontpage3/man/hair/" + hairColorMan + "/" + hairTypeMan + ".png";
  var hairFemale = "/img/frontpage/frontpage3/woman/hair/" + hairColorWoman + "/" + hairTypeWoman + ".png";

  // Mostrar o esconder la imagen de la barba en función del valor almacenado en el Local Storage

  if (beardDisplay === "none") {
    beard.style.display = "none";
  } else if (beardColorMale) {
    // Obtener la ruta de la imagen de la barba

    var beardParts = beardColorMale.split("/");
    var beardColor = beardParts[beardParts.length - 2];
    var beardType = beardParts[beardParts.length - 1].split(".")[0];
    var beardMale = "/img/frontpage/frontpage3/man/beard/" + beardColor + "/" + beardType + ".png";
    beard.style.display = "block";
    beard.src = beardMale;
  } else {
    beard.style.display = "none";
  }

  if (nameMale && nameFemale) {
    titleElement.textContent = ` ${nameMale} & ${nameFemale}`;
    }


    document.getElementById('btn-continue').addEventListener('click', checkContainerSelection);

function checkContainerSelection(event) {
  event.preventDefault(); // Evitar la redirección predeterminada

  // Verificar si hay un contenedor seleccionado
  const selectedContainer = document.querySelector('.page-wrapper.select');

  if (!selectedContainer) {
    swal('OYE', 'Debes elegir una portada', 'error');
    return; // Detener la ejecución de la función
  }

  window.location.href = "/books-pages"
}




// Establecer la ruta completa en la imagen correspondiente para los ojos y el cabello
  eyesmale.src = eyesMale;
  eyesfemale.src = eyesFemale;
  hairmale.src = hairMale;
  hairfemale.src = hairFemale;
