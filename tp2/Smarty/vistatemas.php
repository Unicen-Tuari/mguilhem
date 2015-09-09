<?php

require('vistas/Vista.php');	

class vistatemas extends Vistas{

	function mostrartemas($temas){
		$this->smarty->assign("temas", $temas);
		$this->smarty->display('temas.tpl');
	}
	
}


?>