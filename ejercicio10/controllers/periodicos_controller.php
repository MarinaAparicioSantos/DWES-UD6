<?php

function listar(){
require "./models/periodicos_model.php";

$periodicos = getPeriodicos();

include "./views/periodicos_listar.php";

}

function listar1(){
    require "./models/periodicos_model.php";
    
    $periodicos = getPeriodico($_GET['id']);
    
    include "./views/periodicos_listar.php";
    
    }



?>

