<?php

include_once "includes/class.Vehiculo.php";
include_once "includes/class.Cuatro_ruedas.php";

$coche2 = new Cuatro_ruedas(4,"azul",500);

var_dump($coche2);

 $coche2->repintar("rosa");

 var_dump($coche2);
?>