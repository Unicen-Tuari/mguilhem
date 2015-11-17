<?php
class NoticiasModel extends ModBase {

  /* no hace falta, hace el construct del padre
  function __construct() {  }
  */
  
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