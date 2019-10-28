<?php
class Contactus extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 
        $this->view->render("frontend", "pages/contactus", array('title'=>"How to reach us at REEN ELEVATE"));
    }
}
