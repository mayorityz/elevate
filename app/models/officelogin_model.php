<?php
class Officelogin_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($tbl, $data)
    {
        // $pass = Hash::create('sha256', $data['password'], "hashpass");
        $params = "email = '$data[email]' && passcode = '$data[passcode]'";
        $returned  = $this->db->select($tbl, $params);
        $count = count($returned);
        if ($count == 1) {
            Session::init();
            Session::destroys();
            Session::init();
            Session::set('office', $data['email']);
            // Session::set("account", "staff");
        }
        return $count;
    }
}
