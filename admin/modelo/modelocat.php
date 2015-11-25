<?php
include_once 'modbaseadm.php';

class CatModel extends ModBaseAdm {
  
  function agregarCategoria($categoria){
    try{
      $this->db->beginTransaction();
      $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
      $consulta->execute(array($categoria));
      $lastid=$this->db->lastInsertId();
      $this->db->commit();
      return $lastid;
    }
    catch(Exception $e){
      $this->db->rollBack();
      return 'No se agrego la categoria';
    }
  }
  
  function getCategoria(){
    $consulta = $this->db->prepare('SELECT nombre FROM categoria');
    $response = $consulta->execute();
    return $response;
  }
  
  function borrarCategoria($categoria){
    $consulta = $this->db->prepare('DELETE FROM categoria WHERE id_cat=?');
    $consulta->execute(array($categoria));
  }
  
  function cambiarNombreCat($categoria,$nombre){
    try{
      $this->db->beginTransaction();
      $consulta = $this->db->prepare('UPDATE categoria SET nombre=? WHERE id_cat=?');
      $consulta->execute(array($nombre,$categoria));
      $this->db->commit();
      return 'Categoria modificada';
    }
    catch(Exception $e){
      $this->db->rollBack();
      return 'No se  modifico la categoria';
    }
  }
}

?>