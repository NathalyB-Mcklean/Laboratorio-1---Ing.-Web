<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Formulario</h1>

  <!-- Formulario HTML -->
  <form method="post">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label>Edad:</label>
    <input type="number" name="edad" min="1" required><br><br>

    <button type="submit">Enviar</button>
  </form>

  <?php
  // Procesar el formulario cuando se envíe
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = $_POST["nombre"];
      $edad = $_POST["edad"];

    echo "<script>alert('Formulario enviado con éxito. Hola $nombre, registramos que tienes $edad años.');</script>";

  }
  ?>
</body>
</html>
