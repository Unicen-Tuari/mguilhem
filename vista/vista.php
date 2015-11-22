<?php
include_once 'vista/vistabase.php';

class NoticiasView extends VistaBase{
  
  //la primera vez q se carga la pág
  function mostrarHome($cabeceras){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->assign('cabeceras', $cabeceras);
    $this->smarty->display('index.tpl');
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

  //mostrar una noticia seleccionada
  function home_con_noticia($noticiacompleta,$categoria){
    $this->smarty->assign('noticiacompleta', $noticiacompleta);
    $this->smarty->assign('categoria', $categoria);
    $this->smarty->display('noticia.tpl');
  }
  
}

?>