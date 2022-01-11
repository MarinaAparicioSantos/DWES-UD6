<?php

abstract class FiguraGeometrica
{

    private string $color;
    private string $tipo;

    abstract public function Dibuja();
    abstract public function Area();
}

class Cuadrado extends FiguraGeometrica
{

    private float $lado;

    function __construct($lado, $color)
    {
        $this->lado = $lado;
        $this->color = $color;
        $this->tipo = "cuadrado";
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

    function __construct($base, $altura, $color)
    {
        $this->base = $base;
        $this->altura = $altura;
        $this->color = $color;
        $this->tipo = "triangulo";
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

    function __construct($radio, $color)
    {
        $this->radio = $radio;
        $this->color = $color;
        $this->tipo = "circulo";
    }

    public function Dibuja()
    {

        echo $this->tipo . " " . $this->color;
    }

    public function Area()
    {

        return pow(pi() * $this->radio, 2);
    }
}

$cuadrados = new Cuadrado(5, "rojo");
$triangulos = new Triangulo(4, 7, "azul");
$circulos = new Circulo(50.0, "amarillo");

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