<?php
/**
 * Example Application
 *
 * @package Example-application
 */
error_reporting(E_ALL);
ini_set("display_errors",1);

require ('libs/Smarty.class.php');

include_once 'modelodb.php';
include_once 'vistas.php';
include_once 'controlador.php';
$model = new ModeloDB();
$view = new Vistas();//TERMINAR
$controller = new controller($model, $view);

if(! array_key_exists('action', $_REQUEST) && $_REQUEST['action']=='foro')
{
  $controller->Analizar($_REQUEST["action"]);
}
else {
	$smarty->display('indexforo.tpl');
}



?>