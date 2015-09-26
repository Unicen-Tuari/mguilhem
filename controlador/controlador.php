<?php
include_once 'vista/vista.php';
include_once 'modelo/modelo.php';

class ControllerClass{
    
    private $view;
    private $model;

    function __construct(){
        $this->model = new TareasModel();
        $this->view  = new TareasView();
    }

    public function Analizar(){
    if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
    {
    $categoria="todos";
    $this->view->mostrarHome($this->model->getTareas($categoria));
    }
    else {
        switch ($_REQUEST[ConfigApp::$ACTION]) 
            {
            case ConfigApp::$ACTION_COMIDAS:
                $controller = new ControllerClass();
                $this->view->comidas();
                break;
            case ConfigApp::$ACTION_EJERCICIOS:
                $controller = new ControllerClass();
                $this->view->ejercicios();
                break;
            case ConfigApp::$ACTION_HOME:
                $controller = new ControllerClass();
                $categoria="todos";
                $this->view->home_min($this->model->getTareas($categoria));
                break;
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
    }   

    
    
    
    
  function agregarTarea(){
    if(isset($_REQUEST['task']) && isset($_REQUEST['titulo']) && isset($_FILES['imagesToUpload']) && isset($_REQUEST['categoria'])){
        $this->model->agregarTarea($_REQUEST['task'],$_FILES['imagesToUpload'],$_REQUEST['categoria'],$_REQUEST['titulo']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHome();
  }

  function borrarTarea(){
    if(isset($_REQUEST['id_task'])){
      $this->model->borrarTarea($_REQUEST['id_task']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHome();
  }


}

?>