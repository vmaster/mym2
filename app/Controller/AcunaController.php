<?php
class AcunaController extends AppController{
	public $name = 'Acuna';
	
	public function beforeFilter(){
		$this->Auth->allow(array('index','conocenos','venta','entregado','contacto','content'));
		parent::beforeFilter();
	}
	
	public function index() {
        $this->loadModel('Banner');
        $this->loadModel('Proyecto');
        $obj_banners = $this->Banner->listAllBanners();
        $obj_proyectos = $this->Proyecto->listAllProyectos();
        $this->set(compact('obj_banners', 'obj_proyectos'));

		$this->layout = "wescon";
	}
	
	public function conocenos() {

		$this->layout = "wescon";
        
		$this->loadModel('Conoceno');
        $obj_conocenos = $this->Conoceno->findById(1);
        $this->set(compact('obj_conocenos'));

	}
	
	public function venta() {
        $this->loadModel('Proyecto');
        $obj_proyectos = $this->Proyecto->listAllProyectos();
        $this->set(compact('obj_proyectos'));
		$this->layout = "wescon";
	}
	
	public function entregado() {
        
		$this->layout = "wescon";
	}
	
	public function contacto() {
        
		$this->layout = "wescon";
	}
	
	public function content() {
        
		$this->layout = "wescon";
	}
}