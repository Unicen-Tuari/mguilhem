<?php
include_once 'modbaseadm.php';

class CatModel extends ModBaseAdm {
  
  function agregarCategoria($categoria){
    $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
    $consulta->execute(array($categoria));
  }
  
  function getCategoria(){
    $consulta = $this->db->prepare('SELECT nombre FROM categoria');
    $response = $consulta->execute();
    return $response;
  }
  
  function borrarCategoria($categoria){
    $consulta = $this->db->prepare('DELETE FROM categoria WHERE nombre=?');
    $consulta->execute(array($categoria));
  }
  
  function cambiarNombreCat($categoria,$nombre){
    $consulta = $this->db->prepare('UPDATE categoria SET nombre=? WHERE nombre=?');
    $consulta->execute(array($nombre,$categoria));
  }
}

?>