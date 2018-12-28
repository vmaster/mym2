<?php
App::uses('AppModel','Model');
  class Banner extends AppModel {
    public $name = 'Banner';

    
    public $validate = array(
            'titulo'    => array(
                    'notempty' => array(
                            'rule' => array('notEmpty'),
                            'message' => 'El Banner es requerida'
                    ),
                    'unique' => array(
                            'rule' => array('isUnique'),
                            'message' => 'El Banner ya existe'
                    )
            )
    );
    
    
  public function listAllBanners($order_by='Banner.created', $search_banner='',$order='DESC') {
            $arr_obj_banner = $this->findObjects('all',array(
                    'conditions'=>array(
                                    'Banner.titulo LIKE'=> '%'.$search_banner.'%',
                                    'Banner.estado != ' => 0
                    ),
                    'order'=> array($order_by.' '.$order)
            )
            );
        return $arr_obj_banner;
    }
    
    public function listFindBanners($order_by='Trabajadore.created', $search_banner='',$order='DESC') {
            $arr_obj_banner = $this->findObjects('all',array(
                    'conditions'=>array(
                            'Banner.titulo LIKE'=> '%'.$search_banner.'%',
                            'Banner.estado != ' => 0
                    ),
                    /*'page'=> $start,
                    'limit'=> $per_page,
                    'offset'=> $start,*/
                    'order'=> array($order_by.' '.$order),
            )
            );
        return $arr_obj_banner;
    }
    
    /* Usado para ...*/    
    public function listBanners() {
        return $this->find('list',
                array(
                        'fields' => array('id','banner'),
                        'conditions'=>array(
                                'Banner.estado != '=> 0
                        ),
                        'order' => array('Banner.created ASC')
                ));
    }
    
    /**
     * Delete actividades
     * @param int $actividad_id
     * @return boolean
     * @author Vladimir
     * @version 16 Marzo 2015
     */
    public function deleteBanner($banner_id){
    
        if($this->deleteAll(array('Banner.id' => $banner_id), $cascada = true)){
            return true;
        }else{
            return false;
        }
    }
    
  }
?>
