<?php
class Linkedin extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $this->checkIsLoggedIn();
    }

    public function index()
    {
        header("Location:".ROOT."/auth/loginwithlinkedin");
    }

    public function loginWithLinkedIn(){
        header("Location:".ROOT."/auth/loginwithlinkedin");
    }

    public function redirect()
    {
        $token    = $_GET['code'];
        $linkedIn = new Linkedin;
        $token    = $linkedIn->getAccessToken($token); //store token
        $data = array("l_token"=>$token);
            $status = $this->model->storeToken(Session::get('account'), $data);
                if ($status == "successful") {
                    if (Session::get('account') == "vendors") {
                        header("Location:".ROOT."/vendor/companyprofile");
                    } elseif(Session::get('account') == "staff"){
                        // header("Location:".ROOT."/vendor/companyprofile");
                    }
                }
    }

    

    private function checkIsLoggedIn(){
        if (Session::get("logInAdmin") == "") {
            header("Location:".ROOT."/auth/login");
        }
    }
}
