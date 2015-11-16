<?php
class NovModel extends ModBase {

  /* no hace falta, hace el construct del padre
  function __construct() {  }
  */

  private function subirImagenes($imagenes){
    $carpeta  = "../uploads/imagenes/";
    $carpetas = "uploads/imagenes/";
    $destinos_finales = array();
    $destino_server = array();
      
    foreach ($imagenes["tmp_name"] as $key => $value) {
        $uid= uniqid();
        $destinos_finales[] = $carpetas.$uid.$imagenes["name"][$key];
        $destino_server[] = $carpeta.$uid.$imagenes["name"][$key];
        move_uploaded_file($value, end($destino_server)); //se guarda la img del tmp al "../uploads/imagenes/"
    }
    return $destinos_finales; //se devuelve la img con la direccion "/uploads/imagenes/" para q se guarde en el bd
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

  function agregarNoticia($descripcion, $imagenes,$categoria,$titulo){
    try{
        $destinos_finales=$this->subirImagenes($imagenes);
        
        //Inserto la noticia
        $this->db->beginTransaction(); //inicio transaccion
        
        // si no existe la categoria, la crea
        $consulta = $this->db->prepare('SELECT * FROM categoria WHERE nombre = ?');
        $consulta->execute(array($categoria));
        $id = $consulta->fetch();

        if ($id == null){
            $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
            $consulta->execute(array($categoria));
            $id_noticia = $this->db->lastInsertId();
            }
        else{
            $id_noticia = $id['id_cat'];
        }

        //Insertar las imagenes
        foreach ($destinos_finales as $key => $value) {
            $consulta = $this->db->prepare('INSERT INTO noticia(fk_id_cat,path,descripcion,titulo) VALUES(?,?,?,?)');
            $consulta->execute(array($id_noticia, $value,$descripcion,$titulo));
        }
        $this->db->commit(); //todo ok, subo transaccion
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
}

  function borrarNoticia($id_noticia){
    // COMENTE LA PARTE DE SI LA CATEGORIA ESTABA SIN NOTICIAS, SE BORRABA LA CATEGORIA
    
    //guarda categoria
    
    //$consulta= $this->db->prepare('SELECT fk_id_cat FROM noticia WHERE id=?');
    //$consulta->execute(array($id_noticia));
    //$categoria= $consulta->fetch();
    
    //borra noticia
    $consulta = $this->db->prepare('DELETE FROM noticia WHERE id=?');
    $consulta->execute(array($id_noticia));
    
    //pregunta si categoria tiene noticias
    //$consulta = $this->db->prepare('SELECT * FROM noticia WHERE fk_id_cat=?');
    //$consulta->execute(array($categoria[0]));
    //$id = $consulta->fetch();
      
    //no tiene noticias? borra categoria
    //if ($id == null){ 
    //$consulta = $this->db->prepare('DELETE FROM categoria WHERE id_cat=?');
    //$consulta->execute(array($categoria[0]));
    //}
  }

}
?>