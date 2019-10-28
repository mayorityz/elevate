<?php
    class Pricing extends Controller{
        public function __construct()
                {
                    parent::__construct();
                }
        
                public function index(){
                    $this->view->js = array("submit_modal.js");
                    $this->view->render("frontend", "pricing", array('title'=>"Our Pricing"));
                }
    }