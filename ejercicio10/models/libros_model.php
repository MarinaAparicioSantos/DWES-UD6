<?php

    function getConnection(){

        $user='developer';
        $password = 'developer';
        return  new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
    }

    function getLibros($id){

        $db = getConnection();

        $result = $db->query('SELECT titulo, precio FROM libros WHERE titulo = ?');
        $result->bindParam("id",$id);
        $libros = array();
        while($libro = $result->fetch())
                $libros[] = $libro;

        return $libros;
                
    }

        
?>
       