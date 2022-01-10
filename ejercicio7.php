<?php


abstract class FiguraGeometrica
{

    private string $color;
    private string $tipo;

    function __construct($color, $tipo)
    {
        $this->color = $color;
        $this->tipo = $tipo;
    }

    abstract public function Dibuja();
    abstract public function Area();
}

class Cuadrado extends FiguraGeometrica
{

    private float $lado;

    function __construct($lado)
    {
        $this->lado = $lado;
    }


    public function Dibuja()
    {

        echo $this->tipo . " " . $this->color;
    }

    public function Area()
    {

        return pow($this->lado, 2);
    }
}

class Triangulo extends FiguraGeometrica
{

    private float $base;
    private float $altura;

    function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function Dibuja()
    {

        echo $this->tipo . " " . $this->color;
    }

    public function Area()
    {

        return ($this->base * $this->altura) / 2;
    }
}

class Circulo extends FiguraGeometrica
{

    private float $radio;

    function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function Dibuja()
    {

        echo $this->tipo . " " . $this->color;
    }

    public function Area()
    {

        define("PI", 3.1416);

        return pow(PI * $this->radio, 2);
    }
}



$cuadrados = new Cuadrado("rojo", "cuadrado", 5);
$triangulos = new Triangulo("azul", "triangulo", 4, 7);
$circulos = new Circulo("amarillo", "circulo", 50);

$cuadrados->Dibuja();

echo "<br>";

echo $cuadrados->Area();

echo "<br>";

$triangulos->Dibuja();

echo "<br>";

echo $triangulos->Area();

echo "<br>";

$circulos->Dibuja();

echo "<br>";

echo $circulos->Area();

echo "<br>";

var_dump($cuadrados instanceof FiguraGeometrica);

echo "<br>";

var_dump($triangulos instanceof FiguraGeometrica);

echo "<br>";

var_dump($circulos instanceof FiguraGeometrica);
