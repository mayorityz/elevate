<?php
    class Howitworks extends Controller{
        public function __construct()
                {
                    parent::__construct();
                }
        
                public function index(){
                    
                    $this->view->render("frontend", "pages/how-it-works", array('title'=>"How It Work"));
                }
    }