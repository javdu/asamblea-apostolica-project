<?php
    class Inicio extends BaseController {

    	protected $layout = 'layouts.frontend';
        
        public function index() {

        	$aParam = array();
        	$this->layout->content = View::make('frontend/home' , $aParam);
    	}
    }
?>