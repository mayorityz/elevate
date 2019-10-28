<?php
class Vendor extends Controller
{
    protected $email;
    protected $organization;

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $this->checkIsLoggedIn();
    }

    /**
     * timeline
     * insight
     * request
     * new staff invite
     * my account
     * leaderboard
     * accounts
     * messaging
     * new post
     * old list of posts
     * profile
     */

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        $this->view->render("employer", "dashboard", array("title" => "Our Dashboard", "details" => $this->userDetails()[0], "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function inviteStaff()
    {
        $this->view->js = array("newstaff.js");
        $this->view->render("employer", "staff/invitenewstaff", array("title" => "invite a staff", "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function newStaff()
    {
        $time = date("Y-m-d H:m:i");
        $password = Hash::create("sha256", $time, "staffpassword");
        $password = substr($password, 10, 9);
        $hashPass = Hash::create("sha256", $password, "hashpass");
        $link = ROOT . "/myaccount";
        $message = "Hello, An Account Has Been Opened For You On REENS-ELEVATE.COM. Your email is $_POST[email] and Password: $password. To access your account visit : $link.<br> Management.";



        // Mail::WhatsApp($_POST['phone'], $message);
        $this->sendMail(trim($_POST['email']), "REENS-ELEVATE ACCOUNT CREATED", $message);
        return $this->model->newStaff('staff', $_POST, $hashPass);
    }

    public function staffList()
    {
        $this->view->render("employer", "staff/staff_list", array("title" => "My Stafflist","details" => $this->userDetails()[0], "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function newPost()
    {
        $this->view->render("employer", "post/newpost", array("title" => "New Post", "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function myPosts()
    {
        $this->view->allPosts = $this->model->fetchPost("posts_content", Session::get("logInAdmin"));
        $this->view->render("employer", "post/myposts", array("title" => "Company Posts.", "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function companyProfile()
    {
        $this->view->companyName = $this->userDetails()[0]['organization'];
        $this->view->chkLi       = $this->userDetails()[0]['l_token'];
        $this->view->chkTw       = $this->userDetails()[0]['t_token'];

        $this->view->render("employer", "profile", array("title" => "Company Profile.", "details" => $this->userDetails()[0], "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }
    public function profileUpdate()
    {
        $status = $this->model->updateProfile("vendor", $_POST, Session::get('logInAdmin'));
        if ($status == "successful") {
            header("Location:" . ROOT . "/vendor/companyprofile?profile=updated");
        }
    }

    public function updateImg()
    {
        $name    = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];
        $type    = $_FILES['image']['type'];
        $types   = array("image/jpeg", "image/png", "image/jpg");
        if (!in_array($type, $types)) {
            echo "Image Format Not Accepted";
        } else {
            $ext = explode("/", $type);
            $extension = $ext[1];
            $hashedName = Hash::create('md5', $name, "profileImage");
            $newName = $hashedName . "." . $extension;
            $data = array("profile_image" => $newName);
            $status = $this->model->updateImg("vendor", $data,  Session::get('logInAdmin'), $tmpName);
            if ($status == "successful") {
                header("Location:" . ROOT . "/vendor/companyprofile?profile=imgupdated");
            }
        }
    }

    public function updatePwd()
    {
        $oldPwd   = $_POST['oldpwd'];
        $newPwd_1 = $_POST['newpwd'];
        $newPwd_2 = $_POST['newpwd2'];

        if ($newPwd_1 != $newPwd_2) {
            // password Mismatch;
            header("Location:" . ROOT . "/vendor/companyprofile?profile=mismatch");
        } else {
            $oldPassword = Hash::create('sha256', trim($oldPwd), 'reens_elevate_password_hashed');
            $newPassword = Hash::create('sha256', trim($newPwd_1), 'reens_elevate_password_hashed');

            if ($oldPassword != $this->userDetails()[0]['password']) {
                header("Location:" . ROOT . "/vendor/companyprofile?profile=invalidpass");
            } else {
                $this->model->updatePwd("vendor", $newPassword, Session::get('logInAdmin'));
                Session::destroy("auth/login");
                // header("Location:".ROOT."/vendor/companyprofile?profile=pwdupdated");
            }
        }
    }

    public function social()
    {
        $this->view->chkLi       = $this->userDetails()[0]['l_token'];
        $this->view->chkTw       = $this->userDetails()[0]['t_token'];
        $this->view->render("employer", "socials", array("title" => "Connect Social Accounts.","details" => $this->userDetails()[0], "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function leaderBoard()
    {
        $this->view->render("employer", "leaderboard", array("title" => "Leaderboard.","details" => $this->userDetails()[0], "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function financials()
    {
        $this->view->history = $this->model->financialHistory("books", Session::get('logInAdmin'));
        $this->view->render("employer", "financial", array("title" => "Make payments","details" => $this->userDetails()[0], "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    public function insights(){
        $this->view->render("employer", "insight", array("title" => "Make payments","details" => $this->userDetails()[0], "name" => $this->userDetails()[0]['organization'], "email" => $this->userDetails()[0]['email']));
    }

    private function checkIsLoggedIn()
    {
        if (Session::get("logInAdmin") == "") {
            header("Location:" . ROOT . "/auth/login");
        }
    }

    private function userDetails()
    {
        return $this->model->getUserDetails('vendor');
    }


    public function logout()
    {
        Session::destroy("auth/login");
    }

    public function test()
    {
        $this->view->render("employer", "test", array('test' => ''));
    }

    private function sendMail($to, $subject, $content)
    {
        $mail = new Mailer($to, $subject, $content);
        $mail->sendEmail();
    }

    /**
     * WhatsApp Testing Api
     */

     public function whatsapp(){
        $twilio = new Whatsapp;
        $twilio->sendWhatsAppMsg();
        // $twilio->test();
        // $twilio->newCurl();
     }

     public function whatsappCallback(){
         echo "callbak here";
     }
}
