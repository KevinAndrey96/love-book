<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Respuesta de Transacción</title>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #b7c3f3!important;
        margin: 0;
        padding: 20px;
      }

      .container {
        text-align: center;
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      h1 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
      }

      p {
        color: #666;
        font-size: 18px;
        margin-bottom: 40px;
      }

      .icon {
        font-size: 40px;
        margin-bottom: 20px;
      }

      .create-another {
        color: #666;
        font-size: 18px;
      }

      .create-another a {
        color: #333;
        text-decoration: none;
      }

      .create-another a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <i class="icon">🎉</i>
      <h1>Felicidades, tu libro está en camino</h1>
      <p>Gracias por elegirnos. El estado de tu transacción es: {{ $status }}</p>
      <div class="create-another">
        ¿Quieres crear otro libro? <a href="{{ url('/') }}">Haz clic aquí</a>
      </div>
    </div>
  </body>
  </html>
