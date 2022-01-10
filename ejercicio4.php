<?php

class Vivienda
{

    private string $tipoVivienda;
    private float $valorMercado;

    public function __construct($tipoVivienda,$valorMercado)
    {
        $this->tipoVivienda=$tipoVivienda;
        $this->valorMercado=$valorMercado;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {

        switch ($atributo) {
            case "tipoVivienda":
                $this->$atributo = $valor;
                break;
            
            case "valorMercado":
                if($valor > 0){

                    $this->$atributo = $valor;

                }else{
                    echo "El valor no puede ser menor que 0.";
                }
                break;
        }
        
    }


}
$miCasa = new Vivienda("casa",47);
echo $miCasa->tipoVivienda;
echo "<br>";
echo $miCasa->valorMercado;


$miCasa->tipoVivienda = "piso";
echo "<br>";
echo $miCasa->tipoVivienda;
echo "<br>";
$miCasa->valorMercado=5;
echo $miCasa->valorMercado;


?>