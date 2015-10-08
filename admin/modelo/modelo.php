<?php
class NoticiasModel {
  private $noticias;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=novedades;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function getNoticias($categoria){
    $noticias = array();
    if ($categoria=="todos"){
    $consulta = $this->db->prepare("SELECT * FROM categoria");
    $consulta->execute();
    }
    else {
    $consulta = $this->db->prepare("SELECT * FROM categoria where nombre=?");
    $consulta->execute(array($categoria));
    }
//Todas las noticias
    while($noticiaconsulta = $consulta->fetch()) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM noticia where fk_id_cat=?");
      $consultaImagenes->execute(array($noticiaconsulta['id_cat']));
      $imagenes_noticia = $consultaImagenes->fetchAll();
      $noticiaconsulta['imagenes'] = $imagenes_noticia;
      $noticias[]=$noticiaconsulta;
    }

    return $noticias;
  }



}
?>