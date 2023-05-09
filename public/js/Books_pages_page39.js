// Obtener referencias a elementos HTML

var eyesmale = document.getElementById("eyesmale39");
var hairmale = document.getElementById("hairmale39");
var glassesmale = document.getElementById("glassesmale39");
var beard = document.getElementById("beardmale39");

// Establecer la ruta de la imagen de las gafas para hombres

var glassesMalePath = "/images/books/page39/man/glasses/glasses.png";

// Obtener el color de ojos guardado en el Local Storage para hombres

var eyesColorMale = localStorage.getItem("eyesColorMale");

// Obtener el color y tipo de pelo guardado en el Local Storage para hombres
var hairColorMale = localStorage.getItem("hairColorMale");

// Obtener las gafas guardadas en el Local Storage para hombres

var glassesMale = localStorage.getItem("glassesMale");

// Obtener el color y tipo de barba guardado en el Local Storage para hombres

var beardColorMale = localStorage.getItem("beardColorMale");
var beardDisplay = localStorage.getItem("beardDisplay");


// Mostrar las gafas en el elemento del DOM correspondiente según lo que está guardado en el Local Storage

  if (glassesMale === "block") {
    glassesmale.style.display = "block";
    glassesmale.src = glassesMalePath;
  } else {
    glassesmale.style.display = "none";
  }

  // Obtener la última parte de la ruta que contiene el color de ojos

  var eyesColorSuffixMale = eyesColorMale.substring(eyesColorMale.lastIndexOf("/"));

// Obtener las dos últimas partes de la ruta que contiene el tipo y color de los ojos para hombres y mujeres

  var hairPartsMan = hairColorMale.split("/");
  var hairColorMan = hairPartsMan[hairPartsMan.length - 2];
  var hairTypeMan = hairPartsMan[hairPartsMan.length - 1].split(".")[0];

  var beardParts = beardColorMale.split("/");
  var beardColor = beardParts[beardParts.length - 2];
  var beardType = beardParts[beardParts.length - 1].split(".")[0];

  // Obtener el color y tipo de barba para hombres
  var eyesMale = "/images/books/page39/man/eyes" + eyesColorSuffixMale;
  var hairMale = "/images/books/page39/man/hair/" + hairColorMan + "/" + hairTypeMan + ".png";

  // Mostrar o esconder la imagen de la barba en función del valor almacenado en el Local Storage

  if (beardDisplay === "none") {
    beard.style.display = "none";
  } else if (beardColorMale) {
    // Obtener la ruta de la imagen de la barba

    var beardParts = beardColorMale.split("/");
    var beardColor = beardParts[beardParts.length - 2];
    var beardType = beardParts[beardParts.length - 1].split(".")[0];
    var beardMale = "/images/books/page39/man/beard/" + beardColor + "/" + beardType + ".png";
    beard.style.display = "block";
    beard.src = beardMale;
  } else {
    beard.style.display = "none";
  }


// Establecer la ruta completa en la imagen correspondiente para los ojos y el cabello
  eyesmale.src = eyesMale;
  hairmale.src = hairMale;

