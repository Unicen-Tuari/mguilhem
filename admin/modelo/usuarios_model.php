<?php
include_once '../modelo/modbase.php';

class UsuariosModel extends ModBase{

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }

}
?>
