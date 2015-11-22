<?php
class CatModel extends ModBaseAdm {

  /* no hace falta, hace el construct del padre
  function __construct() {  }
  */
  
  function agregarCategoria($categoria){
    $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
    $consulta->execute(array($categoria));
  }
  
  function getCategoria(){
    $consulta = $this->db->prepare('SELECT nombre FROM categoria');
    $response = $consulta->execute();
    return $response;
  }
}

?>