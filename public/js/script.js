// {$(function () {
//     $("#register-link").click(function () {
//       $("#login-box").hide();
//       $("#register-box").show();
//     });
//     $("#login-link").click(function () {
//       $("#login-box").show();
//       $("#register-box").hide();
//     });
//     $("#forgot-link").click(function () {
//       $("#login-box").hide();
//       $("#forgot-box").show();
//     });
//     $("#back-link").click(function () {
//       $("#login-box").show();
//       $("#forgot-box").hide();
//     });
//   });

//   const registerForm = document.getElementById('register-form');


//   registerForm.addEventListener('submit', function(event) {
//     event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada
  
//     // Obtener la URL del formulario de registro
//     const url = registerForm.getAttribute('action');
  
//     // Obtener el método del formulario de registro (por ejemplo, POST)
//     const method = registerForm.getAttribute('method');
  
//     // Obtener los datos del formulario
//     const formData = new FormData(registerForm);
  
//     // Realizar la solicitud AJAX al servidor
//     fetch(url, {
//       method: method,
//       body: formData
//     })
//       .then(response => {
//         if (response.ok) {
//           // Redirigir a la página de inicio de sesión si la respuesta es exitosa
//           window.location.href = "/admin";
//         } else {
//           // Mostrar un mensaje de error en caso contrario
//           console.error('Error en el registro');
//         }
//       })
//       .catch(error => {
//         // Manejar cualquier error de la solicitud
//         console.error(error);
//       });
//   });

//   const loginForm = document.getElementById('login-form');

// loginForm.addEventListener('submit', function(event) {
//   event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada
  
//   const url = loginForm.getAttribute('action');
//   const method = loginForm.getAttribute('method');
  
//   const formData = new FormData(loginForm);
  
//   fetch(url, {
//     method: method,
//     body: formData
//   })
//     .then(response => response.json())
//     .then(data => {
//       console.log(data);
//       if (data.success) {
//         // El inicio de sesión fue exitoso, redirigir al usuario a la página deseada
//         window.location.href = "/dashboard"; // Reemplaza "/dashboard" con la ruta correcta
//       } else {
//         // El inicio de sesión falló, mostrar un mensaje de error o realizar cualquier otra ac