<?php
App::uses('AppModel','Model');
  class TipoVivienda extends AppModel {
    public $name = 'TipoVivienda';
    
    public function listAllTipoViviendas() {
    	return $this->find('all');
    }
  }
?>