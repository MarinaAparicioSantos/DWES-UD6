<?php

function listarSeries(){
require "./models/series_model.php";

$series = obtenerTodos();

include "./views/series_listar.php";

}





function listarSerie(){
    require "./models/series_model.php";
    
    $series = obtenerElemento($_GET['id']);
    
    include "./views/series_listar.php";
    
    }

?>