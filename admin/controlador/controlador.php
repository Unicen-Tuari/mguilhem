<?php
include_once 'vista/vista.php';
include_once 'modelo/modelo.php';

class ControllerClass{
    
    private $view;
    private $model;

    function __construct(){
        $this->model = new NoticiasModel();
        $this->view  = new NoticiasView();
    }

    public function Analizar(){
    if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
    {
    $categoria="todos";
    $this->view->mostrarHome($this->model->getNoticias($categoria));
    }
    else {
        switch ($_REQUEST[ConfigApp::$ACTION]) 
            {
            case ConfigApp::$ACTION_HOME:
                $controller = new ControllerClass();
                $categoria='todos';
                $this->view->home_min($this->model->getNoticias($categoria));
                break;
            case ConfigApp::$ACTION_DROPDOWN:
                $controller = new ControllerClass();
                $categoria=$_REQUEST['dropdown'];
                $this->view->dropdown($this->model->getNoticias($categoria),$this->model->getNoticias('todos'));
                break;
            case ConfigApp::$ACTION_AGREGAR_NOTICIA:
                $controller = new controladornov($this->view);
                $controller->agregarNoticia();
                break;
            case ConfigApp::$ACTION_BORRAR_TAREA:
                $controller = new controladornov($this->view);
                $controller->borrarTarea();
                break;
            default:
                echo 'Pagina no encontrada';
                break;
            }
        }     
    }   




}

?>