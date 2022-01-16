<?php

include_once "class.Vehiculo.php";

class Dos_ruedas extends Vehiculo{

    private  $cilindrada;

    public function __construct($color, $peso,$cilindrada)
    {

        parent::__construct($color, $peso);  
        $this->cilindrada = $cilindrada;
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

    public function poner_gasolina($litros){

        $kilos = $litros * 1.5;

        $this->peso = $this->peso + $kilos;



    }

    public function aniadir_persona($peso_persona)
    {

        return $this->peso = $this->peso + $peso_persona + 1.5;
    }



}


?>