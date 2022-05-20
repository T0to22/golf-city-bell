<?php

class ControladorForms
{

    //Controlador para el Registro o ALTA de Usuarios
    static public function ctrRegistroUsuario()
    {

        if (isset($_POST['registroUsuario'], $_POST['registroEmail'], $_POST['registroPWD'])) {

            $datos =  array(
                'usuario' => $_POST['registroUsuario'],
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

        if (isset($_POST['inUsuario'], $_POST['inPWD'])) {

            $datos =  array(
                'usuario' => $_POST['inUsuario'],
                'pwd' => $_POST['inPWD']
            );

            $respuesta = ModeloForms::modelLogin($datos);
            return $respuesta;
        };
    }

    //Controlador para Update de Datos del Usuario
    static public function ctrActualizarDatosUsuario()
    {

        if (isset($_POST['updateUsuario'], $_POST['updateEmail'] )) {

            $datos =  array(
                'usuario' => $_POST['updateUsuario'],
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

    //Eliminar Usuario
    static public function crtEliminarUsuario()
    {

        if (isset($_POST['eliminarUsuario'])) {

            $id_usuario = $_POST['eliminarUsuario'];

            $respuesta = ModeloForms::modelEliminarUsuarioPorID($id_usuario);
            return $respuesta;
        };
    }    

}
