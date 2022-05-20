<?php

//plantilla html base
require_once 'controladores/base.controlador.php';

//controlador de formularios
require_once 'controladores/forms.controlador.php';

//contralador de mails
require_once 'controladores/mail.controlador.php';

//modelo de formularios
require_once 'modelos/forms.modelos.php';

//modelo para envio de mails
require_once 'modelos/mails.modelos.php';

$base = new ControladorBase();
$base -> ctrGetBase();