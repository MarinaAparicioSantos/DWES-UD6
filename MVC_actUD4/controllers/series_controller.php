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


function aniadirSerie(){

    require "./models/series_model.php";


    include "./views/series_formulario.php";

    
    $titulo = "";
    $autor = "";
    $estudio = "";
    $episodios = "";
    $puntuacion = "";
    $estreno = "";
    $error="";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $estudio = $_POST["estudio"];
        $episodios = $_POST["episodios"];
        $puntuacion = $_POST["puntuacion"];
        $estreno = $_POST["estreno"];

        

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["portada"]["name"]);
        $portada = $_FILES["portada"]["name"];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        if ($uploadOk == 0) {
            $errorImagen = "La imagen no se pudo guardar";
        } else {
            if (move_uploaded_file($_FILES["portada"]["tmp_name"], $target_file)) {

               
                $series = insertaElemento($titulo, $autor, $estudio, $episodios, $puntuacion, $estreno, $portada);
                if (!$series) {

                    echo "error";
                } else {
        
                  echo "esta bien";
                }

            } else {
                $errorImagen = "No se ha guardado la portada.";
            }

        
        }

    }

    
}
