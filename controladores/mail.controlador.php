<?php

class ControladorMails {

    static public function EnviarMail(){

        if (isset($_POST['contactoNombreApellido'], $_POST['contactoEmail'], $_POST['contactoTelefono'], $_POST['contactoMensaje'])) {

            // $para = 'clubhipicoydegolfcb@gmail.com';
            $desde = $_POST['contactoEmail'];
            $telefono =$_POST['contactoTelefono'];
            $mensaje = $_POST['contactoMensaje'];
            // $cabeceras = 'From: webmaster@example.com';

            // mail($para, $titulo, $mensaje, $cabeceras);
            // return mail($para, $titulo, $mensaje);

            $datos = array(
                'desde' => $desde,
                'telefono' => $telefono,
                'mensaje' => $mensaje
            );

            $respuesta = ModeloMails::EnvioMail($datos);
            return $respuesta;
            
        };

    }

}