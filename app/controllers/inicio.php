<?php
    class Inicio extends BaseController {
        
        public function index() {
            return View::make('public/masterpage', array('name' => 'Taylor'));
        }
    }
?>