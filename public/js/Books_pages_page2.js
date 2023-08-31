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
var glassesFemalePathShort = "/img/books/page2/woman/glasses/glasses2.png";


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

  document.getElementById('btn-continue').addEventListener('click', function() {


    // Crear un FormData para almacenar los datos
    var formData = new FormData();

    // Obtener los nombres del localStorage
    var nameFemale = localStorage.getItem('nameFemale');
    var nameMale = localStorage.getItem('nameMale');

    // Agregar los nombres al FormData
    formData.append('nameFemale', nameFemale);
    formData.append('nameMale', nameMale);



    // Obtener el contenedor principal del contenido
    var mainContentElement = document.getElementById('product-step');


    // Clonar el contenedor principal para evitar modificar el original
    var clonedMainContentElement = mainContentElement.cloneNode(true);

    var colElement = clonedMainContentElement.querySelector('.col-12.text-center');
if (colElement) {
  // Eliminar el elemento div y su contenido del clon del contenido
  colElement.parentNode.removeChild(colElement);
}

    // Eliminar los botones y los modales del clon del contenido
    var buttons = clonedMainContentElement.querySelectorAll('button');
    buttons.forEach(function(button) {
      button.parentNode.removeChild(button);
    });

     var buttons = clonedMainContentElement.querySelectorAll('button.insert-before-btn, button.insert-after-btn');
  buttons.forEach(function(button) {
    button.parentNode.removeChild(button);
  });

  var pageNumbers = clonedMainContentElement.querySelectorAll('.page-number');
  pageNumbers.forEach(function(pageNumber) {
    pageNumber.parentNode.removeChild(pageNumber);
  });

    // Eliminar elementos con estilo display: none del clon del contenido
  var hiddenElements = clonedMainContentElement.querySelectorAll('[style*="display: none"]');
  hiddenElements.forEach(function(element) {
    element.parentNode.removeChild(element);
  });



    var modals = clonedMainContentElement.querySelectorAll('.modal');
    modals.forEach(function(modal) {
      modal.parentNode.removeChild(modal);
    });

     var pageControls = clonedMainContentElement.querySelectorAll('.page-controls');
  pageControls.forEach(function(pageControl) {
    pageControl.parentNode.removeChild(pageControl);
  });

  var buttonWrapper = clonedMainContentElement.querySelectorAll('.button-wrapper');
  buttonWrapper.forEach(function(wrapper) {
    wrapper.parentNode.removeChild(wrapper);
  });


    // Eliminar los estilos de los textos en el clon del contenido
    var texts = clonedMainContentElement.querySelectorAll('.page-text');
    texts.forEach(function(text) {
      text.removeAttribute('style');
    });

    var logo = clonedMainContentElement.querySelectorAll('.logo');
    logo.forEach(function(text) {
      text.removeAttribute('style');
    });






    // Obtener el contenido HTML del clon del contenedor principal
    var mainContentHTML = clonedMainContentElement.innerHTML;

    // Agregar el contenido al FormData
    formData.append('mainContent', mainContentHTML);



    // Imprimir en la consola el contenido enviado
    console.log('Contenido enviado:');
    console.log(mainContentHTML);
    console.log('-----------------------');



// Enviar la solicitud del libro
// Abrir modal
swal({
    title: "Guardando libro",
    text: "Por favor, no cierre la pagina hasta que el proceso finalice.",
    text: "Continúe con su pago en la siguiente pestaña. Antes de finalizar su pago, espere a que su libro haya sido guardado.",
    icon: "info",
    button: false,
    closeOnClickOutside: false,
    closeOnEsc: false,
  });

  // Redireccionar al formulario en una nueva ventana
  window.open("/form", "_blank");

  // Realizar solicitud para guardar el libro
  var request = new XMLHttpRequest();
  request.open('POST', '/guardar-libro');
  request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

  request.onreadystatechange = function() {
    if (request.readyState === XMLHttpRequest.DONE) {
      if (request.status === 200) {
        // La solicitud fue exitosa
        swal.close(); // Cerrar el modal
        swal("Éxito", "Tu libro ha sido guardado correctamente, ya puedes pagarlo", "success");
      } else {
        // La solicitud falló
        swal("Error", "Tu libro no pudo guardarse", "error");
      }
    }
  };

    request.send(formData);
  });


  // Obtener el ID de la portada
var selectedPageId = localStorage.getItem('selectedContent');

// Verificar si el ID de la portada es "frontpage3"
if (selectedPageId === 'frontpage3') {
  // Mostrar el texto "Feliz Cumpleaños"
  document.getElementById('birthdayText').style.display = 'block';
} else {
  // Ocultar el texto "Feliz Cumpleaños"
  document.getElementById('birthdayText').style.display = 'none';
}
