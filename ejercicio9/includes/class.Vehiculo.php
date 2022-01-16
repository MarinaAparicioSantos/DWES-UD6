<?php

abstract class Vehiculo implements IVehiculo
{

    private  $color;
    private  $peso;
    protected static $numero_cambio_color = 0;


    public function __construct($color, $peso)
    {
        $this->color = $color;
        $this->peso = $peso;
    }


    //getter y setter (metodos especiales)
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }


    public function circula()
    {

        return "El vehículo está circulando.";
    }

    public abstract function aniadir_persona($peso_persona);

    /*public function aniadir_persona($peso_persona)
    {

        return $this->peso = $this->peso + $peso_persona;
    }*/

    public static function ver_atributo($objeto){

            echo "El color es: $objeto->color<br>";

            echo "Se ha cambiado el color ". self::$numero_cambio_color . " veces.<br>";

            echo "El peso es: $objeto->peso<br>";

         if(get_class($objeto)== "Cuatro_ruedas"||get_class($objeto)== "Camion"||get_class($objeto)== "Coche"){

            echo "El número de puertas es: $objeto->numero_puertas<br>";
            
        }  if(get_class($objeto) == "Dos_ruedas"){

            echo "La cilindrada es: $objeto->cilindrada<br>";
            
        }  if(get_class($objeto) == "Camion"){

            echo "La longitud es: $objeto->longitud<br>";
            
        }  if(get_class($objeto) == "Coche"){

            echo "El número de cadenas para la nieve es: $objeto->numero_cadenas_nieve<br>";
            
        }
    }

    public function setColor($color){

        $this->color = $color;

        self::$numero_cambio_color += 1;
    }


    public function setPeso($peso){

        if(($this->peso + $peso) <= 2100){

            $this->peso = $peso;


        }else{
            echo "El peso total del vehículo puede tener como máximo 2100 kg.";
            die();
            
        }


    }
}
