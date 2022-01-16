<?php
 include_once "class.Dimensiones.php";
 include_once "class.Local.php";
class localcomercial extends Local {

    private  $razonSocial;
    private  $numeroLicencia;

    function __construct( $ciudad, $calle, $numeroDePlantas, $dimensiones, $razonSocial, $numeroLicencia)
    {
        
        if(is_string($razonSocial) && is_string($numeroLicencia)){
        parent::__construct($ciudad, $calle, $numeroDePlantas, $dimensiones);  
        $this->razonSocial = $razonSocial;
        $this->numeroLicencia = $numeroLicencia;
        }else{

            echo "Error, tiene que ser string";
            die();
        }
    }

    function __toString()
    {
        return parent::__toString() . "<p><datos del local></p><p>Razón Social: $this->razonSocial <br></p><p>Número de Licencia: $this->numeroLicencia<br></p>";
    }

    

}

 $dimensiones = new Dimensiones(4,5,6);
 $pruebaa = new localcomercial("sevilla", "aa",2,$dimensiones,"sd","23344");

  $pruebaa->__toString();

?>