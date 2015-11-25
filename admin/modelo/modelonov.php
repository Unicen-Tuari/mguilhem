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
    try{
      $this->db->beginTransaction();
      $consulta = $this->db->prepare('DELETE FROM noticia WHERE id=?');
      $consulta->execute(array($id_noticia));
      $this->db->commit();
    }
    catch(Exception $e){
      $this->db->rollBack();
    }
  }

  function cambiarValorNot($id,$sector,$nombre){
    try{
      $this->db->beginTransaction();
      if ($sector == "titulo"){
        $consulta = $this->db->prepare('UPDATE noticia SET titulo=? WHERE id=?');
        $consulta->execute(array($nombre,$id));
      }
      if ($sector == "descripcion"){
        $consulta = $this->db->prepare('UPDATE noticia SET descripcion=? WHERE id=?');
        $consulta->execute(array($nombre,$id));
      }
      $this->db->commit();
    }
    catch(Exception $e){
      $this->db->rollBack();
    }
  }
    
}
?>