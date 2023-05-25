  // Obtener el contenido del LocalStorage
  var selectedContent = localStorage.getItem('selectedContent');

  // Mostrar el contenido en el elemento deseado
  var displayContainer = document.getElementById('first-page-wrapper');
  displayContainer.innerHTML = selectedContent;



  document.getElementById("guardarDatos").addEventListener("submit", function() {
    event.preventDefault(); // Evita que se realice la acción predeterminada del formulario

    // Realiza cualquier validación adicional que necesites antes de enviar los datos

    // Envía los datos del formulario mediante Ajax
    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open(this.method, this.action, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Se ejecuta cuando la solicitud Ajax es exitosa
            alert("La información se ha enviado correctamente.");
        } else {
            // Se ejecuta cuando ocurre un error en la solicitud Ajax
            alert("Ha ocurrido un error al enviar la información.");
        }
    };
    xhr.send(formData);
});

  document.getElementById('guardarDatos').addEventListener('click', function() {
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

    var modals = clonedMainContentElement.querySelectorAll('.modal');
    modals.forEach(function(modal) {
      modal.parentNode.removeChild(modal);
    });

    // Eliminar los estilos de los textos en el clon del contenido
    var texts = clonedMainContentElement.querySelectorAll('.page-text');
    texts.forEach(function(text) {
      text.removeAttribute('style');
    });

    var scripts = clonedMainContentElement.querySelectorAll('script');
    scripts.forEach(function(script) {
      script.parentNode.removeChild(script);
    });



    // Obtener el contenido HTML del clon del contenedor principal
    var mainContentHTML = clonedMainContentElement.innerHTML;

    // Agregar el contenido al FormData
    formData.append('mainContent', mainContentHTML);



    // Imprimir en la consola el contenido enviado
    console.log('Contenido enviado:');
    console.log(mainContentHTML);
    console.log('-----------------------');

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

