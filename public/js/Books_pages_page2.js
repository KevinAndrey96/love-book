// Obtener referencias a elementos HTML

var eyesmale = document.getElementById("eyesmale2");
var eyesfemale = document.getElementById("eyesfemale2");
var hairmale = document.getElementById("hairmale2");
var hairfemale = document.getElementById("hairfemale2");
var glassesmale = document.getElementById("glassesmale2");
var glassesfemale = document.getElementById("glassesfemale2");
var beard = document.getElementById("beardmale2");

// Establecer la ruta de la imagen de las gafas para hombres y mujeres

var glassesFemalePath = "/img/books/page2/woman/glasses/glasses.png";
var glassesMalePath = "/img/books/page2/man/glasses/glasses.png";

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
  var eyesMale = "/img/books/page2/man/eyes" + eyesColorSuffixMale;
  var eyesFemale = "/img/books/page2/woman/eyes" + eyesColorSuffixFemale;
  var hairMale = "/img/books/page2/man/hair/" + hairColorMan + "/" + hairTypeMan + ".png";
  var hairFemale = "/img/books/page2/woman/hair/" + hairColorWoman + "/" + hairTypeWoman + ".png";
  // Mostrar o esconder la imagen de la barba en función del valor almacenado en el Local Storage

  if (beardDisplay === "none") {
    beard.style.display = "none";
  } else if (beardColorMale) {
    // Obtener la ruta de la imagen de la barba

    var beardParts = beardColorMale.split("/");
    var beardColor = beardParts[beardParts.length - 2];
    var beardType = beardParts[beardParts.length - 1].split(".")[0];
    var beardMale = "/img/books/page2/man/beard/" + beardColor + "/" + beardType + ".png";
    beard.style.display = "block";
    beard.src = beardMale;
  } else {
    beard.style.display = "none";
  }

// Establecer la ruta completa en la imagen correspondiente para los ojos y el cabello
  eyesmale.src = eyesMale;
  eyesfemale.src = eyesFemale;
  hairmale.src = hairMale;
  hairfemale.src = hairFemale;

  document.getElementById('guardarLibroBtn').addEventListener('click', function() {
    // Crear un FormData para almacenar los datos
    var formData = new FormData();

    // Definir la cantidad total de páginas
    var totalPages = 44; // Actualiza esto con la cantidad total de páginas que deseas guardar

    // Obtener los nombres del localStorage
    var nameFemale = localStorage.getItem('nameFemale');
    var nameMale = localStorage.getItem('nameMale');

    // Obtener el contenido de localStorage.selectedContent
    var selectedContent = localStorage.getItem('selectedContent');

    // Agregar los nombres y el contenido seleccionado al FormData
    formData.append('nameFemale', nameFemale);
    formData.append('nameMale', nameMale);
    formData.append('selectedContent', selectedContent);

    // Recorrer las páginas y agregar su contenido al FormData
    for (var i = 1; i <= totalPages; i++) {
      var pageId = 'page' + i;
      var pageElement = document.getElementById(pageId);

      if (pageElement) {
        // Clonar el elemento de la página para evitar modificar el original
        var clonedPageElement = pageElement.cloneNode(true);

        // Eliminar los botones y los modales del clon de la página
        var buttons = clonedPageElement.querySelectorAll('button');
        buttons.forEach(function(button) {
          button.parentNode.removeChild(button);
        });

        var modals = clonedPageElement.querySelectorAll('.modal');
        modals.forEach(function(modal) {
          modal.parentNode.removeChild(modal);
        });

        // Obtener el contenido HTML del clon de la página
        var pageContent = clonedPageElement.outerHTML;

        // Agregar el contenido de la página al FormData
        formData.append(pageId, pageContent);

        // Imprimir en la consola el contenido enviado en la página
        console.log('Contenido enviado en ' + pageId + ':');
        console.log(pageContent);
        console.log('-----------------------');
      }
    }

    // Realizar la solicitud AJAX
    var request = new XMLHttpRequest();
    request.open('POST', '/guardar-libro');
    request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

    request.onreadystatechange = function() {
      if (request.readyState === XMLHttpRequest.DONE) {
        if (request.status === 200) {
          // La solicitud fue exitosa
          alert('El libro se guardó correctamente.');
        } else {
          // Ocurrió un error en la solicitud
          alert('Hubo un error al guardar el libro.');
        }
      }
    };

    request.send(formData);
  });
