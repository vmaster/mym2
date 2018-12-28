<?php
class ProyectosController extends AppController{
	public $name = 'Proyecto';	

	public function beforeFilter(){
		$this->Auth->allow(array('view','contact_enviar_email'));
		parent::beforeFilter();
	}
	
	public function index($page=null,$order_by=null,$order_by_or=null,$search_proyecto=null) {
		/*if($this->obj_logged_user->getAttr('tipo_user_id') == 2) {
        	$this->redirect(array('controller' => 'errors', 'action' => 'error_404'));
			exit();
        }*/

		$this->layout = "default_adm";
		$this->loadModel('Proyecto');
		
		$page = 0;
		//$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		
		if($order_by_or!=NULL && isset($order_by_or) && $order_by_or!='null'){
			$order_by_or = $order_by_or;
		}else{
			$order_by_or = 'DESC';
		}
	
		$order_by = 'Proyecto.created';
		
		if($this->request->is('get')){
			if($search_proyecto!=''){
				$search_proyecto = $search_proyecto;
			}else{
				$search_proyecto = '';
			}
			
		}else{
			$search_proyecto = '';
		}
		
		$list_proyecto_all = $this->Proyecto->listAllProyectos($order_by, utf8_encode($search_proyecto),$order_by_or);
		$list_proyectos = $this->Proyecto->listFindProyectos($order_by, $search_proyecto,$order_by_or, $start, $per_page);
		$count = count($list_proyecto_all);
		$no_of_paginations = ceil($count / $per_page);
		$page = $page + 1;
		
		$this->set(compact('list_proyectos','page','no_of_paginations'));
	}
	
	public function find_proyectos($page=null,$order_by=null,$order_by_or=null,$search_proyecto=null) {
		$this->layout = 'ajax';
		$this->loadModel('Proyecto');
		$page = $page;
		$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		/*if(isset($order_by)){
			$order_by = $order_by;
		}else{
			$order_by = 'Persona.created';
		}*/
		$order_by = 'Proyecto.created';
	
		if($order_by_or!=NULL && isset($order_by_or) && $order_by_or!='null'){
			$order_by_or = $order_by_or;
		}else{
			$order_by_or = 'DESC';
		}
	
		/*if($order_by=='title'){
			$order_by = 'Bit.title';
		}elseif($order_by=='username'){
			$order_by = 'UserJoin.username';
		}elseif($order_by=='home'){
			$order_by = 'Bit.view_home';
		}elseif($order_by=='status'){
			$order_by = 'Bit.status';
		}else{
			$order_by = 'Bit.created';
		}*/
	
		if($this->request->is('get')){
		
			if($search_proyecto == 'null'){
				$search_proyecto = '';
			}else{
				$search_proyecto = $search_proyecto;
			}

		}else{
			$search_proyecto = '';
		}

		$list_proyecto_all = $this->Proyecto->listAllProyectos($order_by, utf8_encode($search_proyecto),$order_by_or);
		$list_proyectos = $this->Proyecto->listFindProyectos($order_by, utf8_encode($search_proyecto),$order_by_or, $start, $per_page);
		$count = count($list_proyecto_all);
		$no_of_paginations = ceil($count / $per_page);
		$page = $page+1;
		$this->set(compact('list_proyectos','page','no_of_paginations'));
	}
	
	
	/**
	 * Add and Edit using Ajax
	 * 16 March 2015
	 * @author Vladimir
	 */
	public function add_edit_proyecto($proyecto_id=null){
		$this->layout = 'ajax';
		$this->loadModel('TipoVivienda');
		$this->loadModel('Banco');

		//debug($this->request);exit();
		if($this->request->is('post')  || $this->request->is('put')){
			if(isset($proyecto_id) && intval($proyecto_id) > 0){
				
				//update
				
				$this->Proyecto->id = $proyecto_id;

				/* EDITAR BANNER DEL PROYECTO */

				if($this->request->data['Proyecto']['proy_banner']['name'] != ''){
					
					$banner = $this->request->data['Proyecto']['proy_banner']['name'];
					$arr = explode(".", $banner);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Proyecto']['proy_banner'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/proy-banner/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['proy_banner'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['proy_banner']);
				}

				/* EDITAR THUMBNAIL DEL PROYECTO*/

				if($this->request->data['Proyecto']['thumbnail']['name'] != ''){
					
					$thumbnail = $this->request->data['Proyecto']['thumbnail']['name'];
					$arr = explode(".", $thumbnail);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Proyecto']['thumbnail'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/proy-thumb/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['thumbnail'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['thumbnail']);
				}

				/* EDITAR IMAGEN SECCIÓN 1*/
				if($this->request->data['Proyecto']['sect1_img']['name'] != ''){
					
					$thumbnail = $this->request->data['Proyecto']['sect1_img']['name'];
					$arr = explode(".", $thumbnail);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Proyecto']['sect1_img'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/proy-sect1-img/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['sect1_img'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['sect1_img']);
				}
				/* FIN EDITAR IMAGEN SECCIÓN 1*/


				/* EDITAR IMG CROQUIS*/

				/* EDITAR IMAGEN CROQUIS 1 Y 2*/
				
				if($this->request->data['Proyecto']['img_croquis1']['name'] != ''){
					
					$thumbnail = $this->request->data['Proyecto']['img_croquis1']['name'];
					$arr = explode(".", $thumbnail);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Proyecto']['img_croquis1'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/croquis/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['img_croquis1'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['img_croquis1']);
				}


				if($this->request->data['Proyecto']['img_croquis2']['name'] != ''){
					
					$thumbnail = $this->request->data['Proyecto']['img_croquis2']['name'];
					$arr = explode(".", $thumbnail);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Proyecto']['img_croquis2'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/croquis/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['img_croquis2'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['img_croquis2']);
				}

				/**-----***/
	
				if ($this->Proyecto->save($this->request->data)) {
					echo json_encode(array('success'=>true,'msg'=>__('Guardado con &eacute;xito.'),'Proyecto_id'=>$proyecto_id));
					exit();
				}else{
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Proyecto->validationErrors));
					exit();
				}
			}else{
				//INSERT


				// NUEVO BANNER DEL PROYECTO

				if($this->request->data['Proyecto']['proy_banner']['name'] != ''){
					$this->request->data['Proyecto']['proy_banner'] = $this->request->data['Proyecto']['proy_banner']['name'];
					
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/proy-banner/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Proyecto']['proy_banner']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['proy_banner'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['proy_banner']);
				}

				// NUEVO THUMBNAIL DEL PROYECTO

				if($this->request->data['Proyecto']['thumbnail']['name'] != ''){
					$this->request->data['Proyecto']['thumbnail'] = $this->request->data['Proyecto']['thumbnail']['name'];
					
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/proy-thumb/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Proyecto']['thumbnail']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['thumbnail'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['thumbnail']);
				}

				/* NUEVA IMAGEN SECCIÓN 1 */

				if($this->request->data['Proyecto']['sect1_img']['name'] != ''){
					$this->request->data['Proyecto']['sect1_img'] = $this->request->data['Proyecto']['sect1_img']['name'];
					
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/proy-sect1-img/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Proyecto']['sect1_img']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['sect1_img'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['sect1_img']);
				}
				
				/* FIN NUEVA IMAGEN SECCIÓN 1 */


				/* NUEVA IMAGEN CROQUIS 1 Y 2 */

				if($this->request->data['Proyecto']['img_croquis1']['name'] != ''){
					$this->request->data['Proyecto']['img_croquis1'] = $this->request->data['Proyecto']['img_croquis1']['name'];
					
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/croquis/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Proyecto']['img_croquis1']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['img_croquis1'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['img_croquis1']);
				}

				if($this->request->data['Proyecto']['img_croquis2']['name'] != ''){
					$this->request->data['Proyecto']['img_croquis2'] = $this->request->data['Proyecto']['img_croquis2']['name'];
					
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/croquis/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Proyecto']['img_croquis2']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['img_croquis2'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['img_croquis2']);
				}
				
				/* FIN NUEVA IMAGEN */
				

				$this->request->data['Proyecto']['estado'] = 1;

				$this->Proyecto->create();
				if ($this->Proyecto->save($this->request->data)) {
					$proyecto_id = $this->Proyecto->id;
					echo json_encode(array('success'=>true,'msg'=>__('La Acci&oacute; fue agregada con &eacute;xito.'),'Proyecto_id'=>$proyecto_id));
					exit();
				}else{
					$proyecto_id = '';
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Proyecto->validationErrors));
					exit();
				}
			}
		}else{
			if(isset($proyecto_id)){
				$obj_proyecto = $this->Proyecto->findById($proyecto_id);
				
				$this->request->data = $obj_proyecto->data;
				$this->set(compact('proyecto_id','obj_proyecto'));
			}
		}
		$list_all_tipo_viviendas = $this->TipoVivienda->listAllTipoViviendas();
		$list_all_tipo_bancos = $this->Banco->listAllBancos();
		$this->set(compact('proyecto_id','obj_proyecto','list_all_tipo_viviendas', 'list_all_tipo_bancos'));
	}

	public function view ($proyecto_id=null){
		
		$this->loadModel('Proyecto');
		$this->layout = "wescon";

		if(isset($proyecto_id)){
			$obj_proyecto = $this->Proyecto->findById($proyecto_id);
		}

		
		
		$this->set(compact('obj_proyecto'));
	}
	
	public function delete_proyecto(){
		$this->layout = 'ajax';
	
		$this->loadModel('Proyecto');
	
		if($this->request->is('post')){
			$proyecto_id = $this->request->data['proyecto_id'];
			
			$obj_proyecto = $this->Proyecto->findById($proyecto_id);
			if($obj_proyecto->saveField('estado', 0)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				exit();
			}
			/*if($this->Proyecto->deleteProyecto($proyecto_id)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				//exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				//exit();
			}
			exit();*/
		}	
	}

	public function contact_enviar_email(){
		$this->layout = 'ajax';
		$arr_validation = array();
		$success = true;

		if($this->request['data']['Contacto']['nombre'] == ''){
			$success = false;
			$arr_validation[] = 'nombre';			
		}
		
		if($this->request['data']['Contacto']['dni'] == ''){
			$success = false;
			$arr_validation[] = 'dni';
		}

		if($this->request['data']['Contacto']['telefono'] == ''){
			$success = false;
			$arr_validation[] = 'telefono';
		}

		if($this->request['data']['Contacto']['correo'] == ''){
			$success = false;
			$arr_validation[] = 'correo';
			$msg = __('Es obligatorio el correo');	
		}
		//debug($success);
		if($success){
			App::uses('CakeEmail', 'Network/Email');

			$Email = new CakeEmail();
		    $Email->config('gmail')
		          ->emailFormat('html')
		          ->from("alan_hugo@outlook.com")        
		          ->to('alan_hugo@outlook.com')
		          ->subject("Enviado desde la Web AcunaInmobiliaria.com"); // all data is correct i checked several times

		    $cuerpo = "<b>Nombre: </b>".$this->request['data']['Contacto']['nombre']."<br>";
		    $cuerpo .= "<b>DNI: </b>".$this->request['data']['Contacto']['dni']."<br>";
		    $cuerpo .= "<b>Telefono: </b>".$this->request['data']['Contacto']['telefono']."<br>";
		    $cuerpo .= "<b>Email: </b>".$this->request['data']['Contacto']['correo']."<br>";
		    //debug($cuerpo);
		    $Email->send($cuerpo);


		    $arr_return['success'] = $success;
		    echo json_encode($arr_return);
			exit();
		}else{

			$arr_return['success'] = $success;
			$arr_return['validation'] = $arr_validation;
			
			echo json_encode($arr_return);
			exit();
		}
		
	}

}