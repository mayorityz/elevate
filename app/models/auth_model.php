<?php
class Auth_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function newvendor($tbl, $data)
    {
        $count = $this->auth($data['email']);
        if ($count == 1) {
            return "exists";
        } else {
            return $this->db->insert($tbl, $data); //inserts the cleaned data 
        }
    }

    private function auth($email)
    {
        $params = "email = '$email'";
        $chk = count($this->db->select('vendor', $params));
        return $chk;
    }

    public function login($tbl, $data)
    {
        $count = $this->auth2($tbl, $data['email'], $data['password']);
            if ($count == 1) {
                // Session::init();
                // Session::set('reen-vendor', $data['email']);
                return "match";
            } else{
                return "invalid";
            }
    }

    private function auth2($tbl, $email, $password)
    {
        $params = "email = '$email' && password = '$password' && status = 1";
        $count = count($this->db->select($tbl, $params));
        return $count;
    }

    public function verify($tbl, $code){
        $params = "vcode = '$code' && status=0";
            $verify = count($this->db->select($tbl, $params));
                if ($verify == 1) {
                    // update status and codex
                    $this->db->update($tbl, array('status'=> 1), $params);
                    Session::init();
                    Session::destroy('auth/login');
                }
    }

    public function storeToken($tbl, $data){
        Session::init();
        $vendor = Session::get("logInAdmin");
        $params = "email = '$vendor'";
            return $this->db->update($tbl, $data, $params);
    }
}
