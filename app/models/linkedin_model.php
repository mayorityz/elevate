<?php
class Linkedin_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
    }

    public function storeToken($tbl, $data){
        $vendor = Session::get("logInAdmin");
        $params = "email = '$vendor'";
            return $this->db->update($tbl, $data, $params);
    }
}
