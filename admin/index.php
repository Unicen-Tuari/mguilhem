<?php
include_once 'config/config_app.php';
//include_once 'controlador/controladoradm.php';
include_once 'vista/vista.php'; 
include_once '../modelo/modbase.php';                 // modelo base levanta la BD
include_once 'modelo/modbaseadm.php';                 // modelo base admin funcion mostrar noticias
include_once 'controlador/checksesioncontroller.php'; // controlador base de checkeo sesion
include_once 'controlador/login_controller.php';      // controlador de sesion/login
include_once 'controlador/controladornov.php';        // controlador para noticias
include_once 'controlador/controladorcat.php';        // controlador para categorias

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
  $controller = new controladornov();
  $controller->mostrarHome();
}
else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_HOME:
      $controller = new controladornov();
      $controller->mostrarHomeMin();
      break;
    case ConfigApp::$ACTION_AGREGAR_NOTICIA:
      $controller = new controladornov();
      $controller->agregarNoticia();
      break;
    case ConfigApp::$ACTION_BORRAR_NOTICIA:
      $controller = new controladornov();
      $controller->borrarNoticia();
      break;
    case ConfigApp::$ACTION_AGREGAR_CATEGORIA:
      $controller = new controladorcat();
      $controller->agregarCategoria();
      break;
    case ConfigApp::$ACTION_LOGIN:
      $controller = new LoginController();
      $controller->login();
      break;
    case ConfigApp::$ACTION_LOGOUT:
      $controller = new LoginController();
      $controller->logout();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }
}
?>