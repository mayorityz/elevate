<?php
class Office extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $this->auth();
    }

    public function auth(){
        if (Session::get("office") == '') {
            header("Location:".ROOT."/officelogin");
            return false;
        }
    }

    public function index()
    {
        // dsahboard
        $this->view->render("admin", "dashboard", array("title" => "Welcome, Admin To Your Dashboard"));
    }

    public function vendorList(){
        $this->view->render("admin", "vendors", array("title" => "List registered vendors including details"));
    }

    public function vendorDetails($id="something"){
        $this->view->render("admin", "vendor_details", array("title" => "Details Of Vendor Account."));
    }

    public function transactions(){
        $this->view->render("admin", "transaction", array("title" => "Transaction History"));
    }

    // blog code base

    public function blog(){
        $this->view->ourPosts = $this->model->fetchAllPost("blog");
        $this->view->render("admin", "blog/blog", array("title" => "Blog List"));
    }

    public function deletePost($id){
        $this->model->deletePost("blog", $id);
        header("Location:".ROOT."/office/blog");
    }

    public function newPost(){
        $this->view->render("admin", "blog/newpost", array("title" => "Create A New Post"));
    }

    public function saveNewPost(){
        $thumbnail = $_FILES['thumbnail'];
        $name      = ($thumbnail['name'])? $thumbnail['name'] : 'yy.png';
        $data = array(
            "blog_title"        => trim($_POST['blog_title']),
            "slug"              => trim($this->cleanString($_POST['blog_title'])),
            "blog_content"      => trim($_POST['blog_content']),
            "blog_thumbnail"    => $name
        );

        $result = $this->model->newBlogPost("blog", $data);
            if ($result == "successful") {
                if ($name != "yy.png") move_uploaded_file($thumbnail['tmp_name'], "public/blog_imgs/".$name);
                header("Location:".ROOT."/office/blog");
            }
    }

    // public function 
}
