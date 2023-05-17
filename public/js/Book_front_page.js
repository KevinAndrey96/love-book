

  function selectContainerContent(containerId) {
    const container = document.getElementById(containerId);
    const containers = document.getElementsByClassName('page-wrapper');

    // Eliminar clase "select" de todos los contenedores
    for (let i = 0; i < containers.length; i++) {
      containers[i].classList.remove('select');
    }

    // Agregar clase "select" al contenedor seleccionado
    container.classList.add('select');

    // Obtener el contenido del contenedor seleccionado
    const selectedContent = container.innerHTML;

    // Guardar el contenido en el LocalStorage
    localStorage.setItem('selectedContent', selectedContent);
  }

  // Obtener el contenido del LocalStorage
const selectedContent = localStorage.getItem('selectedContent');

// Mostrar el contenido en el elemento deseado
const displayContainer = document.getElementById('first-page-wrapper');
displayContainer.innerHTML = selectedContent;



