<?php
class MailModel{
  
  function enviarMail($titulo,$mensaje){
  $notificacion="";
  if (mail('maximiliano.guilhem@gmail.com',$titulo,$mensaje)) $notificacion="success";
  else $notificacion="error";
  return $notificacion;  
  }
  
}

?>