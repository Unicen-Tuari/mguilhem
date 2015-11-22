<?php
require_once 'tarea_api.php';

$tareaAPI = new TareaAPI($_REQUEST['parametros']);
echo $tareaAPI->processAPI();


switch ($_REQUEST['parametros']) {
	case 'Categoria':
		$categoriaAPI = new CategoriaAPI($_REQUEST['parametros']);
		echo $categoriaAPI->processAPI();
		break;
	case 'Noticia':
		$noticiaAPI = new NoticiaAPI($_REQUEST['parametros']);
		echo $noticiaAPI->processAPI();
		break;
	
	default:
		echo processAPI();
		break;
}

?>
