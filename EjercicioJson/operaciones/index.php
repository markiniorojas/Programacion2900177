<?php

include('LibreriaOperaciones/Operaciones.php');


$operaciones = new Operaciones();


$datosOperaciones = [
    [
        "num1" => 10,
        "num2" => 20,
        "operacion" => "suma"
    ],
    [
        "num1" => 30,
        "num2" => 15,
        "operacion" => "resta"
    ],
    [
        "num1" => 5,
        "num2" => 4,
        "operacion" => "multiplicacion"
    ],
    [
        "num1" => 20,
        "num2" => 5,
        "operacion" => "division"
    ]
];

$resultados = [];


foreach ($datosOperaciones as $operacion) {
    if ($operacion['operacion'] === 'suma') {
        $resultado = $operaciones->calcularSuma($operacion['num1'], $operacion['num2']);
    } elseif ($operacion['operacion'] === 'resta') {
        $resultado = $operaciones->calcularResta($operacion['num1'], $operacion['num2']);
    } elseif ($operacion['operacion'] === 'multiplicacion') {
        $resultado = $operaciones->calcularMultiplicacion($operacion['num1'], $operacion['num2']);
    } elseif ($operacion['operacion'] === 'division') {
        $resultado = $operaciones->calcularDivision($operacion['num1'], $operacion['num2']);
    }

    $resultados[] = [
        "operacion" => $operacion['operacion'],
        "num1" => $operacion['num1'],
        "num2" => $operacion['num2'],
        "resultado" => $resultado
    ];
}


header('Content-Type: application/json');
echo json_encode($resultados, JSON_PRETTY_PRINT);
