<?php

include('areas.php');

$valores = new areas();

$valores->setLado(4);
$valores->setBaser(3);
$valores->setAlturar(6);
$valores->setBaset(7);
$valores->setAlturat(8);




$dataJson = [
    'cuadrado' => $valores->areaCuadrados(),
    'rectangulo' => $valores->areaRectangulos(),
    'triangulo' => $valores->areaTriangulos(),
];

header('Content-Type: application/json');
echo json_encode($dataJson);
?>