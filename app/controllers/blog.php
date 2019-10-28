<?php
    class Blog extends Controller{
        public function __construct()
                {
                    parent::__construct();
                }
        
                public function index(){
                    $this->view->ourPosts = $this->model->fetchAllPost("blog");
                    $this->view->render("frontend", "blog/grid", array("title"=>"Our Blog Post"));
                }

                public function read($title){
                    $this->view->res  = $this->model->response("blog_response", $title);
                    $this->view->read = $this->model->readPost("blog", trim($title));
                    $this->view->render("frontend", "blog/post", array("title"=>$this->view->read[0]['blog_title']));
                }

                public function replyPost($title){
                    $title = array("blog_slug"=>$title);
                    $data  = array_merge($title, $_POST);
                        $response = $this->model->reply("blog_response", $data);
                            if ($response == "successful") {
                                header("Location:".ROOT."/blog/read/".$title['blog_slug']."?status=true");
                            }else{
                                echo $response."<br>";
                                echo "An Error Occured While Submitting Your Response... Please try again...";
                            }
                }
    }