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
    
    include("libreriaArea/calcularAreas.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $lado = $_POST['lado'] ?? 0; 
        $baser = $_POST['baser'] ?? 0;
        $alturar = $_POST['alturar'] ?? 0; 
        $baset = $_POST['baset'] ?? 0; 
        $alturat = $_POST['alturat'] ?? 0; 

      
        $resultados = [];

       
        if ($lado > 0) {
            $cuadrado = new Cuadrado($lado);
            $resultados['Cuadrado'] = $cuadrado->calcularArea();
        }

      
        if ($baser > 0 && $alturar > 0) {
            $rectangulo = new Rectangulo($baser, $alturar);
            $resultados['Rectángulo'] = $rectangulo->calcularArea();
        }

      
        if ($baset > 0 && $alturat > 0) {
            $triangulo = new Triangulo($baset, $alturat);
            $resultados['Triángulo'] = $triangulo->calcularArea();
        }

       
        echo "<h2>Resultados:</h2>";
        foreach ($resultados as $figura => $area) {
            echo "<p>El área del $figura es: $area</p>";
        }

      
        if (!empty($resultados)) {
            $jsonFilePath = 'json/resultados.json';
            file_put_contents($jsonFilePath, json_encode($resultados, JSON_PRETTY_PRINT));
            echo "<h2>Resultados guardados en JSON en: $jsonFilePath</h2>";
        }
    }
    ?>
</body>
</html>
