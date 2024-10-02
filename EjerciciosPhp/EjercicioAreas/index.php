<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Áreas</title>
</head>
<body>
    <h1>Calculadora de Áreas de Figuras</h1>
    <form method="POST" action="">
        
        <label for="lado">Ingrese el lado para cuadrado:</label>
        <input type="number" name="lado" id="lado" step="0.01" min="0">
        <br><br>

        <label for="baser">Ingrese la base para el rectángulo:</label>
        <input type="number" name="baser" id="baser" min="0">
        <br><br>

        <label for="alturar">Ingrese la altura para el rectángulo:</label>
        <input type="number" name="alturar" id="alturar" min="0">
        <br><br>

        <label for="baset">Ingrese la base para el triángulo:</label>
        <input type="number" name="baset" id="baset" min="0">
        <br><br>

        <label for="alturat">Ingrese la altura para el triángulo:</label>
        <input type="number" name="alturat" id="alturat" min="0">
        <br><br>

        <input type="submit" value="Calcular Área">
    </form>

    <?php
  
    include("libreria/calcularAreas.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $lado = $_POST['lado'] ?? 0; 
        $baser = $_POST['baser'] ?? 0; 
        $alturar = $_POST['alturar'] ?? 0; 
        $baset = $_POST['baset'] ?? 0; 
        $alturat = $_POST['alturat'] ?? 0; 

        
        $area = 0;

       
        if ($lado > 0) {
            $figura = new Cuadrado($lado);
            $area = $figura->calcularArea();
            echo "<h2>El área del cuadrado es: " . $area . "</h2>";
        }

        if ($baser > 0 && $alturar > 0) {
            $figura = new Rectangulo($baser, $alturar);
            $area = $figura->calcularArea();
            echo "<h2>El área del rectángulo es: " . $area . "</h2>";
        }

        if ($baset > 0 && $alturat > 0) {
            $figura = new Triangulo($baset, $alturat);
            $area = $figura->calcularArea();
            echo "<h2>El área del triángulo es: " . $area . "</h2>";
        }
    }
    ?>
</body>
</html>
