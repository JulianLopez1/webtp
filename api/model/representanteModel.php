<?php
class representanteModel{
    
    function getAll(){
        $db = $this->createConexion();   
        $sentencia = $db->prepare("SELECT * FROM representante");
        $sentencia->execute();
        $representante = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $representante;
    }
}