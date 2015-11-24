<?php
require_once 'api_base.php';
require_once '../modelo/modelonov.php';

class NoticiaApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->model = new NovModel();
  }

  function noticia(){
    switch ($this->method){
      /*case 'GET':
        return $this->model->getCategoria();
        break;*/
      case 'DELETE':
        if(count($this->args) == 1) $this->model->borrarNoticia($this->args[0]);
        break;/*
      case 'PUT':
        if(count($this->args) == 2) $this->model->cambiarNombreCat($this->args[0],$this->args[1]);
        break;*/
      case 'POST':
        if($_POST['descripcion']!="" &&
           $_POST['titulo']!="" &&
           isset($_FILES['imagesToUpload']) &&
           $_POST['categoria']!=""){
        $this->model->agregarNoticia($_POST['descripcion'],$_FILES['imagesToUpload'],$_POST['categoria'],$_POST['titulo']);
        }
        break;
      default:
        return 'Verbo no soportado';
        break;
    }
  }
}

?>
