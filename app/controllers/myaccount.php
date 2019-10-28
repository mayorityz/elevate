<?php
class Myaccount extends Controller
{
    // dashboard
    // profile
    // content
    // financials
    // leaderboard
    // 
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->dashboard();
    }

    private function dashboard(){
        $this->view->render("employee", "dashboard", array("title"=>"my dasboard"));
    }

    public function companyPosts(){
        $this->view->render("employee", "posts", array("title"=>"Company Posts"));
    }

    public function insight(){
        $this->view->render("employee", "insight", array("title"=> "My Insights"));
    }

    public function leaderBoard(){
        $this->view->render("employee", "leaderboard", array("title"=> "Leaderboard"));
    }

    public function myProfile(){
        $this->view->render("employee", "my_profile", array("title"=>"Edit Profile"));
    }

    public function transactionHistory(){
        
    }

    // logout controller

    public function logout(){

    }
}
