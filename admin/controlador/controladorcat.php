<?php
include_once 'modelo/modelocat.php';

class controladorcat{
    private $vista;
    private $model;

  function __construct($view){
    $this->vista = $view;
    $this->model = new CatModel();
  }
  
  function agregarCategoria(){
    if($_REQUEST['newcategoria']!="") $this->model->agregarCategoria($_REQUEST['newcategoria']);
    else $this->vista->mostrarError('La categoria que intenta crear esta le falta información');
    $this->view->home_min($this->model->getNoticias('todos'));
  }
}

?>