<?php
class Vendor_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private function userDetails($tbl)
    {
        Session::init();
        $user   = Session::get('logInAdmin');
        $params = "email = '$user'";
        return $this->db->select($tbl, $params);
    }

    public function getUserDetails($tbl)
    {
        return $this->userDetails($tbl);
    }

    public function fetchPost($tbl, $vendor)
    {
        $params = "company_id = '$vendor'" ." "."ORDER BY id DESC";
        return $this->db->select($tbl, $params);
    }

    public function newStaff($tbl, $data, $password){
        Session::init();
        $user     = Session::get('logInAdmin');
            $data = array_merge($data, array('vendor'=>$user, 'password'=>$password));
                return $this->db->insert($tbl, $data);
    }

    public function updateProfile($tbl, $data, $vendor){
        $params = "email = '$vendor'";
            return $this->db->update($tbl, $data, $params);
    }

    public function updateImg($tbl, $data, $vendor, $tmpName){
        $params = "email = '$vendor'";
            $location = "public/backend/images/profileimgs/".$data['profile_image'];
            move_uploaded_file($tmpName, $location);
            return $this->db->update($tbl, $data, $params);
    }

    public function updatePwd($tbl, $newPwd, $vendor){
        $params = "email = '$vendor'";
        $data = array('password' => $newPwd);
            return $this->db->update($tbl, $data, $params);
    }

    public function financialHistory($tbl, $vendor){
        $params = "vendor = '$vendor'". ' '. " GROUP BY id DESC";
            return $this->db->select($tbl, $params);
    }
}
