<?php
class BannersController extends AppController{
	public $name = 'Banner';	
	
	public function index($page=null,$order_by=null,$order_by_or=null,$search_banner=null) {
		/*if($this->obj_logged_user->getAttr('tipo_user_id') == 2) {
        	$this->redirect(array('controller' => 'errors', 'action' => 'error_404'));
			exit();
        }*/

		$this->layout = "default_adm";
		$this->loadModel('Banner');
		
		$page = 0;
		//$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		
		if($order_by_or!=NULL && isset($order_by_or) && $order_by_or!='null'){
			$order_by_or = $order_by_or;
		}else{
			$order_by_or = 'DESC';
		}
	
		$order_by = 'Banner.created';
		
		if($this->request->is('get')){
			if($search_banner!=''){
				$search_banner = $search_banner;
			}else{
				$search_banner = '';
			}
			
		}else{
			$search_banner = '';
		}
		
		$list_banner_all = $this->Banner->listAllBanners($order_by, utf8_encode($search_banner),$order_by_or);
		$list_banners = $this->Banner->listFindBanners($order_by, $search_banner,$order_by_or, $start, $per_page);
		$count = count($list_banner_all);
		$no_of_paginations = ceil($count / $per_page);
		$page = $page + 1;
		
		$this->set(compact('list_banners','page','no_of_paginations'));
	}
	
	public function find_banners($page=null,$order_by=null,$order_by_or=null,$search_banner=null) {
		$this->layout = 'ajax';
		$this->loadModel('Banner');
		$page = $page;
		$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		/*if(isset($order_by)){
			$order_by = $order_by;
		}else{
			$order_by = 'Persona.created';
		}*/
		$order_by = 'Banner.created';
	
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
		
			if($search_banner == 'null'){
				$search_banner = '';
			}else{
				$search_banner = $search_banner;
			}

		}else{
			$search_banner = '';
		}

		$list_banner_all = $this->Banner->listAllBanners($order_by, utf8_encode($search_banner),$order_by_or);
		$list_banners = $this->Banner->listFindBanners($order_by, utf8_encode($search_banner),$order_by_or, $start, $per_page);
		$count = count($list_banner_all);
		$no_of_paginations = ceil($count / $per_page);
		$page = $page+1;
		$this->set(compact('list_banners','page','no_of_paginations'));
	}
	
	
	/**
	 * Add and Edit using Ajax
	 * 16 March 2015
	 * @author Vladimir
	 */
	public function add_edit_banner($banner_id=null){
		$this->layout = 'ajax';
		
		if($this->request->is('post')  || $this->request->is('put')){
			if(isset($banner_id) && intval($banner_id) > 0){
				
				//update
				
				$this->Banner->id = $banner_id;

				if($this->request->data['Banner']['imagen']['name'] != ''){
					
					$imagen = $this->request->data['Banner']['imagen']['name'];
					$arr = explode(".", $imagen);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Banner']['imagen'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Banner']['imagen']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/banner/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Banner']['imagen'], $uploadfile);
				
				}else{
					unset($this->request->data['Banner']['imagen']);
				}
	
				if ($this->Banner->save($this->request->data)) {
					echo json_encode(array('success'=>true,'msg'=>__('Guardado con &eacute;xito.'),'Banner_id'=>$banner_id));
					exit();
				}else{
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Banner->validationErrors));
					exit();
				}
			}else{
				//insert
				//debug($this->request->data['Banner']);exit();
				if($this->request->data['Banner']['imagen']['name'] != ''){
					$this->request->data['Banner']['imagen'] = $this->request->data['Banner']['imagen']['name'];
					
					//$image_tmp = $this->request->data['Banner']['imagen']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/banner/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Banner']['imagen']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Banner']['imagen'], $uploadfile);
				
				}else{
					unset($this->request->data['Banner']['imagen']);
				}
				

				$this->request->data['Banner']['estado'] = 1;

				$this->Banner->create();
				if ($this->Banner->save($this->request->data)) {
					$banner_id = $this->Banner->id;
					echo json_encode(array('success'=>true,'msg'=>__('La Acci&oacute; fue agregada con &eacute;xito.'),'Banner_id'=>$banner_id));
					exit();
				}else{
					$banner_id = '';
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Banner->validationErrors));
					exit();
				}
			}
		}else{
			if(isset($banner_id)){
				$obj_banner = $this->Banner->findById($banner_id);
				
				$this->request->data = $obj_banner->data;
				$this->set(compact('banner_id','obj_banner'));
			}
		}
	}
	
	public function delete_banner(){
		$this->layout = 'ajax';
	
		$this->loadModel('Banner');
	
		if($this->request->is('post')){
			$banner_id = $this->request->data['banner_id'];
			
			$obj_banner = $this->Banner->findById($banner_id);
			if($obj_banner->saveField('estado', 0)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				exit();
			}
			/*if($this->Banner->deleteBanner($banner_id)){
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