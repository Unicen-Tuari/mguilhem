<?php
require ('libs/Smarty.class.php');

class TareasView {
    
    private $smarty;
    private $errores;

    function __construct(){
      $this->smarty = new Smarty();
      $this->errores = array();
    }

    function comidas(){
        $this->smarty->display('comidas.tpl');
    }

    function ejercicios(){
        $this->smarty->display('ejercicios.tpl');
    }
    
    function home_min($tareas){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->assign('todascat', $tareas);
        $this->smarty->display('home.tpl');
    }
    
    function dropdown($tareas,$todascat){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->assign('todascat', $todascat);
        $this->smarty->display('home.tpl');
    }
    
    function mostrarError($error){
      array_push($this->errores, $error);
    }

    function mostrarHome($tareas){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->assign('todascat', $tareas);
        $this->smarty->display('index.tpl');
    }

}

?>