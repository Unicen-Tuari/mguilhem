<?php
include_once '../controlador/controladorbase.php';

class CheckSesionController extends ControllerBase{

  function __construct(){}
  
  function checkSesion(){
    session_start();
    if(!isset($_SESSION["email"])){
      header("Location: index.php?action=login");
      die();
    }
  }
}
?>
