<?php


spl_autoload_register(function($class){
    require_once('./includes/class.'.$class.'.php');
});

//dos ruedas
echo "dos ruedas<br>";
$dosRuedas = new Dos_ruedas("transparente",1500,0);

$dosRuedas->aniadir_persona(70);

echo $dosRuedas->peso;

$dosRuedas->color = "verde";
$dosRuedas->cilindrada = 1000;

echo "<br>";
echo  $dosRuedas->color;
echo "<br>";
echo  $dosRuedas->cilindrada;
echo "<br>";

$dosRuedas->ver_atributo($dosRuedas);

//camion
echo "camion<br>";
$camion = new Camion("blanco",6000,0,0);

$camion->aniadir_persona(84);
$camion->color = "azul";
$camion->numero_puertas = 2;

$camion->ver_atributo($camion);


?>