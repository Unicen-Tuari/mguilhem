<?php
include_once 'config/config_app.php';
include_once 'vista/vista.php';
include_once 'controlador/controlador.php';
include_once 'controlador/controllermail.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
  $controller = new ControllerClass();
  $controller->mostrarHome();
}
else{
  switch ($_REQUEST[ConfigApp::$ACTION]){
    case ConfigApp::$ACTION_COMIDAS:
      $controller = new ControllerClass();
      $controller->mostrarComidas();
      break;
    case ConfigApp::$ACTION_EJERCICIOS:
      $controller = new ControllerClass();
      $controller->mostrarEjercicios();
      break;
    case ConfigApp::$ACTION_MOSTRAR_NOTICIA:
      $controller = new ControllerClass();
      $controller->mostrarNoticia();
      break;
    case ConfigApp::$ACTION_HOME:
      $controller = new ControllerClass();
      $controller->Home();
      break;
    case ConfigApp::$ACTION_MAIL:
      $controller = new ControllerMail();
      $controller->enviarMail();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>