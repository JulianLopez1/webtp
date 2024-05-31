<?php
require_once "api/model/model.php";
class representanteModel extends Model{
    
    function getAllRepresentante(){
        $db = $this->createConexion();   
        $sentencia = $db->prepare("SELECT * FROM representante");
        $sentencia->execute();
        $representante = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $representante;
    }


}