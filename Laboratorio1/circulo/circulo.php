<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Área y perímetro de un círculo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Área y perímetro de un círculo</h1>

  <div class=imagen>
    <img src="circulo.png" alt="Área, perímetro y diámetro de un círculo.">
  </div>
  
  <!-- Formulario que envía el radio al mismo archivo (POST) -->
  <form method="post">
    <label>Radio (cm):</label>
    <input type="number" name="radio" step="0.01" required>
    <button type="submit">Calcular</button>
  </form>

  <?php
  // Verificar si el formulario fue enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // 1. Capturar el valor del radio enviado por el usuario
      $radio = $_POST["radio"];

      // 2. Validar que el radio sea mayor que 0 (así evitamos errores inesperados)
      if ($radio > 0) {
          // 3. Calcular el área (π * r^2)
          $area = M_PI * pow($radio, 2);

          // 4. Calcular el perímetro (2 * π * r)
          $perimetro = 2 * M_PI * $radio;

          // 5. Mostrar resultados (redondeados a 2 decimales)
          echo "<h2>Resultados</h2>";
          echo "Radio: $radio cm<br>";
          echo "Área: " . round($area, 2) . " cm²<br>";
          echo "Perímetro: " . round($perimetro, 2) . " cm";
      } else {
          // Mensaje de error si el radio no es válido
          echo "<p class='error'>El radio debe ser mayor a 0.</p>";
      }
  }
  ?>
</body>
</html>