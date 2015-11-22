<?php
include_once 'vista/vistabase.php';

class MailView extends VistaBase{
  
  function envioMail($notificacion){
    $this->smarty->assign('notificacion', $notificacion);
    $this->smarty->display('mail.tpl');
  }
  
}