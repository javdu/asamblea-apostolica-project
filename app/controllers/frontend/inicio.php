<?php
    class Inicio extends BaseController {
        
        protected $layout = 'layouts.frontend';

        public function index() {

        	$aParam = array('name' => 'javdu');

            $this->layout->content = View::make('frontend/home' , $aParam);
        }
    }
?>