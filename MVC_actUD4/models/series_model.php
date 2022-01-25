<?php

function getConnection()
{

    $user = 'developer';
    $password = 'developer';
    return  new PDO('mysql:host=localhost;dbname=directorioAnime', $user, $password);
}


//read muchos
function obtenerTodos()
{

    try {

        $db = getConnection();

        $consulta = $db->prepare("SELECT id, titulo, autor, episodios, estreno FROM listado");
        $consulta->execute();

        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $filas[] = $fila;
        }

        return $filas;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conexion = null;
}

//read uno
function obtenerElemento($id)
{

    try {
        $db = getConnection();

        $consulta = "SELECT * FROM listado WHERE id=?";
        $consulta = $db->prepare($consulta);
        $consulta->bindParam(1, $id);
        $consulta->execute();
         while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $filas[] = $fila;
        }
        return $filas;
       
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conexion = null;
}


//create


function insertaElemento($titulo, $autor, $estudio, $episodios, $puntuacion, $estreno, $portada)
{

    try {
        $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);


        $consulta = $conexion->prepare("INSERT INTO listado (titulo, autor, estudio,
        episodios,puntuacion,estreno,portada) VALUES (?,?,?,?,?,?,?)");
        $consulta->bindParam(1, $titulo);
        $consulta->bindParam(2, $autor);
        $consulta->bindParam(3, $estudio);
        $consulta->bindParam(4, $episodios);
        $consulta->bindParam(5, $puntuacion);
        $consulta->bindParam(6, $estreno);
        $consulta->bindParam(7, $portada);
        $consulta->execute();
        return $conexion->lastInsertId();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conexion = null;
}

//update

//delete
?>
