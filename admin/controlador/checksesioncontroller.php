<?php
class CheckSesionController {
  protected $model;
  protected $vista;

  function checkSesion(){
    session_start();
    if(!isset($_SESSION["email"])){
      header("Location: index.php?action=login");
      die();
    }
  }
}
?>
