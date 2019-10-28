<?php
class Notfound extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 
        $this->view->render("frontend", "pages/404", array('title'=>"Page Not Found"));
    }
}
