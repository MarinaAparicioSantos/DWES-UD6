<?php

function listar(){
require "./models/libros_model.php";

$libros = getLibros();

include "./views/libros_listar.php";

}

function listar1(){
    require "./models/libros_model.php";
    
    $libros = getLibro($_GET['id']);
    
    include "./views/libros_listar.php";
    
    }



?>

