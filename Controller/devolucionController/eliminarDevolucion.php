<?php

require_once ('../../Models/devolucion.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $devolucion = new Devolucion;

    $id = $_POST['id'];

    $array = ['id' => $id];

    $devolucion->eliminarDevol($array);

    echo json_encode(['rest'=>1]);






}else{
    echo 'Metodo erroneo';
}



?>