<?php

include_once "class.Vehiculo.php";
include_once "class.Cuatro_ruedas.php";
class Coche extends Cuatro_ruedas{

    private $numero_cadenas_nieve;

    public function __construct( $color, $peso,$numero_puertas,$numero_cadenas_nieve)
    {

        
        parent:: __construct($color, $peso, $numero_puertas);
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }


    //getter y setter (metodos especiales)
    public function __get($name){
        if(property_exists(get_class(),$name)){
            return $this->$name;
        }else{
            return parent::__get($name);
        }
       
  
    }
  
    public function __set($name, $value)
    {
        if(property_exists(get_class(),$name)){
            $this->$name = $value;
        }else{
            parent::__set($name,$value);
        }       
    }



    public function aniadir_cadenas_nieve($num){


        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve + $num;


    }

    public function quitar_cadenas_nieve($num){

        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve - $num;

        
    }

    public function aniadir_persona($peso_persona)
    {
        $pesoPadre = parent::aniadir_persona($peso_persona);

        if($pesoPadre >=1500 && $this->numero_cadenas_nieve <=2){

            echo "Atención ponga 4 cadenas para la nieve.";
        }

        
    }


    }
