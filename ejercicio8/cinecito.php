<?php

include "includes/class.Dimensiones.php";
include "includes/class.Local.php";
include "includes/class.localcomercial.php";
include "includes/class.cine.php";

$cine = [
    0 => new Cine(4,"Sevilla", "amapola", 2, new Dimensiones(3,4,5), "algo", "221"),
    1 => new Cine(2,"Jerez", "margarita", 3, new Dimensiones(6,7,8), "nada", "213"),
    2 => new Cine(1,"Huelva", "olivio", 2, new Dimensiones(9,10,11), "existo", "456")
];

var_dump( $cine[1]);


// $cinecito = new Cine(4,"Sevilla", "amapola", 2, new Dimensiones(3,4,5), "algo", "221");
// echo $cinecito->__toString();

$clon = clone $cine[1];

$clon = new Cine(2,"Jerez", "margarita", 3, new Dimensiones(12,13,14), "nada", "213");

var_dump($clon);



// function __toString(){

// return "Cine 1: $cine[0]<br> Cine 2: <br> Cine 3: <br> Cine copiado: <br>";
// }
