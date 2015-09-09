<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
		public function mensajes (){
			$this->view->mostrar_mensajes($this->model->data);
		}
		public function eventos (){
			$this->view->mostrar_eventos($this->model->data);
		}
		public function temas (){
			$this->view->mostrar_temas($this->model->data);
		}
		
		public function Ejecutar()
		{
				//Vista de foro
				$this->query("request");
				vista();//funcion de arriba para llamar a vista
		}
		
		public function Analizar($variable){
			
		}
}
?>