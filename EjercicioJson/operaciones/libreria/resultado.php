<?php
include('controlOperaciones.php');

$operaciones = new controlOperaciones();

$operaciones->setNumero1(10);
$operaciones->setNumero2(20);

$dataJson = [
    "suma" => $operaciones->sumar(),
    "resta" => $operaciones->restar(),
    "multiplicacion" => $operaciones->multiplicar(),
    "division" => $operaciones->dividir(),
];

header('Content-Type: application/json');
echo json_encode($dataJson);
?>
