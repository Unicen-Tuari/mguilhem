<?php
include_once 'modbaseadm.php';

class UsuariosModel extends ModBaseAdm{

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }

}
?>
