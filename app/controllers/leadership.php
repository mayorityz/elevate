<?php
class Leadership extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 
        $this->view->render("frontend", "pages/leadership", array('title'=>"Meet the REEN ELEVATE team"));
    }
}
