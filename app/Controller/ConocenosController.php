<?php
class ConocenosController extends AppController{
	public $name = 'Conoceno';	
	
	public function index($page=null,$order_by=null,$order_by_or=null,$search_conoceno=null) {
		/*if($this->obj_logged_user->getAttr('tipo_user_id') == 2) {
        	$this->redirect(array('controller' => 'errors', 'action' => 'error_404'));
			exit();
        }*/

		$this->layout = "default_adm";
		$this->loadModel('Conoceno');
		
		$page = 0;
		//$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		
		if($order_by_or!=NULL && isset($order_by_or) && $order_by_or!='null'){
			$order_by_or = $order_by_or;
		}else{
			$order_by_or = 'DESC';
		}
	
		$order_by = 'Conoceno.created';
		
		if($this->request->is('get')){
			if($search_conoceno!=''){
				$search_conoceno = $search_conoceno;
			}else{
				$search_conoceno = '';
			}
			
		}else{
			$search_conoceno = '';
		}
		
		//$list_conoceno_all = $this->Conoceno->listAllConocenos($order_by, utf8_encode($search_conoceno),$order_by_or);
		$list_conocenos = $this->Conoceno->listFindConocenos($order_by, $search_conoceno, $order_by_or);
		//$count = count($list_conoceno_all);
		//$no_of_paginations = ceil($count / $per_page);
		//$page = $page + 1;
		
		$this->set(compact('list_conocenos'));
	}
	
	public function find_conocenos($page=null,$order_by=null,$order_by_or=null,$search_conoceno=null) {
		$this->layout = 'ajax';
		$this->loadModel('Conoceno');
		$page = $page;
		$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		/*if(isset($order_by)){
			$order_by = $order_by;
		}else{
			$order_by = 'Persona.created';
		}*/
		$order_by = 'Conoceno.created';
	
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
		
			if($search_conoceno == 'null'){
				$search_conoceno = '';
			}else{
				$search_conoceno = $search_conoceno;
			}

		}else{
			$search_conoceno = '';
		}

		$list_conoceno_all = $this->Conoceno->listAllConocenos($order_by, utf8_encode($search_conoceno),$order_by_or);
		$list_conocenos = $this->Conoceno->listFindConocenos($order_by, utf8_encode($search_conoceno),$order_by_or, $start, $per_page);
		$count = count($list_conoceno_all);
		$no_of_paginations = ceil($count / $per_page);
		$page = $page+1;
		$this->set(compact('list_conocenos','page','no_of_paginations'));
	}
	
	
	/**
	 * Add and Edit using Ajax
	 * 16 March 2015
	 * @author Vladimir
	 */
	public function add_edit_conoceno($conoceno_id=null){
		$this->layout = 'ajax';
		
		if($this->request->is('post')  || $this->request->is('put')){
			if(isset($conoceno_id) && intval($conoceno_id) > 0){
				
				//update
				
				$this->Conoceno->id = $conoceno_id;

				if($this->request->data['Conoceno']['banner']['name'] != ''){
					
					$banner = $this->request->data['Conoceno']['banner']['name'];
					$arr = explode(".", $banner);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Conoceno']['banner'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Conoceno']['banner']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/conocenos_banner1/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Conoceno']['banner'], $uploadfile);
				
				}else{
					unset($this->request->data['Conoceno']['banner']);
				}


				if($this->request->data['Conoceno']['banner2']['name'] != ''){
					
					$banner2 = $this->request->data['Conoceno']['banner2']['name'];
					$arr = explode(".", $banner2);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Conoceno']['banner2'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Conoceno']['banner2']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/conocenos_banner2/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Conoceno']['banner2'], $uploadfile);
				
				}else{
					unset($this->request->data['Conoceno']['banner2']);
				}

	
				if ($this->Conoceno->save($this->request->data)) {
					echo json_encode(array('success'=>true,'msg'=>__('Guardado con &eacute;xito.'),'Conoceno_id'=>$conoceno_id));
					exit();
				}else{
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Conoceno->validationErrors));
					exit();
				}
			}else{

				//insert
				if($this->request->data['Conoceno']['banner']['name'] != ''){
					$this->request->data['Conoceno']['banner'] = $this->request->data['Conoceno']['banner']['name'];
					
					$uploaddir = APP.WEBROOT_DIR.'/files/conocenos_banner1/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Conoceno']['banner']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Conoceno']['banner'], $uploadfile);
				
				}else{
					unset($this->request->data['Conoceno']['banner']);
				}

				if($this->request->data['Conoceno']['banner2']['name'] != ''){
					$this->request->data['Conoceno']['banner2'] = $this->request->data['Conoceno']['banner2']['name'];
					
					$uploaddir = APP.WEBROOT_DIR.'/files/conocenos_banner2/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Conoceno']['banner2']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Conoceno']['banner2'], $uploadfile);
				
				}else{
					unset($this->request->data['Conoceno']['banner2']);
				}

				$this->request->data['Conoceno']['estado'] = 1;

				$this->Conoceno->create();
				if ($this->Conoceno->save($this->request->data)) {
					$conoceno_id = $this->Conoceno->id;
					echo json_encode(array('success'=>true,'msg'=>__('La Acci&oacute; fue agregada con &eacute;xito.'),'Conoceno_id'=>$conoceno_id));
					exit();
				}else{
					$conoceno_id = '';
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Conoceno->validationErrors));
					exit();
				}
			}
		}else{
			if(isset($conoceno_id)){
				$obj_conoceno = $this->Conoceno->findById($conoceno_id);
				
				$this->request->data = $obj_conoceno->data;
				$this->set(compact('conoceno_id','obj_conoceno'));
			}
		}
	}
	
	public function delete_conoceno(){
		$this->layout = 'ajax';
	
		$this->loadModel('Conoceno');
	
		if($this->request->is('post')){
			$conoceno_id = $this->request->data['conoceno_id'];
			$obj_conoceno = $this->Conoceno->findById($conoceno_id);
			if($obj_conoceno->saveField('estado', 0)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				exit();
			}
			/*if($this->Conoceno->deleteConoceno($conoceno_id)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				//exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				//exit();
			}
			exit();*/
		}
	
	}	
}