<?php
    class Invite extends Controller{
        public function __construct()
                {
                    parent::__construct();
                }
        
                public function index(){
                    $this->view->render("frontend", "invite_boss", array('title' => "Send An Invite To Your Office"));
                }
    }