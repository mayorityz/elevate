<?php
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 
        $this->view->js = array("submit_modal.js");
        $this->view->render("frontend", "landingpage", array('title'=>"Welcome To Reens Elevate"));
    }
}
