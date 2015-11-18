<?php
include_once 'vista/vistabase.php';

class NoticiasView extends VistaBase{
    
    //cargar el contenedor con el home
    function home_min($noticias){
        $this->smarty->assign('email', $_SESSION["email"]);
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->display('vernoticias.tpl');
    }

    //la primera vez q se carga la pág
    function mostrarHome($noticias){
        $this->smarty->assign('email', $_SESSION["email"]);
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->display('index.tpl');
    }

}

?>