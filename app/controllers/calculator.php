<?php
class calculator extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render("frontend", "calculator", array('title' => "Calculate Your Staff Reach ..."));
    }

    public function result(){
        $number = $_GET['num'];
        $this->view->render("frontend", "result", array('title' => "Calculate Your Staff Reach ...", "count"=>$number));
    }
}
