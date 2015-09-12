<?php

include_once 'vista/vista.php';
include_once 'modelo/modelo.php';

class ControllerClass{
    private $view;
    private $model;

function __construct(){
//   $this->model = new TareaModel();
   $this->view = new viewclass();
}


function home(){
$this->view->mostrar();
  }
    
}

?>