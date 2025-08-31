<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Validación de edad</h1>

  <!-- Formulario HTML -->
  <form method="post">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label>Edad:</label>
    <input type="number" name="edad" min="1" required><br><br>

    <button type="submit">Enviar</button>
  </form>

<?php
$nombre = '';
$edad = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    if (isset($_POST["edad"])) {
        $edad = $_POST["edad"];
    }

    if ($edad !== '' && is_numeric($edad)) {
        if ($edad >= 18) {
               echo "<script>alert('Hola $nombre, eres mayor de edad. Puedes votar en las próximas elecciones.');</script>";
        } else {
            echo "<script>alert('Hola $nombre, aún no eres mayor de edad.');</script>";
        }
    } else {
        echo "<script>alert('Edad no válida.');</script>";
    }
}
?>


</body>
</html>