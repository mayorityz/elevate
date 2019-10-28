<?php
class Aboutus extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->js = array("submit_modal.js");
        $this->view->render("frontend", "pages/aboutus", array('title' => "About Us at REENS ELEVATE... employee advocacy platform"));
    }

    public function sendMail()
    {
        $grid = new Grid;
        $grid->send("support@reens-elevate.com", "webappdev993@gmail.com", "new account created", "new stuff going on here");
    }

    public function whatsApp()
    {
        $send = new Chatapi;
        $send->whatsApp("+2348167836364", "works fine!");
    }

    public function readExcel()
    {
        function getExtension($fileName)
        {
            $explode_ = explode(".", $fileName);
            $count = count($explode_);
            return $explode_[$count - 1];
        }

        if ($_FILES['excel']['name'] != '') {
            $file   = $_FILES['excel'];
            $fileNm = $file['tmp_name'];
            if (getExtension($file['name']) == "xlsx") {
                $randPwd = "newPassword";
                $location = "public/spreadsheet/" . $file['name'];
                move_uploaded_file($fileNm, $location);
                $excel = new Reader;
                $myWorksheetIndex = $excel->readFile($location)->getWorksheetIndex('myworksheet');

                foreach ($excel->readFile($location)->createRowIterator($myWorksheetIndex) as $rowIndex => $values) {
                    // save into db, send email and send whatsapp invite
                    $firstName = $values[0];
                    $lastName  = $values[1];
                    $email     = $values[2];
                    $phone     = $values[3];
                    // process this data ...
                    // filter emails
                    $this->inviteByEmail($email, $lastName, $randPwd);
                    $this->inviteByWhatsApp($phone, $email, $lastName, $randPwd);
                    // count phone is 10 digits, and then prepend +234 to it before send ...
                    // same each data to db!!!

                }
            } else {
                echo "invalid file format";
            }
        } else {
            // invalid format;
            echo "Please upload a file";
        }
    }

    private function inviteByEmail($email, $lastname, $pwd)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $invite_ = new Grid;
            $body    = "Hi $lastname, <br> An account has been opened for you on <a href='reens-elevate.com'>REENs ELEVATE</a>. <br> <a href='reens-elevate.com/stafflogin'>Login Here!</a>. email is $email & password is $pwd";
            $invite_->send("noreply@reens-elevate.com", $email, "Welcome Onboard", $body);
        }
    }

    private function inviteByWhatsApp($phn, $email, $lastname, $pwd)
    {
        $count_  = strlen($phn);
        if ($count_ == 10) {
            $invite_ = new Chatapi;
            $body    = "Hi $lastname, An account has been opened for you on REENs ELEVATE. To login here, visit: reens-elevate.com/stafflogin. Login credentials ; Email is $email & password is $pwd";
            $phn_ = "+234" . $phn;
            $invite_->WhatsApp($phn_, $body);
        }
    }
}
