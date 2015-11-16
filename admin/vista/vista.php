<?php
require ('../libs/Smarty.class.php');

class NoticiasView {
    
    private $smarty;
    private $errores;

    function __construct(){
      $this->smarty = new Smarty();
      $this->errores = array();
    }
    
    //cargar el contenedor con el home
    function home_min($noticias){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('todascat', $noticias); // verificar si se usa, creo que ya no
        $this->smarty->display('vernoticias.tpl');
    }
    
    //cuando se filtra por categoria
    function dropdown($noticias,$todascat){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('todascat', $todascat);
        $this->smarty->display('home.tpl');
    }
    
    function mostrarError($error){
      array_push($this->errores, $error);
    }

    //la primera vez q se carga la pág
    function mostrarHome($noticias){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('todascat', $noticias);
        $this->smarty->display('index.tpl');
    }

}

?>