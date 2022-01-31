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
    $db = null;
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
    $db = null;
}


//create


function insertaElemento($titulo, $autor, $estudio, $episodios, $puntuacion, $estreno, $portada)
{

    try {
        $db = getConnection();

        $consulta = $db->prepare("INSERT INTO listado (titulo, autor, estudio,
        episodios,puntuacion,estreno,portada) VALUES (?,?,?,?,?,?,?)");
        $consulta->bindParam(1, $titulo);
        $consulta->bindParam(2, $autor);
        $consulta->bindParam(3, $estudio);
        $consulta->bindParam(4, $episodios);
        $consulta->bindParam(5, $puntuacion);
        $consulta->bindParam(6, $estreno);
        $consulta->bindParam(7, $portada);
        $consulta->execute();
        return $db->lastInsertId();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $db = null;
}

//update



function editarElemento($id, $titulo, $autor, $estudio, $episodios, $puntuacion, $estreno, $portada)
{

    try {
        $db = getConnection();


        $consulta = $db->prepare("UPDATE listado SET titulo=:titulo, autor=:autor, estudio=:estudio,
        episodios=:episodios,puntuacion=:puntuacion,estreno=:estreno,portada=:portada WHERE id=:id");

        $parametros = array(
            ":id" => $id, ":titulo" => $titulo, ":autor" => $autor, ":estudio" => $estudio, ":episodios" => $episodios,
            ":puntuacion" => $puntuacion, ":estreno" => $estreno, ":portada" => $portada
        );

        return $consulta->execute($parametros);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }

    $db = null;
}

//delete


function eliminarElemento($id)
{

    try {
        $db = getConnection();

        $consulta = $db->prepare("DELETE FROM listado WHERE id=?");
        $consulta -> bindParam(1,$id);
        return $consulta->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $db = null;
}
?>
