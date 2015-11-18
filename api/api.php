<?php
require_once 'noticias_api.php';

$noticiasAPI = new NoticiaAPI($_REQUEST['parametros']);
echo $noticiasAPI->processAPI();
?>
