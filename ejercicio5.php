<?php

interface IEquipoFutbol
{
    public function getNumeroJugadores();
    public function juegaPartido();
}

interface ICampeonato
{

    public function nombreCampeonato();
}

class EquipoFutbol implements IEquipoFutbol, ICampeonato
{

    private float $numJugadores;
    private string $nombreEquipo;
    private string $nombreCampeonato;


    function __construct($numJugadores, $nombreEquipo, $nombreCampeonato)
    {
        $this->numJugadores = $numJugadores;
        $this->nombreEquipo = $nombreEquipo;
        $this->nombreCampeonato = $nombreCampeonato;
    }


    function getNumeroJugadores()
    {

        return $this->numJugadores;
    }
    function juegaPartido()
    {

        echo $this->nombreEquipo . " VICTORIA.";
    }

    function nombreCampeonato()
    {

        return $this->nombreCampeonato;
    }
}


$futbol = new EquipoFutbol(11, "Equipo","Campeonato");

echo $futbol->getNumeroJugadores();

echo "<br>";

$futbol->juegaPartido();

echo "<br>";

echo $futbol->nombreCampeonato();