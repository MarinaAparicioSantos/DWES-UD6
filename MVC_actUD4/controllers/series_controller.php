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



function mostraForm()
{
    require './models/series_model.php';
    session_start();

    $errorImagen = "";
    $errorEditar = "";

    if (empty($_GET["varId"])) {
        $resultado["id"] = "";
        $resultado["Titulo"] = "";
        $resultado["autor"] = "";
        $resultado["estudio"] = "";
        $resultado["episodios"] = "";
        $resultado["puntuacion"] = "";
        $resultado["estreno"] = "";
        $resultado["Imagen"] = "";
    } else {
        $id = $_GET["varId"];
        $resultado = obtenerElemento($id);
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
            $resultado = obtenerElemento($id);
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
            $resultado = insertaElemento($titulo, $autor, $estudio, $episodios, $puntuacion, $estreno, $imagen);
            if ($resultado > 0) {
                header("Location: index.php");
            } else {
                $errorEditar = "Se produjo un error";
            }
        }
    }

    include "./views/series_formulario.php";
}
