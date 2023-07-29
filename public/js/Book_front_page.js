function selectContainerContent(containerId) {
    const container = document.getElementById(containerId);
    const containers = document.getElementsByClassName('page-wrapper');

    // Eliminar clase "select" de todos los contenedores y el borde de las imágenes
    for (let i = 0; i < containers.length; i++) {
      containers[i].classList.remove('select');
      const image = containers[i].querySelector('.page-img');
      if (image) {
        image.style.border = 'none';
      }
    }

    // Agregar clase "select" al contenedor seleccionado
    container.classList.add('select');

    // Agregar borde a la imagen dentro del contenedor seleccionado
    const selectedImage = container.querySelector('.page-img');
    if (selectedImage) {
      selectedImage.style.border = '2px solid red';

    }

    // Obtener el contenido del contenedor seleccionado
    const selectedContent = container.innerHTML;

    // Eliminar el borde del contenedor antes de guardar el contenido en el LocalStorage
    container.style.border = 'none';

    // Guardar el contenido en el LocalStorage
    localStorage.setItem('selectedContent', selectedContent);
  }

  // Obtener el contenido del LocalStorage
  var selectedContent = localStorage.getItem('selectedContent');

  // Mostrar el contenido en el elemento deseado
  var displayContainer = document.getElementById('first-page-wrapper');
  displayContainer.innerHTML = selectedContent;

  // Obtener el ID de la portada
  var selectedPageId = document.getElementById('first-page-wrapper').getAttribute('id');

  // Mostrar u ocultar el texto "Feliz Cumpleaños" según el contenido guardado
  if (selectedContent.includes('HAPPY BIRTHDAY')) {
    // Mostrar el texto "Feliz Cumpleaños"
    var birthdayText = displayContainer.querySelector('.birthday-text');
    if (birthdayText) {
      birthdayText.style.display = 'block';
    }
  } else {
    // Ocultar el texto "Feliz Cumpleaños"
    var birthdayText = displayContainer.querySelector('.birthday-text');
    if (birthdayText) {
      birthdayText.style.display = 'none';
    }
  }

  if (selectedContent.includes('HAPPY ANIVERSARY')) {
    // Mostrar el texto "Feliz Cumpleaños"
    var birthdayText = displayContainer.querySelector('.aniversary-text');
    if (birthdayText) {
      birthdayText.style.display = 'block';
    }
  } else {
    // Ocultar el texto "Feliz Cumpleaños"
    var aniversaryText = displayContainer.querySelector('.aniversary-text');
    if (aniversaryText) {
      aniversaryText.style.display = 'none';
    }
  }

  // Eliminar el borde del contenedor
  displayContainer.classList.remove('select');
  var selectedImage = displayContainer.querySelector('.page-img');
  if (selectedImage) {
    selectedImage.style.border = 'none';
  }
