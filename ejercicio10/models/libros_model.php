<?php

function getConnection()
{

    $user = 'developer';
    $password = 'developer';
    return  new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
}

function getLibro($id)
{

    $db = getConnection();

    $result = $db->prepare('SELECT titulo, precio FROM libros WHERE id = :id');
    $result->bindParam(":id", $id);
    $result->execute();
    $libros = array();
    while ($libro = $result->fetch(PDO::FETCH_ASSOC)) {
        $libros[] = $libro;
    }


    $db = null;
    return $libros;
}

function getLibros()
{

    $db = getConnection();

    $result = $db->query('SELECT titulo, precio FROM libros');
    $libros = array();
    while ($libro = $result->fetch(PDO::FETCH_ASSOC)) {
        $libros[] = $libro;
    }


    $db = null;
    return $libros;
}

