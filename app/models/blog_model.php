<?php
    class Blog_Model extends Model{
        public function __construct()
                {
                    parent::__construct();
                }
        
                public function fetchAllPost($tbl){
                    return $this->db->selectAll($tbl);
                }

                public function readPost($tbl, $title){
                    $params = "slug = '$title'";
                    return $this->db->select($tbl, $params);
                }

                public function response($tbl, $title){
                    $params = "blog_slug = '$title'";
                    return $this->db->select($tbl, $params);
                }

                public function reply($tbl, $data){
                    return $this->db->insert($tbl, $data);
                }
    }