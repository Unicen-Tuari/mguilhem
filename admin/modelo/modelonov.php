<?php
include_once 'modbaseadm.php';
class NovModel extends ModBaseAdm {

  private function subirImagenes($imagenes){
    $carpeta  = "../uploads/imagenes/";
    $carpetas = "uploads/imagenes/";
    $destinos_finales = array();
    $destino_server = array();
      
    foreach ($imagenes["tmp_name"] as $key => $value) {
        $uid= uniqid();
        $destinos_finales[] = $carpetas.$uid.$imagenes["name"][$key];
        $destino_server[] = $carpeta.$uid.$imagenes["name"][$key];
        move_uploaded_file($value, "../".end($destino_server)); //se guarda la img del tmp al "../uploads/imagenes/"
    }
    return $destinos_finales; //se devuelve la img con la direccion "/uploads/imagenes/" para q se guarde en el bd
  }

  function agregarNoticia($descripcion, $imagenes,$id_cat,$titulo){
    try{
      $destinos_finales=$this->subirImagenes($imagenes);//paso imagenes del fakepath al verdadero

      $this->db->beginTransaction(); //inicio transaccion

      $direimagen="";
      $lastid="";
      //Insertar las imagenes
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO noticia(fk_id_cat,path,descripcion,titulo) VALUES(?,?,?,?)');
        $consulta->execute(array($id_cat, $value,$descripcion,$titulo));
        $lastid=$this->db->lastInsertId();
        $direimagen=$value;
      }
      $this->db->commit(); //todo ok, subo transaccion
      
      $idydire=[];
      $idydire['idnot']=$lastid;
      $idydire['direimagen']=$direimagen;
      return $idydire;
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

  function cambiarValorNot($id,$sector,$nombre){
    if ($sector == "titulo"){
      $consulta = $this->db->prepare('UPDATE noticia SET titulo=? WHERE id=?');
      $consulta->execute(array($nombre,$id));
    }
    if ($sector == "descripcion"){
      $consulta = $this->db->prepare('UPDATE noticia SET descripcion=? WHERE id=?');
      $consulta->execute(array($nombre,$id));
    }
  }
}
?>