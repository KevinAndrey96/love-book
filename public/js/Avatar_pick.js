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
    return false; // No se guardaron los nombres
  } else {
    // Guardar los nombres en el localStorage
    localStorage.setItem('nameFemale', nameFemale);
    localStorage.setItem('nameMale', nameMale);
    return true; // Nombres guardados correctamente
  }
}

// Evento para ejecutar la función al hacer clic en los botones
document.getElementById('btn1').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar la redirección por defecto
  if (guardarNombres()) {
    window.location.href = "/avatar-female";
  }
});
document.getElementById('btn2').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar la redirección por defecto
  if (guardarNombres()) {
    window.location.href = "/avatar-male";
  }
});

// Evento para ejecutar la función al hacer clic en las imágenes
document.getElementById('female-section').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar la redirección por defecto
  if (guardarNombres()) {
    window.location.href = "/avatar-female";
  }
});
document.getElementById('male-section').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar la redirección por defecto
  if (guardarNombres()) {
    window.location.href = "/avatar-male";
  }
});