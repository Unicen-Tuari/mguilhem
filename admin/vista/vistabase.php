<?php
require ('../libs/Smarty.class.php');

class VistaBase {
  protected $smarty;
  protected $errores;

  function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();
  }

  function mostrarError($error){
    array_push($this->errores, $error);
  }

}

?>