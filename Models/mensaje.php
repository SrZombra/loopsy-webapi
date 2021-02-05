<?php

require('conexion.php');

Class Mensaje Extends Conexion{

    public function getMnjs(){

        $cox = $this->conectar(); // Utilizamos el metodo de conectar de la clase Conexion

        $sql = "SELECT * FROM mensajes"; // Creamos la consultar
        $q = $cox->prepare($sql); // Preparamos la consultar
        $q->execute(); // Ejercutar la consulta
        $data = $q->fetchAll(PDO::FETCH_ASSOC); // Obtenemos TODOS los datos de la consulta (resultados) 
        return $data; // Retornamos información

    }

    public function agregarMnsj($array){

        $cox = $this->conexion();
        $sql = "
            INSERT INTO `mensajes` (`USUARIO_id`, `TIPO_MENSAJES_id`, `asunto`, `mensaje`) 
            VALUES (:usuario, :tipo_mensaje, :asunto, :mensaje)
        "; 
        $q = $cox->prepare($sql); 
        $q->execute($array); 
        $data = $q; 
        return 1; 
        
    }

    public function eliminarMensaje($array){
        //instanciar o crear variable de conexión.//
        $cox = $this->conectar();

        #Crear consulta.
        $consulta = "
            DELETE FROM mensajes WHERE id = :id
        ";
        #Preparar la consulta.
        $q = $cox -> prepare($consulta);

        #Ejecutar consulta y enviamos los datos (id).

         $resultado = $q -> execute($array);
    }

}