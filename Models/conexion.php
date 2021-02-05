<?php

Class Conexion{
    private $usuario = 'root';
    private $contrasena = '';

    public function conectar(){
        try{
            return new PDO('mysql:host=localhost;dbname=loopsy', $this->usuario, $this->contrasena);
        }catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}