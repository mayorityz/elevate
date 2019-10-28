<?php
class Payments_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveBankTrans($tbl, $data, $newBalance)
    {
        $params = "email = '$data[vendor]'";
        $newFee = array("wallet"=>$newBalance);
        $this->db->update("vendor", $newFee, $params);
        return $this->db->insert($tbl, $data);
    }

    public function getUserDetails($tbl)
    {
        return $this->userDetails($tbl);
    }

    private function userDetails($tbl)
    {
        Session::init();
        $user   = Session::get('logInAdmin');
        $params = "email = '$user'";
        return $this->db->select($tbl, $params);
    }
}
