<?php
include('valores.php');
include('nomina.php');

$data = json_decode(file_get_contents("php://input"), true);
if (!isset($data['diasTrabajados']) || !isset($data['valorDia'])) {
    echo json_encode(['error' => 'Faltan datos.']);
    exit;
}

$valores = new Datos($data['diasTrabajados'], $data['valorDia']);
$nomina = new Nomina($valores);

$response = [
    'salario' => $nomina->calSalario(),
    'salud' => $nomina->calSalud(),
    'pension' => $nomina->calPension(),
    'arl' => $nomina->calArl(),
    'descuento' => $nomina->descuento(),
    'subTransporte' => $nomina->calSubTransporte(),
    'retencion' => $nomina->calRetencion(),
    'pagoTotal' => $nomina->calPagoTotal(),
];

header('Access-Control-Allow-Origin: *');
echo json_encode($response);
?>