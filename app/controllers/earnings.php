<?php
class Earnings extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->js = array("estimates.js");
        $this->view->render("frontend", "earnings", array('title' => "Calculate Your earnings"));
    }
}
