<?php 
require_once "api/model/model.php";
class loginModel extends model{

        function getUser($nombre){
            $db = $this->createConexion();
           
            $sentencia = $db->prepare("SELECT * FROM usuario WHERE nombre = ?");
            $sentencia->execute([$nombre]);
            $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
            return $usuario;
    
        }
    
    }
    