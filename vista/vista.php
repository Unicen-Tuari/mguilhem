<?php
include_once 'libs/Smarty.class.php';

class viewclass{
    
private $smarty;

function __construct(){
    $this->smarty = new Smarty();
}
    
function mostrar(){
    $this->smarty->display('home.tpl');
}

}

?>