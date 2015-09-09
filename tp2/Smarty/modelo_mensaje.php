<?php

include_once "modelodb.php";


class Mensaje extends ModeloDB{
	
	/**
	 * $id es el nro o nombre del postgeneral ya definido
	 */
	public function carga_titulos($id){
		return $this->query("SELECT Titulo FROM Temas WHERE id == 1");
	}
	
	
	/*
		$id es el nombre del post a revisar
	*/
	public function carga_mensajes($id){
		return $this->query("
			SELECT * 
			FROM Mensajes
    		WHERE tema LIKE".$id."");
	}
	
	
	public function carga_eventos($nro){
		return $this->query("SELECT * FROM Eventos WHERE id ==".$nro."")
	}
	
}

?>