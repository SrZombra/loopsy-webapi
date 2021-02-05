<?php

include ('../../Models/mensaje.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){ // Validamos que el metodo que envien sea GET

    $mensaje = new Mensaje(); // instanciamos un objeto de la clase Mensaje

    # Recibimos el parametro desde la petición.(POSTMAN).
    $id = $_POST['id'];

    # Enviamos los parametros a la consulta.
    $array = ['id' => $id];

    # Utilizamos el metodo eliminar de la clase Mensaje.
    $mensaje -> eliminarMensaje($array);

    echo json_encode(['rest'=>1]); // devolvemos respuesta

}else{
    echo 'Metodo no disponible';
}


?> 