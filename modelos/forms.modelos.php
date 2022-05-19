<?php

//conexion a BDD
require_once 'conexion.php';

class ModeloForms{

    //Insert
    static public function modelRegistroUsuario($datos){

        $sql = 'call nuevoUsuario( :email, :pwd )';
        $stmt = ConexionDB::conectar()->prepare($sql);

        $stmt -> bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt -> bindParam(':pwd', $datos['pwd'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo '<p class="pt-2">Registro completo correctamente.</p>';
        } else {
            echo ConexionDB::conectar() -> errorInfo();
        }

        $stmt->closeCursor();

    }

}