<?php

include("libreria/calcularNomina.php");


$nomina = null;
$sueldo = 0;
$arl = 0;
$pension = 0;
$salud = 0;
$total_descuentos = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $diasTrabajados = $_POST['diasTrabajados'];
    $valorDia = $_POST['valorDia'];

  
    $nomina = new Nomina($diasTrabajados, $valorDia);

   
    $sueldo = $nomina->getSueldo();
    $arl = $nomina->getArl();
    $pension = $nomina->getPension();
    $salud = $nomina->getSalud();
    $total_descuentos = $nomina->getTotalDescuentos();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Nómina</title>
</head>
<body>
    <h1>Cálculo de Nómina</h1>


    <form method="POST" action="">
        <label for="diasTrabajados">Ingrese sus días trabajados:</label>
        <input type="number" name="diasTrabajados" id="diasTrabajados" required>
        <br><br>
        <label for="valorDia">Ingrese el valor por día:</label>
        <input type="number" name="valorDia" id="valorDia" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultados</h2>
        <p>Sueldo: $<?= number_format($sueldo, 2) ?></p>
        <p>ARL: $<?= number_format($arl, 2) ?></p>
        <p>Pensión: $<?= number_format($pension, 2) ?></p>
        <p>Salud: $<?= number_format($salud, 2) ?></p>
        <p>Total Descuentos: $<?= number_format($total_descuentos, 2) ?></p>
    <?php endif; ?>
</body>
</html>
