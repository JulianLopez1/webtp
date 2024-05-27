<?php
require_once "api/model/model.php";

class jugadorModel extends Model{

    function getAll(){
        $db = $this->createConexion();   
        $sentencia = $db->prepare("SELECT * FROM jugador");
        $sentencia->execute();
        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }
    function insert($nombre, $apellido, $club, $representante){
        //abrimos la conexion;
        $db = $this->createConexion();      
        //Enviar la consulta
        $resultado= $db->prepare("INSERT INTO jugador (nombre, apellido, club, representante_id) VALUES (?,?,?,?)");
        $resultado->execute([$nombre, $apellido, $club, $representante]);
    }
}