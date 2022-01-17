<?php



class Cine extends LocalComercial{

    private int $aforoSala;

    function __construct($aforoSala, $ciudad, $calle, $numeroDePlantas,
                        $dimensiones, $razonSocial, $numeroLicencia)
    {
        if(is_int($aforoSala) && $aforoSala > 0){
        $this->aforoSala = $aforoSala;
        parent::__construct( $ciudad, $calle, $numeroDePlantas,
        $dimensiones, $razonSocial, $numeroLicencia);
        }else{

            echo "Tiene que ser entero y mayor que 0. ERROR";
            die();
        }


    }

    function __toString(){

       return parent::__toString() . "<p><datos del local comercial></p><p>Aforo: $this->aforoSala<br></p>";

    }
    
}

$cinee = new Cine(50,"sevilla","amargura",2,new Dimensiones(1,2,3),"ser un cine","12334");

 $cinee->__toString();


?>