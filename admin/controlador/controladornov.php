<?php
include_once 'modelo/modelonov.php';

class controladornov{
    private $vista;
    private $model;

  function __construct($view){
    $this->vista = $view;
    $this->model = new NovModel();
  }
    
  function agregarNoticia(){
    if($_REQUEST['descripcion']!="" && $_REQUEST['titulo']!="" && ($_FILES["imagesToUpload"]["error"][0])!=4 && $_REQUEST['categoria']!=""){
        $this->model->agregarNoticia($_REQUEST['descripcion'],$_FILES['imagesToUpload'],$_REQUEST['categoria'],$_REQUEST['titulo']);}
    else{$this->vista->mostrarError('La noticia que intenta crear esta le falta información');}
    $this->vista->mostrarHome($this->model->getNoticias("todos"));
  }

  function borrarNoticia(){
    if (isset($_REQUEST['id_noticia'])) $this->model->borrarNoticia($_REQUEST['id_noticia']);
    else $this->vista->mostrarError('La noticia que intenta borrar no existe');
    $this->view->home_min($this->model->getNoticias('todos'));
  }
    
}
?> 