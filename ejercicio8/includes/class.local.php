<?php

class Local
{

    private string $ciudad;
    private string $calle;
    private int $numeroDePlantas;
    private float $area;

    private Dimensiones $dimensiones;


    function __construct($ciudad, $calle, $numeroDePlantas, $area, $dimensiones)
    {
        $this->ciudad = $ciudad;
        $this->calle = $calle;
        $this->numeroDePlantas = $numeroDePlantas;
        $this->area = $area;
        $this->dimensiones = $dimensiones;
    }

    //getter y setter
    function getDimensiones()
    {
        return $this->dimensiones;
    }

    function getArea()
    {
        return $this->area;
    }
    

    public function __set($atributo, $valor)
    {

        //el constructor llama directamente a los getters y los setters.

        switch ($atributo) {
            case "dimensiones":
                if ($this->dimensiones instanceof Dimensiones) {

                    $this->$atributo = $valor;
                } else {
                    echo "Dimensiones no es instancia de dimensiones.";
                }
                break;

            case "numeroDePlantas":
                if ($valor > 1 && $valor < 10) {

                    $this->$atributo = $valor;
                } else {
                    echo "El valor no puede ser menor que 1 ni mayor que 10.";
                }
                break;
        };
    }

    function __toString()
    {
        echo "<p>Ciudad: $this->ciudad <br></p><p>Calle:$this->calle<br></p><p>Plantas: 
            $this->numeroDePlantas<br></p><p>Dimensiones: $this->dimensiones<br></p>";
    }

    public function __clone()
    {
        $dimensionesCopy = clone $this->dimensiones;
    }
}
