// Obtener referencias a elementos HTML

var eyesfemale = document.getElementById("eyesfemale26");
var hairfemale = document.getElementById("hairfemale26");


// Obtener el color de ojos guardado en el Local Storage para  mujeres

var eyesColorFemale = localStorage.getItem("eyesColorFemale");

// Obtener el color y tipo de pelo guardado en el Local Storage para mujeres
var hairColorFemale = localStorage.getItem("hairColorFemale");

// Obtener la última parte de la ruta que contiene el color de ojos

  var eyesColorSuffixFemale = eyesColorFemale.substring(eyesColorFemale.lastIndexOf("/"));

// Obtener las dos últimas partes de la ruta que contiene el tipo y color de los ojos para  mujeres

  var hairPartsWoman = hairColorFemale.split("/");
  var hairColorWoman = hairPartsWoman[hairPartsWoman.length - 2];
  var hairTypeWoman = hairPartsWoman[hairPartsWoman.length - 1].split(".")[0];

  var eyesFemale = "/Images/Books/Page-26/Woman/Eyes" + eyesColorSuffixFemale;
  var hairFemale = "/Images/Books/Page-26/Woman/Hair/" + hairColorWoman + "/" + hairTypeWoman + ".png";

// Establecer la ruta completa en la imagen correspondiente para los ojos y el cabello
  eyesfemale.src = eyesFemale;
  hairfemale.src = hairFemale;

