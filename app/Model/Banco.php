<?php
App::uses('AppModel','Model');
  class Banco extends AppModel {
    public $name = 'Banco';
    
    public function listAllBancos() {
    	return $this->find('all');
    }
  }
?>