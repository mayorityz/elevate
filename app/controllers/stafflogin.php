<?php
class Stafflogin extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->js = array("stafflogin.js");
        $this->view->login("employee", "auth/login");
    }

    public function run($redirect=null){
        if ($redirect == "redirect") {
            header("Location:".ROOT."/myaccount");
            return false;
        }
        echo $this->model->login("staff", $_POST);
    }
}
