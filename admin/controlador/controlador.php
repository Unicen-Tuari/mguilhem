<?php
include_once 'vista/vista.php';
include_once '../modelo/modbase.php';
include_once 'modelo/modbaseadm.php';


class ControllerClassAdm{
    
    private $view;
    private $model;

    function __construct(){
        $this->model = new NovModel();
        $this->view  = new NoticiasView();
    }

    public function Analizar(){
      if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
      $this->view->mostrarHome($this->model->getNoticias("todos"));
      }
      else {
          switch ($_REQUEST[ConfigApp::$ACTION]) 
              {
              case ConfigApp::$ACTION_HOME:
                  $controller = new ControllerClassAdm();
                  $this->view->home_min($this->model->getNoticias('todos'));
                  break;
              case ConfigApp::$ACTION_AGREGAR_NOTICIA:
                  $controller = new controladornov($this->view);
                  $controller->agregarNoticia();
                  break;
              case ConfigApp::$ACTION_BORRAR_NOTICIA:
                  $controller = new controladornov($this->view);
                  $controller->borrarNoticia();
                  break;
              case ConfigApp::$ACTION_AGREGAR_CATEGORIA:
                  $controller = new controladorcat($this->view);
                  $controller->agregarCategoria();
                  break;
              default:
                  echo 'Pagina no encontrada';
                  break;
              }
          }     
    }   

}

?>