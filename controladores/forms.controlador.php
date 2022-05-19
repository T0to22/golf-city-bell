<?php

class ControladorForms
{

    //Controlador para el Registro o ALTA de Usuarios
    static public function ctrRegistroUsuario()
    {

        if (isset($_POST['registroNombre'], $_POST['registroEmail'], $_POST['registroPWD'])) {

            $datos =  array(
                'nombre' => $_POST['registroNombre'],
                'email' => $_POST['registroEmail'],
                'pwd' => $_POST['registroPWD']
            );

            $respuesta = ModeloForms::modelRegistroUsuario($datos);
            return $respuesta;
        };
    }

    //Login
    static public function ctrLogin()
    {

        if (isset($_POST['inEmail'], $_POST['inPWD'])) {

            $datos =  array(
                'email' => $_POST['inEmail'],
                'pwd' => $_POST['inPWD']
            );

            $respuesta = ModeloForms::modelLogin($datos);
            return $respuesta;
        };
    }

    //Controlador para Update de Datos del Usuario
    static public function ctrActualizarDatosUsuario()
    {

        if (isset($_POST['updateNombre'], $_POST['updateEmail'] )) {

            $datos =  array(
                'nombre' => $_POST['updateNombre'],
                'email' => $_POST['updateEmail']
            );

            $respuesta = ModeloForms::modelActualizarDatosUsuario($datos);
            return $respuesta;
        };
    }

    static public function ctrSeleccionarUsuarios(){

        $respuesta = ModeloForms::modelSeleccionarUsuarios();
        return $respuesta;

    }
}
