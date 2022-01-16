<?php
include_once "class.Dimensiones.php";
class Local
{

    private  $ciudad;
    private  $calle;
    private  $numeroDePlantas;
    private  $dimensiones;


    function __construct($ciudad, $calle, $numeroDePlantas, $dimensiones)
    {
        if(is_string($ciudad) && is_string($calle)){
            $this->ciudad = $ciudad;
            $this->calle = $calle;
        }else{

            echo "No son de tipo string";
            die();
        }
        
        if (($numeroDePlantas > 1 && $numeroDePlantas < 10) && is_int($numeroDePlantas)) {
            $this->numeroDePlantas = $numeroDePlantas;
        }else {
            echo "El valor no puede ser menor que 1 ni mayor que 10.";
            die();
        }
        
        if ($dimensiones instanceof Dimensiones) {
            $this->dimensiones = $dimensiones;
        }else {
            echo "Dimensiones no es instancia de dimensiones.";
            die();
        }
    }

    //getter y setter
    function getDimensiones()
    {
        return $this->dimensiones;
    }

    //el constructor llama directamente a los getters y los setters.

    function __toString()
    {
        return "<p>Ciudad: $this->ciudad <br></p><p>Calle:$this->calle<br></p><p>Plantas: 
            $this->numeroDePlantas<br></p><p>Dimensiones: $this->dimensiones<br></p>";
    }

    public function __clone()
    {
        $this->dimensiones = clone $this->dimensiones;
    }
}



$dimensiones = new Dimensiones(4,5,6);

$prueba = new Local("sevilla", "aa",2,$dimensiones);

  $prueba->__toString();

?>
