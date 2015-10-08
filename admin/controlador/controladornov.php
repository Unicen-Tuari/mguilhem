<?php
include_once 'modelo/modelonov.php';
class controladornov extends ControllerClass{
    private $vista;
    private $model;

function __construct($view){
    $this->vista = $view;
    $this->model = new NovModel();
}
    
    
  function agregarNoticia(){
    if($_REQUEST['task']!="" && $_REQUEST['titulo']!="" && ($_FILES["imagesToUpload"]["error"][0])!=4 && $_REQUEST['categoria']!=""){
        $this->model->agregarNoticia($_REQUEST['task'],$_FILES['imagesToUpload'],$_REQUEST['categoria'],$_REQUEST['titulo']);
      }
    else{
        $this->vista->mostrarError('La noticia que intenta crear esta le falta información');
    }
    $categoria="todos";
    $this->vista->mostrarHome($this->model->getNoticias($categoria));
  }

  function borrarTarea(){
    if(isset($_REQUEST['id_task'])){
      $this->model->borrarTarea($_REQUEST['id_task']);
    }
    else{
      $this->vista->mostrarError('La noticia que intenta borrar no existe');
    }
    $categoria="todos";
    $this->vista->mostrarHome($this->model->getNoticias($categoria));
  }
    
}
?> 