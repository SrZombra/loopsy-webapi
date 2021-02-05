<?php 

include ('../../Models/mensaje.php'); // Incluimos el modelo de mensaje

if($_SERVER['REQUEST_METHOD'] === 'GET'){ // Validamos que el metodo que envien sea GET

    $instanciaMensaje = new Mensaje(); // instanciamos un objeto de la clase Mensaje

    $data = $instanciaMensaje->getMnjs(); // Utilizamos el metodo getMnjs() para obtener todos los mensajes
    
    $data = json_encode($data, JSON_PRETTY_PRINT); // Transformamos la respeusta de la consulta en formato JSON (para que Angular lo lea)
    
    echo $data; // Mostramos la información en pantalla

}else{
    echo 'El metodo ingresado no está disponible';
}

