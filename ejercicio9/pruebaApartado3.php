<?php

spl_autoload_register(function($class){
    require_once('./includes/class.'.$class.'.php');
});


$coche3 = new Coche("azul",650,2,0);

$coche3->aniadir_persona(700);

echo $coche3->color;
echo "<br>";
echo $coche3->peso;
echo "<br>";
$coche3->repintar("amarillo");
$coche3->aniadir_cadenas_nieve(3);
echo $coche3->color;
echo "<br>";
echo $coche3->numero_cadenas_nieve;


$coche4 = new Dos_ruedas("marrón",30,250.);

$coche4->aniadir_persona(2);
$coche4->poner_gasolina(2000);
echo "<br>";
echo $coche4->color;
echo "<br>";
echo $coche4->peso;

//$coche2 = new Cuatro_ruedas(4,"azul",500);

/*var_dump($coche2);

 $coche2->repintar("rosa");

 var_dump($coche2);*/
?>