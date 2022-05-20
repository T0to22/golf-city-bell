<?php

class ModeloMails
{

    static public function EnvioMail($datos){

        $para = 'marcelo@ntasistemas.com.ar';
        $asunto = 'Contacto desde la Web del Club de Golf de City Bell';
        $mensajeFinal = 'Desde: ' . $datos['desde'] . PHP_EOL . 'Telefono: ' . $datos['telefono'] . PHP_EOL . 'Mensaje: ' . $datos['mensaje'];
        $mensajeFinal = wordwrap($mensajeFinal, 70, "\r\n");
        $headers = "From: test@golfcb.ntasistemas.com.ar";

        if (mail($para, $asunto, $mensajeFinal, $headers)) {
            echo '<p class="pt-2 text-success">Mensaje enviado correctamente! Gracias por escribirnos!.</p>';
        } else {
            echo '<p class="pt-2 text-danger">Ha ocurrido un error, por favor intenta nuevamente.</p>';
        };

    }

}