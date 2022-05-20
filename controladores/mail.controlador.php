<?php

class ControladorMails
{

    static public function EnviarMail()
    {

        if (isset($_POST['contactoNombreApellido'], $_POST['contactoEmail'], $_POST['contactoTelefono'], $_POST['contactoMensaje'])) {

            $desde = $_POST['contactoEmail'];
            $telefono = $_POST['contactoTelefono'];
            $mensaje = $_POST['contactoMensaje'];

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
