<?php

include("libreriaNomina/calcularNomina.php");

$data = json_decode(file_get_contents('json/datos.json'), true);
$resultados = [];

foreach ($data as $empleado) {
    $nomina = new Nomina($empleado['nombre'], $empleado['sueldo']);
    $resultados[] = $nomina->obtenerResumen();
}

header('Content-Type: application/json');
echo json_encode($resultados, JSON_PRETTY_PRINT);
