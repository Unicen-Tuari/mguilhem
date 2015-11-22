<?php
include_once 'controlador/controladorbase.php';
include_once 'modelo/modelomail.php';
include_once 'vista/vistamail.php';

class ControllerMail extends ControllerBase{
  
  function __construct(){
    $this->model = new MailModel();  
    $this->view  = new MailView();
  }
  
  function enviarMail(){
    if ($_REQUEST['nombremail']!="" && $_REQUEST['mensaje']!="" && $_REQUEST['mailfrom']!= ""){
      $titulo  = "From: " . $_REQUEST['nombremail'] . " Mail: " . $_REQUEST['mailfrom'];
      $mensaje = $_REQUEST['mensaje'];
      $this->view->envioMail($this->model->enviarMail($titulo,$mensaje));
    }
    else $this->view->envioMail("error");
  }
}
?>