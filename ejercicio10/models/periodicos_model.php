<?php

function getConnection()
{

    $user = 'developer';
    $password = 'developer';
    return  new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
}

function getPeriodico($id)
{

    $db = getConnection();

    $result = $db->prepare('SELECT nombre, fecha FROM periodicos WHERE id = :id');
    $result->bindParam(":id", $id);
    $result->execute();
    $periodicos = array();
    while ($periodico = $result->fetch(PDO::FETCH_ASSOC)) {
        $periodicos[] = $periodico;
    }


    $db = null;
    return $periodicos;
}

function getPeriodicos()
{

    $db = getConnection();

    $result = $db->query('SELECT nombre, fecha FROM periodicos');
    $periodicos = array();
    while ($periodico = $result->fetch(PDO::FETCH_ASSOC)) {
        $periodicos[] = $periodico;
    }


    $db = null;
    return $periodicos;
}

