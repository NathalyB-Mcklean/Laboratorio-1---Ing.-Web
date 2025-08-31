<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora</title>
  <!-- Enlace al archivo de estilos -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Calculadora</h1>

  <!-- Formulario HTML para capturar datos -->
  <form method="post">
    <!-- Primer número -->
    <label for="n1">Número 1:</label>
    <input type="number" step="0.01" name="n1" id="n1" required><br><br>

    <!-- Segundo número -->
    <label for="n2">Número 2:</label>
    <input type="number" step="0.01" name="n2" id="n2"><br><br>

    <!-- Selector de operación -->
    <label for="op">Operación:</label>
    <select name="op" id="op" required>
      <option value="sumar">Sumar</option>
      <option value="restar">Restar</option>
      <option value="multiplicar">Multiplicar</option>
      <option value="redondear">Redondear</option>
    </select><br><br>

    <!-- Número de decimales para mostrar -->
    <label for="dec">Decimales:</label>
    <input type="number" name="dec" id="dec" min="0" max="10" value="2"><br><br>

    <!-- Botón para enviar el formulario -->
    <button type="submit">Calcular</button>
  </form>

  <?php
  // Verificar si el formulario fue enviado
  if ($_SERVER["REQUEST_METHOD"] === "POST") {

      // Capturar valores del formulario
      $n1  = $_POST["n1"];         // primer número
      $n2  = $_POST["n2"];         // segundo número
      $op  = $_POST["op"];         // operación seleccionada
      $dec = (int)$_POST["dec"];   // cantidad de decimales

      // Validar que los datos sean correctos
      // Nota: para "redondear" solo se usa el primer número
      if (is_numeric($n1) && ($op === "redondear" || is_numeric($n2))) {

          // Variable para guardar el resultado
          switch ($op) {
              case "sumar":
                  $res = $n1 + $n2; // suma
                  break;
              case "restar":
                  $res = $n1 - $n2; // resta
                  break;
              case "multiplicar":
                  $res = $n1 * $n2; // multiplicación
                  break;
              case "redondear":
                  $res = round($n1, $dec); // redondeo de n1
                  break;
          }

          // Mostrar resultado formateado con el número de decimales elegido
          echo "<div class='resultado'>Resultado: " . number_format($res, $dec, ".", "") . "</div>";

      } else {
          // Mensaje de error si los datos no son válidos
          echo "<div class='resultado error'>  Datos inválidos</div>";
      }
  }
  ?>
</body>
</html>