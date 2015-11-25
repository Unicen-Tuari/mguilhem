<?php
require_once 'api_base.php';
require_once '../modelo/modelocat.php';

class CategoriaApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->model = new CatModel();
  }

  function categoria(){
    switch ($this->method){
      /*case 'GET':
        return $this->model->getCategoria();
        break;*/
      case 'DELETE':
        if(count($this->args) == 1) $this->model->borrarCategoria($this->args[0]);
        break;
      case 'PUT':
        if(count($this->args) == 2) return $this->model->cambiarNombreCat($this->args[0],$this->args[1]);
        break;
      case 'POST':
        if(isset($_POST['categoria'])) return $this->model->agregarCategoria($_POST['categoria']);
        break;
      default:
        return 'Verbo no soportado';
        break;
    }
  }
}

?>
