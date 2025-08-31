<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Conversión de pulgadas a centímetros</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Conversión de pulgadas a centímetros</h1>

  <!-- Imagen ilustrativa -->
  <div class="imagen">
    <img src="pulgadas.png" alt="Ejemplo de pulgadas y centímetros">
  </div>

  <!-- Formulario HTML -->
  <form method="post">
    <label>Cantidad en pulgadas:</label>
    <input type="number" name="pulgadas" step="0.01" required>
    <button type="submit">Convertir</button>
  </form>

  <?php
  // Validar si se envió el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Capturar valor
      $pulgadas = $_POST["pulgadas"];

      // Validar dato ingresado
      if ($pulgadas > 0) {
          // Conversión (1 pulgada = 2.54 cm)
          $cm = $pulgadas * 2.54;

          // Mostrar resultado
          echo "<h2>Resultado</h2>";
          echo "$pulgadas pulgadas equivalen a " . round($cm, 2) . " cm";
      } else {
          echo "<p class='error'>La cantidad debe ser mayor a 0.</p>";
      }
  }
  ?>
</body>
</html>