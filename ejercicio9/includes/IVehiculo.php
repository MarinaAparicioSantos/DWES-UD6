<?php

interface IVehiculo{

    public function circula();

    public static function ver_atributo($objeto);

    public function setColor($color);

    public function setPeso($peso);

    public function __get($name);

    public function __set($name, $value);
}

?>