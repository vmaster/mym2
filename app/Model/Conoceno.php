<?php
App::uses('AppModel','Model');
  class Conoceno extends AppModel {
    public $name = 'Conoceno';

    
    public $validate = array(
            'mision'    => array(
                    'notempty' => array(
                            'rule' => array('notEmpty'),
                            'message' => 'El Conoceno es requerida'
                    )
            )
    );
    
    
  public function listAllConocenos($order_by='Conoceno.created', $search_conoceno='',$order='DESC') {
            $arr_obj_conoceno = $this->findObjects('all',array(
                    'conditions'=>array(
                                    'Conoceno.banner_titulo LIKE'=> '%'.$search_conoceno.'%',
                                    //'Conoceno.mision LIKE'=> '%'.$search_conoceno.'%',
                                    //'Conoceno.vision LIKE'=> '%'.$search_conoceno.'%',
                                    //'Conoceno.estado != ' => 0
                    ),
                    'order'=> array($order_by.' '.$order)
            )
            );
        return $arr_obj_conoceno;
    }
    
    public function listFindConocenos($order_by='Conoceno.created', $search_conoceno='',$order='DESC') {
            $arr_obj_conoceno = $this->findObjects('all',array(
                    'conditions'=>array(
                            'Conoceno.banner_titulo LIKE'=> '%'.$search_conoceno.'%',
                            //'Conoceno.mision LIKE'=> '%'.$search_conoceno.'%',
                            //'Conoceno.vision LIKE'=> '%'.$search_conoceno.'%',
                            'Conoceno.estado != ' => 0
                    ),
                    /*'page'=> $start,
                    'limit'=> $per_page,
                    'offset'=> $start,*/
                    'order'=> array($order_by.' '.$order),
            )
            );
        return $arr_obj_conoceno;
    }
    
    /* Usado para ...*/    
    public function listConocenos() {
        return $this->find('list',
                array(
                        'fields' => array('id','banner'),
                        'conditions'=>array(
                                'Conoceno.estado != '=> 0
                        ),
                        'order' => array('Conoceno.created ASC')
                ));
    }
    
    /**
     * Delete actividades
     * @param int $actividad_id
     * @return boolean
     * @author Vladimir
     * @version 16 Marzo 2015
     */
    public function deleteConoceno($conoceno_id){
    
        if($this->deleteAll(array('Conoceno.id' => $conoceno_id), $cascada = true)){
            return true;
        }else{
            return false;
        }
    }
    
  }
?>