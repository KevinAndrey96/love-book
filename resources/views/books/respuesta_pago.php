<!DOCTYPE html>
<html>
<head>
  <title>Respuesta de Transacción</title>
</head>
<body>
  <h1>Respuesta de Transacción</h1>

  <script>
    // Función para obtener el valor de un parámetro en la URL
    function getParameterByName(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
          results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Obtener el valor del parámetro 'id' de la URL
    var transactionId = getParameterByName('id');

    // Consultar el resultado de la transacción mediante el API de Wompi
    if (transactionId) {
      var apiUrl = 'https://production.wompi.co/v1/transactions/' + transactionId;

      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          // Aquí puedes procesar la respuesta de la transacción
          console.log(data);
          // Por ejemplo, podrías mostrar el estado de la transacción en la página
          var status = data.data.status;
          document.body.innerHTML += '<p>Estado de la transacción: ' + status + '</p>';
        })
        .catch(error => {
          // Manejo de errores
          console.error(error);
        });
    }
  </script>
</body>
</html>

