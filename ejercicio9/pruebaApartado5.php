<?php

spl_autoload_register(function($class){
    require_once('./includes/class.'.$class.'.php');
});

$cochev = new Coche ("verde",2100,4,0);

$cochev->aniadir_cadenas_nieve(2);
$cochev->aniadir_persona(80);


$cochev->__set('color',"azul");
//$cochev->repintar("azul");

$cochev->quitar_cadenas_nieve(4);

$cochev->__set('color',"negro");
//$cochev->repintar("negro");

Vehiculo::ver_atributo($cochev);


?>