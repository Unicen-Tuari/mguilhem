<?php

require('libs/Smarty.class.php');	

class Vista{
	
	protected $smarty;
	
	public function __construct(){
		$this->smarty = new Smarty;
		$smarty->debugging = true;
	}
	
}


?>