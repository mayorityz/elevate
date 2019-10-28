<?php
class Office_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function newBlogPost($tbl, $data)
    {
        return $this->db->insert($tbl, $data);
    }

    public function fetchAllPost($tbl){
        return $this->db->selectAll($tbl);
    }

    public function deletePost($tbl, $id){
        $params = "id = '$id'";
        return $this->db->delete($tbl, $params);
    }
}
