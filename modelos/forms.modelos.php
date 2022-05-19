<?php

if (!isset($_SESSION)) {
    session_start();
}

//conexion a BDD
require_once 'conexion.php';

class ModeloForms
{

    //Insert
    static public function modelRegistroUsuario($datos)
    {

        $sql = 'call nuevoUsuario( :nombre, :email, :pwd )';
        $stmt = ConexionDB::conectar()->prepare($sql);

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(':pwd', $datos['pwd'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo '<p class="pt-2">Registro completo correctamente.</p>';
        } else {
            echo ConexionDB::conectar()->errorInfo();
        }

        $stmt->closeCursor();
    }

    //Login
    static public function modelLogin($datos)
    {

        $sql = 'call loginUsuario( :email, :pwd )';
        $stmt = ConexionDB::conectar()->prepare($sql);

        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(':pwd', $datos['pwd'], PDO::PARAM_STR);

        if ($stmt->execute()) {

            $resultado = $stmt->fetchAll();

            if (count($resultado) === 1) {

                foreach ($resultado as $datos => $dato) {
                    $_SESSION['datos_usuario']['id_usuario'] = $dato['id'];
                    $_SESSION['datos_usuario']['nombre'] = $dato['nombre'];
                    $_SESSION['datos_usuario']['email'] = $dato['email'];
                    $_SESSION['datos_usuario']['tipo_usuario'] = $dato['tipo'];
                }

                $_SESSION['login'] = 'OK';

                if ($_SESSION['datos_usuario']['tipo_usuario'] === 'admin') {
                    echo '<script> window.location = "index.php?path=admin" </script>';
                } else {
                    echo '<script> window.location = "index.php?path=usuario" </script>';
                }
            } else {
                echo '<p class="pt-2">Usuario o contraseña incorrectos.</p>';
            };
        } else {
            echo ConexionDB::conectar()->errorInfo();
        }

        $stmt->closeCursor();
    }

    //Update Datos del usuario
    static public function modelActualizarDatosUsuario($datos)
    {

        $sql = 'call actualizarDatosUsuario( :id, :nombre, :email )';
        $stmt = ConexionDB::conectar()->prepare($sql);

        $stmt->bindParam(':id', $_SESSION['datos_usuario']['id_usuario'], PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo '<p class="pt-2">Registro actualizado correctamente.</p>';
        } else {
            echo ConexionDB::conectar()->errorInfo();
        }

        $stmt->closeCursor();
    }

    //Seleccionar Todos los Usuarios de la Tabla
    static public function modelSeleccionarUsuarios()
    {

        $sql = 'call seleccionarUsuarios()';
        $stmt = ConexionDB::conectar()->prepare($sql);

        if ($stmt->execute()) {

            $resultado = $stmt->fetchAll();
            return $resultado;


        } else {
            echo ConexionDB::conectar()->errorInfo();
        }

        $stmt->closeCursor();
    }
}
