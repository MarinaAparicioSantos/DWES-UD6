<?php

/*function __autoload($class)
{
   include_once 'includes/class.' . $class . '.php';
}*/

spl_autoload_register(function($class){
    require_once('./includes/class.'.$class.'.php');
});

/*function __autoload($name) {
    include_once './includes/class.' . $name . '.php';
 }*/



$cine[0]  = new Cine(4,"Sevilla", "amapola", 2, new Dimensiones(3.3,4.3,5.3), "algo", "221");
$cine[1]  = new Cine(2,"Jerez", "margarita", 3, new Dimensiones(6.3,7.3,8.3), "nada", "213");
$cine[2]  = new Cine(1,"Huelva", "olivio", 2, new Dimensiones(9.3,10.3,11.3), "existo", "456");



foreach ($cine as $cines){

    echo $cines . "<br><br><br>";
}


// $cinecito = new Cine(4,"Sevilla", "amapola", 2, new Dimensiones(3,4,5), "algo", "221");
// echo $cinecito->__toString();

$clon = clone $cine[1];

$clon->getDimensiones()->alto = 40.;
$clon->getDimensiones()->ancho = 50.;
$clon->getDimensiones()->largo = 60.;

echo $clon;




// function __toString(){

// return "Cine 1: $cine[0]<br> Cine 2: <br> Cine 3: <br> Cine copiado: <br>";
// }
