<?php

//conexion a BDD
require_once 'conexion.php';

class ModeloForms{

    //Insert
    static public function modelRegistroUsuario($datos){

        // echo $datos['email'] . ' - ' . $datos['pwd'];

        $sql = 'call nuevoUsuario( ?, ? )';
        $stmt = ConexionDB::conectarLocal()->prepare($sql);
        $stmt->bind_param('ss', $datos['email'], $datos['pwd']);

        if ($stmt->execute()) {
            echo "OK";
        } else {
            echo $stmt -> error;
        }

        $stmt->close();

    }

}