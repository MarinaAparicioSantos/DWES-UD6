<?php

include_once "includes/class.Vehiculo.php";

$vehiculo = new Vehiculo("rojo", 450);


echo $vehiculo->circula();

echo "<br>";

echo $vehiculo->aniadir_persona(50);

echo "<br>";

echo $vehiculo->aniadir_persona(60);


?>