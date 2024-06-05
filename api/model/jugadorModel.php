<?php
require_once "api/model/model.php";
class jugadorModel extends Model
{

    function getAll()
    {
        $db = $this->createConexion();
        $sentencia = $db->prepare("SELECT * FROM jugador");
        $sentencia->execute();
        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }
    function insert($nombre, $apellido, $club, $representante)
    {

        $db = $this->createConexion();

        $resultado = $db->prepare("INSERT INTO jugador (nombre, apellido, club, representante_id) VALUES (?,?,?,?)");
        $resultado->execute([$nombre, $apellido, $club, $representante]);
    }
    function delete($id)
    {
        $db = $this->createConexion();
        if ($db) {
            $resultado = $db->prepare("DELETE FROM jugador WHERE id = ?");
            $resultado->execute([$id]);
        } else {
            echo "No se pudo conectar a la base de datos.";
        }
    }
    function getJugador($id)
    {
        $db = $this->createConexion();
        if ($db) {
            $resultado = $db->prepare("SELECT * FROM jugador WHERE id = ?");
            $resultado->execute([$id]);
            $jugador = $resultado->fetch(PDO::FETCH_OBJ);
            return $jugador;
        } else {
            echo "No se pudo conectar a la base de datos.";
        }
    }
}