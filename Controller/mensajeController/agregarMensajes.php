<?php 

include ('../../Models/mensaje.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $data = [];

    $usuario = $_POST['usuario'];
    $tipoM = $_POST['tipoM'];
    $asunto = $_POST['asunto']; 
    $mensaje = $_POST['mensaje'];

    $array = array(
        'usuario' => $usuario,
        'tipo_mensaje' => $tipoM,
        'asunto' => $asunto,
        'mensaje' => $mensaje
    );

    $mensajeModel = new Mensaje();

    $data['res'] = $mensajeModel->agregarMnsj($array);
    
    $data = json_encode($data);
    
    echo $data;


}else{
    echo 'METODO NO DISPONIBLE';
}

