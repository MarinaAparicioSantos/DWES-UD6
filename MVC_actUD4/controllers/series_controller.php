<?php

function listarSeries()
{
    require "./models/series_model.php";

    $series = obtenerTodos();

    include "./views/series_listar.php";
}

function listarSerie()
{
    require "./models/series_model.php";

    $series = obtenerElemento($_GET['id']);

    include "./views/series_listar.php";
}



function Formulario()
{
    require './models/series_model.php';

    $errorImagen = "";
    $errorEditar = "";

    if (empty($_GET["id"])) {
        $elemento["id"] = "";
        $elemento["Titulo"] = "";
        $elemento["autor"] = "";
        $elemento["estudio"] = "";
        $elemento["episodios"] = "";
        $elemento["puntuacion"] = "";
        $elemento["estreno"] = "";
        $elemento["Imagen"] = "";
    } else {
        $id = $_GET["id"];
        $elemento = obtenerElemento($id);
    }
    include './views/series_formulario.php';
}


function aniadirSerie()
{

    require "./models/series_model.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["id"])) {
            $id = "";
        } else {
            $id = $_POST["id"];
            $elemento = obtenerElemento($id);
        }


        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["portada"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (empty($_FILES["portada"]["name"])) {
            $uploadOk = 0;
            if (!empty($_POST["id"])) {
                $imagen = $_FILES["portada"]["name"];
            } else {
                $errorImagen = "La imagen no se ha añadido";
            }
        } else {
            $check = getimagesize($_FILES["portada"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $errorImagen = "El archivo no es una imagen";
                $uploadOk = 0;
            }
            if (file_exists($target_file)) {
                $errorImagen = "El archivo ya existe";
                $uploadOk = 0;
                $imagen = $_FILES["portada"]["name"];
            }
            if ($imageFileType != "png" && $imageFileType != "jpeg") {
                $errorImagen = "Solo formato .png o jpeg";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                $errorImagen = "La imagen no se pudo guardar";
                $error = false;
            } else {
                if (move_uploaded_file($_FILES["portada"]["tmp_name"], $target_file)) {
                    $imagen = $_FILES["portada"]["name"];
                } else {
                    $errorImagen = "No se pudo guardar la imagen.";
                    $error = false;
                }
            }
        }


        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $estudio = $_POST["estudio"];
        $episodios = $_POST["episodios"];
        $puntuacion = $_POST["puntuacion"];
        $estreno = $_POST["estreno"];


        if (empty($_POST["id"])) {
            $elemento = insertaElemento($titulo, $autor, $estudio, $episodios, $puntuacion, $estreno, $imagen);
            if ($elemento > 0) {
                header("Location: index.php");
            } else {
                $errorEditar = "ERROR";
            }
        }
    }

    include "./views/series_formulario.php";
}

function borrar(){

    require "./models/series_model.php";


    $series = eliminarElemento($_GET["id"]);

    if($series){
        echo "Se ha borrado";

        header("Location: index.php?controller=series&action=listarSeries");
    }else{

        echo "ERROR";
    }
   

 
}


function editar(){

    require "./models/series_model.php";

    


}