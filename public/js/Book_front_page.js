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

var glassesFemalePath = "/images/frontpage/woman/glasses/glasses.png";
var glassesMalePath = "/images/frontpage/man/glasses/glasses.png";

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
  var eyesMale = "/images/frontpage/man/eyes" + eyesColorSuffixMale;
  var eyesFemale = "/images/frontpage/woman/eyes" + eyesColorSuffixFemale;
  var hairMale = "/images/frontpage/man/hair/" + hairColorMan + "/" + hairTypeMan + ".png";
  var hairFemale = "/images/frontpage/woman/hair/" + hairColorWoman + "/" + hairTypeWoman + ".png";

  // Mostrar o esconder la imagen de la barba en función del valor almacenado en el Local Storage

  if (beardDisplay === "none") {
    beard.style.display = "none";
  } else if (beardColorMale) {
    // Obtener la ruta de la imagen de la barba

    var beardParts = beardColorMale.split("/");
    var beardColor = beardParts[beardParts.length - 2];
    var beardType = beardParts[beardParts.length - 1].split(".")[0];
    var beardMale = "/images/frontpage/man/beard/" + beardColor + "/" + beardType + ".png";
    beard.style.display = "block";
    beard.src = beardMale;
  } else {
    beard.style.display = "none";
  }

  if (nameMale && nameFemale) {
  titleElement.textContent = ` ${nameMale} y ${nameFemale}`;
  }

// Establecer la ruta completa en la imagen correspondiente para los ojos y el cabello
  eyesmale.src = eyesMale;
  eyesfemale.src = eyesFemale;
  hairmale.src = hairMale;
  hairfemale.src = hairFemale;




