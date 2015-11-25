<?php
include_once 'controladorbase.php';

class CheckSesionController extends ControllerBase{
  
  function checkSesion(){
    session_start();
    if(!isset($_SESSION["email"]) || time() - $_SESSION['login_time'] > 600){ //600 sec = 10min
      header("Location: index.php?action=login");
      die();
    }
  }
}
?>
