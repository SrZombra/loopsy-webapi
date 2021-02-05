<?php

include ('../../Models/devolucion.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $data = [];

    $PRODUCTO_id = $_POST['PRODUCTO_id'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $observacion = $_POST['observacion'];

    $array = array(

        'PRODUCTO_id' =>  $PRODUCTO_id,
        'cantidad' => $cantidad,
        'fecha' => $fecha,
        'observacion' => $observacion
    );

    $devolucionModel = new Devolucion();

    $data['res'] = $devolucionModel->agregarDevolucion($array);

    $data = json_encode($data);

    echo $data;
}else{
    echo 'Metodo no disponible';
}

?>