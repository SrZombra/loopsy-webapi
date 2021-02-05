<?php

require_once ('conexion.php');

class Devolucion extends Conexion{

    public function getdevolucion(){

        $cox = $this->conectar();

        $sql = "SELECT * FROM devoluciones";
        $q = $cox->prepare($sql);
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getdevolucionById($id){

        $cox = $this->conectar();

        $sql = "SELECT * FROM devoluciones WHERE id = :id";
        $q = $cox->prepare($sql);
        $q->execute(array('id' => $id));
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        return $data;

    }

    public function agregarDevolucion($array){

        $cox = $this->conectar();

        $sql ="
                INSERT INTO devoluciones (PRODUCTO_id, cantidad, fecha, observacion)
                VALUES (:PRODUCTO_id, :cantidad, :fecha, :observacion)
        ";

        $q = $cox->prepare($sql);
        $q->execute($array);
        $data = $q;
        return $data;

    }

    public function actualizarDevol($array){

        $cox = $this->conectar();

        $sql = "
        
            UPDATE devoluciones SET cantidad = :cantidad WHERE id = :id

        ";

        $q =$cox->prepare($sql);
        $q->execute($array);
        $data = $q;
        return $data;
    }
    
    public function eliminarDevol($array){

        $cox = $this->conectar();

        $sql ="
                DELETE devoluciones WHERE id = :id
        ";

        $q = $cox->prepare($sql);
        $q->execute($array);
        $data = $q;
        return 1;

    }
}



?>