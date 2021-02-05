<?php

require_once ('../../Models/devolucion.php');

if($_SERVER['REQUEST_METHOD'] === 'POST');

$data = [];

// / Recibir datos de postman
$id = $_POST['id'];
$PRODUCTO_id = $_POST['PRODUCTO_id'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$observacion = $_POST['observacion'];
// fin de recibir datos

// ARRAY de los datos DE POSTMAN
$array = array(

    'id' => $id,
    // 'PRODUCTO_id' => $PRODUCTO_id,
    'cantidad' => $cantidad,
    // 'fecha' => $fecha,
    // 'observacion' => $observacion

);

$Devolucion = new Devolucion;

// actualizar
$Devolucion->actualizarDevol($array);

// traer datos actualizados
$data['datos'] = $Devolucion->getdevolucionById($id, JSON_PRESERVE_ZERO_FRACTION+JSON_UNESCAPED_UNICODE);

// ESTO ES IMPORTANTE POR QUE ES DONDE DEVUELVE LA RESPUESTA
$data = json_encode($data);
echo $data;



?>