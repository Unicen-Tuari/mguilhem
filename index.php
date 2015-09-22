<?php
include_once 'config/config_app.php';
include_once 'controlador/controlador.php';


if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
    $controller = new ControllerClass();
    $controller->mostrarHome();
}
else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_AGREGAR_TAREA:
      $controller = new ControllerClass();
      $controller->agregarTarea();
      break;
    case ConfigApp::$ACTION_BORRAR_TAREA:
      $controller = new ControllerClass();
      $controller->borrarTarea();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }

}

?>

