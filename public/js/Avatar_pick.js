window.onload = function() {
    localStorage.clear();
};

// Función para guardar los nombres en el localStorage
function guardarNombres() {
    var nameFemale = document.getElementById('nameFemale').value;
    var nameMale = document.getElementById('nameMale').value;
  
    if (nameFemale === '' || nameMale === '') {
      // Mostrar alerta si algún nombre no está escrito
      swal('Error', 'Por favor, ingrese un nombre para ambos avatares', 'error');
    } else {
      // Guardar los nombres en el localStorage
      localStorage.setItem('nameFemale', nameFemale);
      localStorage.setItem('nameMale', nameMale);
    }
  }
  
  // Evento para ejecutar la función al hacer click en los botones
  document.getElementById('btn1').addEventListener('click', guardarNombres);
  document.getElementById('btn2').addEventListener('click', guardarNombres);
  
  // Evento para ejecutar la función al hacer click en las imágenes
  document.getElementById('female-section').addEventListener('click', function() {
    guardarNombres();
    window.location.href = "/avatar-female";
  });
  
  document.getElementById('male-section').addEventListener('click', function() {
    guardarNombres();
    window.location.href = "/avatar-male";
  });
  