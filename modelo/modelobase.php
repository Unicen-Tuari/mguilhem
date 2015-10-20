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
  
  function getCabeceraNoticias(){
    $consulta = $this->db->prepare("SELECT titulo,id,path,fk_id_cat FROM noticia");
    $consulta->execute();
    while($noticiaconsulta = $consulta->fetch()){
      $cabeceras[]=$noticiaconsulta;
    }
    
    foreach ($cabeceras as $cab){
    $consultacat = $this->db->prepare("SELECT nombre FROM categoria where id_cat=?");
    $consultacat->execute(array($cab['fk_id_cat']));
    $cabeceras[$cab['id']]=$consultacat->fetch();
    }
    return $cabeceras;
  }
  
  function getNoticiaCompleta($id){
    $consulta = $this->db->prepare("SELECT * FROM noticia where id=?");
    $consulta->execute(array($id));
    $noticiacompleta = $consulta->fetch();
    return $noticiacompleta;
  }
  
  

}
?>