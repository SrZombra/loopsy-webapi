<?php

require_once ('../../Models/devolucion.php');

if($_SERVER['REQUEST_METHOD'] === 'GET'){

$devolucionModel = new Devolucion;

    $data = $devolucionModel->getdevolucion();

    $data = json_encode($data, JSON_PRETTY_PRINT);

    echo $data;

}else {
    
    echo 'El metodo ingresado no corresponde';
}



?>