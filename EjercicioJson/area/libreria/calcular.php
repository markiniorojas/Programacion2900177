<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('valores.php');
include('areas.php');


$data = json_decode(file_get_contents("php://input"), true);


if (!isset($data['lado']) || !isset($data['base']) || !isset($data['altura'])) {
    echo json_encode(['error' => 'Faltan datos.']);
    exit;
}

$valores = new Valores($data['lado'], $data['base'], $data['altura']);
$Areas = new Areas($valores);
$response = [];


$response['cuadrado'] = $Areas->areaCuad();
$response['rectangulo'] = $Areas->areaRect();
$response['triangulo'] = $Areas->areaTriangulo();

header('Access-Control-Allow-Origin: *');
echo json_encode($response);
?>

