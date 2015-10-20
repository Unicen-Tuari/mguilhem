<?php
require ('libs/Smarty.class.php');

class NoticiasView {
    
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
    
    //ir pag home (con novedades)
    function home_min($cabeceras){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('cabeceras', $cabeceras);
        $this->smarty->display('home.tpl');
    }
  
    function home_con_noticia($noticiacompleta,$categoria){
      $this->smarty->assign('noticiacompleta', $noticiacompleta);
      $this->smarty->assign('categoria', $categoria);
      $this->smarty->display('noticia.tpl');
    }
    
    function mostrarError($error){
      array_push($this->errores, $error);
    }

    //la primera vez q se carga la pág
    function mostrarHome($cabeceras){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('cabeceras', $cabeceras);
        $this->smarty->display('index.tpl');
    }

}

?>