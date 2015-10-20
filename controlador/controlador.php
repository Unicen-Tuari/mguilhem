<?php
include_once 'vista/vista.php';
include_once 'modelo/modelobase.php';

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
    $this->view->mostrarHome($this->model->getCabeceraNoticias());
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
            case ConfigApp::$ACTION_MOSTRAR_NOTICIA:
                $controller = new ControllerClass();
                $id=$_REQUEST['id'];
                $categoria=$_REQUEST['categoria'];
                $this->view->home_con_noticia($this->model->getNoticiaCompleta($id),$categoria);
                break;
            case ConfigApp::$ACTION_HOME:
                $controller = new ControllerClass();
                $categoria='todos';
                $this->view->home_min($this->model->getCabeceraNoticias());
                break;
            default:
                echo 'Pagina no encontrada';
                break;
            }
        }     
    }   

}

?>