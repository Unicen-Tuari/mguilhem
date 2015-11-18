<?php
include_once 'modelo/modelonov.php';

class controladornov extends CheckSesionController{

  function __construct(){
    $this->vista = new NoticiasView();
    $this->model = new NovModel();
    $this->checkSesion();
  }
  
  function mostrarHome(){
    $this->vista->mostrarHome($this->model->getNoticias("todos"));
  }
  
  function mostrarHomeMin(){
    $this->vista->home_min($this->model->getNoticias('todos'));
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
    $this->vista->home_min($this->model->getNoticias('todos'));
  }
    
}
?> 