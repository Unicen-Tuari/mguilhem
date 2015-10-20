<?php
include_once 'modelo/modelocat.php';

class controladorcat extends ControllerClass{
    private $vista;
    private $model;

function __construct($view){
    $this->vista = $view;
    $this->model = new CatModel();
}
  
    function agregarCategoria(){
    if($_REQUEST['newcategoria']!=""){
        $this->model->agregarCategoria($_REQUEST['newcategoria']);
      }
    else{
        $this->vista->mostrarError('La categoria que intenta crear esta le falta información');
    }
    $categoria="todos";
    $this->vista->mostrarHome($this->model->getNoticias($categoria));
  }
}
?>