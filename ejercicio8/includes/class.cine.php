<?php

include_once "class.Dimensiones.php";
include_once "class.Local.php";
include_once "class.localcomercial.php";

class Cine extends localcomercial{

    private int $aforoSala;

    function __construct($aforoSala, $ciudad, $calle, $numeroDePlantas,
                        $dimensiones, $razonSocial, $numeroLicencia)
    {
        if(is_int($aforoSala) && $aforoSala > 0){
        $this->aforoSala = $aforoSala;
        }else{

            echo "Tiene que ser entero y mayor que 0. ERROR";
            die();
        }

        parent::__construct( $ciudad, $calle, $numeroDePlantas,
                            $dimensiones, $razonSocial, $numeroLicencia);
    }

    function __toString(){

       return "<p><datos del local comercial></p><p>Aforo: $this->aforoSala<br></p>";

    }
    
}


?>