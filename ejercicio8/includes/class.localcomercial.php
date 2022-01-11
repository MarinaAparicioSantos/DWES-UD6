<?php

class LocalComercial extends Local {

    private string $razonSocial;
    private string $numeroLicencia;

    function __construct($razonSocial, $numeroLicencia)
    {
        $this->razonSocial = $razonSocial;
        $this->numeroLicencia = $numeroLicencia;
    }

    function __toString()
    {
        echo "<p><datos del local></p><p>Razón Social: $this->razonSocial <br></p><p>Número de Licencia: $this->numeroLicencia<br></p>";
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {

        $this->$atributo = $valor;
        
    }

}
