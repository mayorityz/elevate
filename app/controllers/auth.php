<?php
class Auth extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->view->js = array("login.js", "submit_modal.js");
        $this->view->render("frontend", "auth/login", array('title' => "Login To Your Account"));
    }

    public function loginAuth($redirect = null)
    {
        if ($redirect === 'redirect') {
            header("Location:" . ROOT . "/vendor");
        } else {
            if (in_array('', $_POST)) {
                echo "<div class='alert alert-warning text-center'>You Must Fill All Fields</div>";
            } else {
                $data = array('email' => trim($_POST['email']), 'password' => Hash::create('sha256', trim($_POST['password']), 'reens_elevate_password_hashed'));

                $status = $this->model->login('vendor', $data);
                if ($status === "invalid") {
                    echo "Invalid Credentials";
                } elseif ($status === 'match') {
                    Session::init();
                    Session::destroys();
                    Session::init();
                    Session::set("logInAdmin", trim($_POST['email']));
                    Session::set("account","vendor");
                    header("Location:" . ROOT . "/vendor");
                    return false;
                }
            }
        }
    }

    public function register()
    {
        $this->view->js = array("register.js");
        $this->view->render("frontend", "auth/register", array('title' => "Create New Account"));
    }

    public function newVendor()
    {
        $pass1 = $_POST['password'];
        $pass2 = $_POST['password2'];

        if ($pass1 !== $pass2) {
            echo "<div class='alert alert-warning text-center'>Password Mismatch ...</div>";
        } else {
            if (in_array('', $_POST)) {
                echo "<div class='alert alert-warning text-center'>You Must Fill All Input Fields ...</div>";
            } else {
                $data = array(
                    'organization' => trim($_POST['organization']),
                    'password'     => Hash::create('sha256', trim($_POST['password']), 'reens_elevate_password_hashed'),
                    'email'        => trim($_POST['email']),
                    'vcode'        => Hash::create('sha256', trim($_POST['password'].date("y-m-d H:s:i")), 'reens_elevate_password_hashed')
                );
                $status = $this->model->newvendor('vendor', $data);
                if ($status == "exists") {
                    echo "<div class='alert alert-warning'>Company Email Already Exists</div>";
                } else {
                    $content  = "<p>Welcome To REENS-ELEVATE,</p>" ;
                    $content .= "<p>We are glad you have decided to trust our platform with your employee advocacy!</p>";
                    $content .= "<p>Click on the button below to verify your account.</p>";
                    $content .= "<a style='text-align: center; background-color: lightgreen; padding: 10px 5px; color: white' href='".ROOT."/auth/verify/".$data['vcode']."'>VERIFY ACCOUNT.</a>";

                    $sendGrid = new Grid;
                    $sendGrid->send("noreply@reens-elevate.com", $data['email'], "New Vendor Account", $content);
                    echo "<div class='alert alert-success'>Your Account Was Created Successfully And Confirmation Link Sent To Your Email ...</div>";
                }
            }
        }
    }

    public function verify($codex){
        $status = $this->model->verify('vendor', $codex);
    }

    public function lostPassword()
    {
        $this->view->render("frontend", "auth/lostpassword", array('title' => "Recover Password"));
    }

    public function redirect(){
        if ($_POST['getstarted'] == "option1") {
            header("Location:".ROOT."/auth/register");
        } elseif($_POST['getstarted'] == "option2"){
            header("Location:".ROOT."/invite");
        } elseif($_POST['getstarted'] == "option3"){
            header("Location:".ROOT);
        } else{
            header("Location:".ROOT."/notfound");
        }
    }

    /////////////////
    /////// linkedin auth area ///
    //////////////////

    public function loginWithLinkedin()
    {
        $linkedIn = new Linkedin;
        $auth = $linkedIn->getAuthUrl();
        header("Location:" . $auth);
    }

    public function linkedinRedirect()
    {
        $token     = $_GET['code'];
        $linkedIn  = new Linkedin;
        $token_    = $linkedIn->getAccessToken($token); //store token
        $data = array("l_token"=>$token_);
            Session::init();
            $status = $this->model->storeToken(Session::get('account'), $data);
                if ($status === "successful") {
                    if (Session::get('account') == "vendor") {
                        header("Location:".ROOT."/vendor/social");
                    } elseif(Session::get('account') == "staff"){
                        echo "something";
                        // header("Location:".ROOT."/vendor/companyprofile");
                    }
                }
    }

    public function showEmail()
    {
        $linkedIn = new Linkedin;
        $email = $linkedIn->getEmail();
        // echo "<pre>";
        // print_r($email);
        // echo $email->elements[0]->{"handle~"}->emailAddress;
        // echo "</pre>";


        $otherDetails = $linkedIn->getPerson();
        $profileImage = $otherDetails->profilePicture->{'displayImage~'}->elements[0]->identifiers[0]->identifier;
        $firstName = $otherDetails->localizedFirstName;
        $lastName = $otherDetails->localizedLastName;
        $id =  $otherDetails->id;

        echo "my name is " . $firstName . " " . $lastName . " and my id is : " . $id;
        echo "<img src='$profileImage'>";
    }

    public function shareToLinkedIn()
    {
        Session::init();
        $linkedIn = new Linkedin;
        echo $linkedIn->linkedInTextPost(Session::get('linkedInToken'), '8AzOAnR_aN', "testing the linkedIn API live.... beta test");
    }

    public function testLink()
    {
        Session::init();
        $link = "https://www.linkedin.com/posts/mayorityz_testing-the-linkedin-api-live-beta-test-activity-6581892092795068416-VlTz";
        $linkedIn = new Linkedin;
        echo $linkedIn->linkedInLinkPost(Session::get('linkedInToken'), '8AzOAnR_aN', "share a link", "mic check", "description area", $link);
    }


    // facebook testing area
    public function registerWithFacebook()
    {
        $facebook = new Facebook;
        $login = $facebook->login();
        header("Location:" . $login);
    }

    public function fbCallback()
    {
        $facebook = new Facebook;
        $facebook->callBack();
    }

    public function check()
    {
        Session::init();
        $token = Session::get("FBTOKEN");

        $facebook = new Facebook;
        $login = $facebook->userProfile($token);

        print_r($login);
    }

    public function postALink()
    {
        Session::init();
        $token = Session::get("FBTOKEN");

        $facebook = new Facebook;
        $facebook->postALink($token);
    }

    public function logOut()
    {
        Session::init();
        Session::destroy('auth');
    }

    private function verification($to, $subject, $content){
        $mail = new Mailer($to, $subject, $content);
            $mail->sendEmail();
    }

    /////////////////
    /////// twitter auth area ///
    //////////////////

    public function twitter(){
        $twitter = new Twitter;
        $twitter->auth();
    }

    public function twitterCallback(){
        $twitter = new Twitter;
        $twitter->callback($_GET['oauth_token'], $_GET['oauth_verifier']);
        Session::init();
        $data = array(
            't_token' => Session::get('new_token'),
            't_s_token' => Session::get('new_token_secret')
        );
        $status = $this->model->storeToken(Session::get('account'), $data);
        if ($status === "successful") {
            if (Session::get('account') == "vendor") {
                header("Location:".ROOT."/vendor/social");
            } elseif(Session::get('account') == "staff"){
                echo "something";
                // header("Location:".ROOT."/vendor/companyprofile");
            }
        }
    }


}
