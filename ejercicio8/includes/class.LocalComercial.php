<?php

class LocalComercial extends Local {

    private string $razonSocial;
    private string $numeroLicencia;

    function __construct( $ciudad, $calle, $numeroDePlantas, $dimensiones, $razonSocial, $numeroLicencia)
    {
        
        if(is_string($razonSocial) && is_string($numeroLicencia)){
        parent::__construct($ciudad, $calle, $numeroDePlantas, $dimensiones);  
        $this->razonSocial = $razonSocial;
        $this->numeroLicencia = $numeroLicencia;
        }else{

            echo "Error";
            die();
        }
    }

    function __toString()
    {
        echo "<p><datos del local></p><p>Razón Social: $this->razonSocial <br></p><p>Número de Licencia: $this->numeroLicencia<br></p>";
    }

    

}
$prueba = new LocalComercial("sevilla", "aa",2,2,"sd","23344");

$prueba->__toString();