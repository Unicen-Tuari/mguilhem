<?php

include_once 'config/config_app.php';
include_once 'controlador/controlador.php';
include_once 'controlador/controladornov.php';
include_once 'controlador/controladorcat.php';

$routing = new ControllerClass();
$routing->Analizar();

?>