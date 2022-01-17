<?php

spl_autoload_register(function($class){
    require_once('./includes/class.'.$class.'.php');
});

$vehiculo = new Vehiculo("rojo", 450);

var_dump($vehiculo);
echo $vehiculo->circula();

echo "<br>";

echo $vehiculo->aniadir_persona(50);

echo "<br>";

echo $vehiculo->aniadir_persona(60);

echo $vehiculoRojo->__get("peso");





?>