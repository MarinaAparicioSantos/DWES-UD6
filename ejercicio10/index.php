<?php

define ("CONTROLLERS_FOLDER","controllers/");

define ("DEFAULT_CONTROLLER","libros");

define ("DEFAULT_ACTION","listar");

$controller = DEFAULT_CONTROLLER;
if (!empty ($_GET['controller']))
$controller = $_GET ['controller'];

$action = DEFAULT_ACTION;

if (!empty ($_GET['action']))
$action = $_GET ['action'];

if (!empty ($_GET['mostrarLibros']))
$action = $_GET ['mostrarLibros'];


$controller = CONTROLLERS_FOLDER . $controller . '_controller.php';
try{

    if(is_file($controller))
        require_once($controller);

    else
        throw new Exception('El controlador no existe - 404 not found');


    if (is_callable($action))
        $action();

    else 
        throw new Exception('La accion no existe - 404 not found');

}catch(Exception $e){

    echo 'Exception capturada '. $e->getMessage(), "\n";


}

?>