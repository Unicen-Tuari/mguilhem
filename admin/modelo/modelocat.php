<?php
class CatModel {
  private $noticias;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=novedades;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  
  function agregarCategoria($categoria){
    $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
    $consulta->execute(array($categoria));
  }
}
?>