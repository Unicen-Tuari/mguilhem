<?php
class TareasModel {
  private $tareas;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=novedades;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function getTareas($categoria){
    $tareas = array();
    if ($categoria=="todos"){
    $consulta = $this->db->prepare("SELECT * FROM categoria");
    $consulta->execute();
    }
    else {
    $consulta = $this->db->prepare("SELECT * FROM categoria where nombre=?");
    $consulta->execute(array($categoria));
    }
//Todas las tareas
    while($tarea = $consulta->fetch()) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM noticia where fk_id_cat=?");
      $consultaImagenes->execute(array($tarea['id_cat']));
      $imagenes_tarea = $consultaImagenes->fetchAll();
      $tarea['imagenes'] = $imagenes_tarea;
      $tareas[]=$tarea;
    }

    return $tareas;
  }

}
?>