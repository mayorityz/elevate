<?php
    class Requestcall extends Controller{
        public function __construct()
                {
                    parent::__construct();
                }
        
                public function index(){
                    $this->view->render("frontend", "request-a-callback", array('title'=>"Request A Callback From Reens-Elevate"));
                }
    }