<?php

include('nomina.php');

$valores = new nomina();

$valores->setTotalDias(30);
$valores->setValorDia(30000);




$dataJson = [
    'salario' => $valores->calSalario(),
    'salud' => $valores->calSalud(),
    'pension' => $valores->calPension(),
    'arl' => $valores->calArl(),
    'descuento' => $valores->descuento(),
    'subTransporte' => $valores->calSubTransporte(),
    'retencion' => $valores->calRetencion(),
    'pagoTotal' => $valores->calPagoTotal(),
];

header('Content-Type: application/json');
echo json_encode($dataJson);
?>