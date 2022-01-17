<?php

class Cuatro_ruedas extends Vehiculo{

    private  $numero_puertas;

    public function __construct($color, $peso, $numero_puertas)
    {
    
        parent::__construct($color, $peso);  
        $this->numero_puertas = $numero_puertas;
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

    public function repintar($color){

        return $this->color = $color;


    }

    public function aniadir_persona($peso_persona)
    {

        return $this->peso = $this->peso + $peso_persona;
    }

}

?>