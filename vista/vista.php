<?php
require ('libs/Smarty.class.php');

class TareasView {
    
    private $smarty;
    private $errores;

    function __construct(){
      $this->smarty = new Smarty();
      $this->errores = array();
    }

    //ir pag comidas
    function comidas(){
        $this->smarty->display('comidas.tpl');
    }

    //ir pag ejercicio
    function ejercicios(){
        $this->smarty->display('ejercicios.tpl');
    }
    
    //cargar el contenedor con el home
    function home_min($tareas){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->assign('todascat', $tareas);
        $this->smarty->display('home.tpl');
    }
    
    //cuando se filtra por categoria
    function dropdown($tareas,$todascat){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->assign('todascat', $todascat);
        $this->smarty->display('home.tpl');
    }
    
    function mostrarError($error){
      array_push($this->errores, $error);
    }

    //la primera vez q se carga la pág
    function mostrarHome($tareas){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->assign('todascat', $tareas);
        $this->smarty->display('index.tpl');
    }

}

?>