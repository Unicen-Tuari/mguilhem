<?php
include_once '../vista/vistabase.php';

class LoginView extends VistaBase{

function mostrar(){
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->display('login.tpl');
}

}


?>
