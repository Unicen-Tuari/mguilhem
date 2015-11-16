<?php
class CatModel extends ModBase {

  /* no hace falta, hace el construct del padre
  function __construct() {  }
  */
  
  function agregarCategoria($categoria){
    $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
    $consulta->execute(array($categoria));
  }
}
?>