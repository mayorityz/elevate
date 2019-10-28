<?php
class Post extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $this->checkIsLoggedIn();
    }

    public function index()
    { }

    public function newContent()
    {
        $data = array(
            'title'      => trim($_POST['title']),
            'slug'       => $this->cleanString($_POST['title']),
            'content'    => trim($_POST['content']),
            'category'   => trim($_POST['category']),
            'company_id' => Session::get('logInAdmin')
        );

        // send to linkedin
        // if ($this->userDetails()[0]['l_token'] != '') {
        //     if ($_POST['link'] != "") {
        //         $data['linkedin_post_id'] = $this->shareAlink();
        //     } else{
        //         $data['linkedin_post_id'] = $this->sendToLinkedIn($this->userDetails()[0]['l_token'], $data['content']);
        //     }
        // }
        // send to twitter
        if ($this->userDetails()[0]['t_token'] != '') {
            // $tweetObj = $this->shareToTwitter($data['content'], $this->userDetails()[0]['t_token'], $this->userDetails()[0]['t_s_token']);
            // $data['twitter_post_id'] = $tweetObj->id;
// print_r($_FILES);
            $tweetObj = $this->newShareToTwitter(
                $this->userDetails()[0]['t_token'], 
                $this->userDetails()[0]['t_s_token'], 
                $_FILES['post_file']['tmp_name'], 
                $data['content']
            );
            echo $data['twitter_post_id'] = $tweetObj->id;
        } 
        
        // $status = $this->model->saveNewContent('posts_content', $data);
        // if ($status == "successful") {
        //     header("Location:" . ROOT . "/vendor/myposts");
        // } else {
        //     header("Location:" . ROOT . "/vendor/newpost?status=error");
        // }
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

    // linkedin
    private function sendToLinkedIn($token, $post)
    {
        $linkedIn = new Linkedin;
        $personId = $linkedIn->getPersonID($token);
        return $linkedIn->linkedInTextPost($token, $personId, $post);
    }

    private function shareAlink(){
        $linkedIn  = new Linkedin;
        $personId  = $linkedIn->getPersonID($this->userDetails()[0]['l_token']);
            $msg   = $_POST['content'];
            $link  = $_POST['link'];
            $title = $_POST['title'];
        $send = $linkedIn->linkedInLinkPost($this->userDetails()[0]['l_token'], $personId, $msg, $title, "", $link);

        return $send;
    }

    public function shareImg(){
        $linkedIn  = new Linkedin;
        $msg   = $_POST['content'];
        $link  = $_POST['link'];
        $title = $_POST['title'];
            $file_ = $_FILES['post_file']['tmp_name'];
            
        $personId  = $linkedIn->getPersonID($this->userDetails()[0]['l_token']);
        $photoPost = $linkedIn->linkedInPhotoPost($this->userDetails()[0]['l_token'], $personId, $msg, $file_, $title, $msg);

        print_r($photoPost);
    }

    // twitter
    private function shareToTwitter($content, $token, $secret){
        $twitter = new Twitter;
        $tweet = $twitter->shareupdate($content, $token, $secret);
            return $tweet;
    }

    private function newShareToTwitter($token, $secret, $file, $content){
        $twitter = new Twitter;
        $tweet = $twitter->uploadImgs($token, $secret, $file, $content);
            return $tweet;
    }
}
