<?php
class Services extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 
        $this->view->render("frontend", "pages/ourservices", array('title'=>"Read through the quality services we provide"));
    }
}
