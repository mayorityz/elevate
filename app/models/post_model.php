<?php

class Post_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveNewContent($tbl, $data)
    {
        return $this->db->insert($tbl, $data);
    }

    private function userDetails($tbl) {
        Session::init();
        $user   = Session::get('logInAdmin');
        $params = "email = '$user'";
        return $this->db->select($tbl, $params);
    }

    public function getUserDetails($tbl){
        return $this->userDetails($tbl);
    }
}
