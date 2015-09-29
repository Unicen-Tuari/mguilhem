<?php
class TareasModel {
  private $tareas;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=novedades;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  private function subirImagenes($imagenes){
    $carpeta = "uploads/imagenes/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
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


function agregarTarea($tarea, $imagenes,$categoria,$titulo){
    try{
        $destinos_finales=$this->subirImagenes($imagenes);
        
        //Inserto la tarea
        $this->db->beginTransaction(); //inicio transaccion
        
        // si no existe la categoria, la crea
        $consulta = $this->db->prepare('SELECT * FROM categoria WHERE nombre = ?');
        $consulta->execute(array($categoria));
        $id = $consulta->fetch();

        if ($id == null){
        
        $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
        $consulta->execute(array($categoria));
        $id_tarea = $this->db->lastInsertId();
        }
        else{
        $id_tarea = $id['id_cat'];
        }

        
        
        //Insertar las imagenes
        foreach ($destinos_finales as $key => $value) {
            $consulta = $this->db->prepare('INSERT INTO noticia(fk_id_cat,path,descripcion,titulo) VALUES(?,?,?,?)');
            $consulta->execute(array($id_tarea, $value,$tarea,$titulo));
        }
        $this->db->commit(); //todo ok, subo transaccion
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
}

  function borrarTarea($id_tarea){
    //guarda categoria
    
    $consulta= $this->db->prepare('SELECT fk_id_cat FROM noticia WHERE id=?');
    $consulta->execute(array($id_tarea));
    $categoria= $consulta->fetch();
    
    //borra noticia
    $consulta = $this->db->prepare('DELETE FROM noticia WHERE id=?');
    $consulta->execute(array($id_tarea));
    
    //pregunta si categoria tiene noticias
    $consulta = $this->db->prepare('SELECT * FROM noticia WHERE fk_id_cat=?');
    $consulta->execute(array($categoria[0]));
    $id = $consulta->fetch();
      
    //no tiene noticias? borra categoria
    if ($id == null){ 
    $consulta = $this->db->prepare('DELETE FROM categoria WHERE id_cat=?');
    $consulta->execute(array($categoria[0]));
    }
  }


}
?>