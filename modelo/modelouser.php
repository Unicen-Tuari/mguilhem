<?php
class NoticiasModel extends ModBase {

  /* no hace falta, hace el construct del padre
  function __construct() {  }
  */
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

    while($noticiaconsulta = $consulta->fetch(PDO::FETCH_ASSOC)){
      $cabeceras[]=$noticiaconsulta; 
    }
    
    if (isset($cabeceras)){
      foreach ($cabeceras as $cab => $value){
        $consulta = $this->db->prepare("SELECT nombre FROM categoria where id_cat=?");
        $consulta->execute(array($value['fk_id_cat']));
        $categoria = $consulta->fetch(PDO::FETCH_ASSOC);
        $cabeceras[$cab]['categoria'] = $categoria['nombre'];
        }
      }
    else {$cabeceras = [];}
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