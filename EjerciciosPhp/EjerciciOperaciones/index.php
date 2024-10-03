<?php
  include ("./libreria/numeros.php");
  include ("./libreria/operaciones.php");

  $numUno = new Numero (10);
  $numDos = new Numero (5);
  $ControlOperaciones = new ControlOperaciones($numUno,$numDos) 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
     echo "suma: ". $ControlOperaciones->sumar(). "<br>";
     echo "restar: ". $ControlOperaciones->restar(). "<br>";
     echo "multiplicar: ". $ControlOperaciones->multiplicar(). "<br>";
     echo "division: ". $ControlOperaciones->dividir()."<br>";
        
     ?>
</body>
</html>