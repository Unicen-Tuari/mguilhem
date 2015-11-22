<?php
include_once 'modelo/modbase.php';//primero se carga el modelo base
include_once 'modelo/modelouser.php';
include_once 'controlador/controladorbase.php';

class ControllerClass extends ControllerBase{
  
  function __construct(){
    $this->model = new NoticiasModel();
    $this->view  = new NoticiasView();
  }
  
  function mostrarHome(){
    $this->view->mostrarHome($this->model->getCabeceraNoticias());
  }
  
  function mostrarComidas(){
    $this->view->comidas();
  }  
  
  function mostrarEjercicios(){
    $this->view->ejercicios();
  }

  function mostrarNoticia(){
    if ($_REQUEST['id']!="" && $_REQUEST['categoria']!=""){
      $id = $_REQUEST['id'];
      $categoria = $_REQUEST['categoria'];
      $this->view->home_con_noticia($this->model->getNoticiaCompleta($id),$categoria);
    }
  }
  
  function Home(){
  $this->view->home_min($this->model->getCabeceraNoticias());
  }   

}

?>