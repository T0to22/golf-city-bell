<?php

//plantilla html base
require_once 'controladores/base.controlador.php';

//controlador de formularios
require_once 'controladores/forms.controlador.php';

//modelo de formularios
require_once 'modelos/forms.modelos.php';

$base = new ControladorBase();
$base -> ctrGetBase();