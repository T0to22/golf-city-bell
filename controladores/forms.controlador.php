<?php

class ControladorForms{

    //Controlador para el Registro o ALTA de Usuarios
    static public function ctrRegistroUsuario(){
        
        if (isset($_POST['registroEmail'])){

            $datos =  array(
                'email' => $_POST['registroEmail'],
                'pwd' => $_POST['registroPWD']
            );
                
            $respuesta = ModeloForms::modelRegistroUsuario($datos);
            return $respuesta;

        };

        
    }

}