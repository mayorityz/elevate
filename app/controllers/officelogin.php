<?php
class Officelogin extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->js = array("admin.js");
        $this->view->login("admin", "auth/login", array("title" => "Admin Login Portal"));
    }

    public function run($redirect = NULL)
    {
        if ($redirect == "redirect") {
            header("Location:".ROOT."/office");
        } else {
            if ($_POST['email'] == '' || $_POST['passcode'] == '') {
                echo "You Must Fill All Fields";
            } else {
                $count =  $this->model->login("admin", $_POST);
                if ($count == 1) {
                    echo "successful";
                } else {
                    echo "Invalid Credentials !!!";
                }
            }
        }
    }

    public function logout(){
        Session::init();
        Session::destroy("officelogin");
    }
}
