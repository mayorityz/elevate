<?php
class Careers extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render("frontend", "pages/career", array('title' => "Hiring Home"));
    }
}
