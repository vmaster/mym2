<?php
//App::uses('AppController', 'Controller');
class UsersController extends AppController{

	//var $components = array('Auth', 'Session');
	public $components = array(
    'BotDetect.Captcha' => array(
      'captchaConfig' => 'ExampleCaptcha'
    )
  	);

	public $name = 'User';

	public function beforeFilter(){
		$this->Auth->allow(array('login','register','logout'));
		parent::beforeFilter();
	}

	public function login() {
		$this->layout = "default_login";

		if($this->request->is('post')) {
			if($this->Auth->login()) {
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__('El Usuario o Contrase&ntilde;a es Incorrecto'),array(),'auth');
			}
		}else{
			if($this->Auth->user('id')){
				$this->redirect($this->Auth->redirect());
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}


	/*public function index() {
		$this->layout = "default";
		$this->loadModel('TipoUsuario');
		$this->loadModel('Persona');
		$array_obj_usuario = $this->User->listarInfoPersonalUsuario();
		$this->set(compact('array_obj_usuario'));
	}*/
	
	

}
?>
