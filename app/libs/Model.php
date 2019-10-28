<?php
class Model
{
    function __construct()
    {
        $this->db = new Database();
    }

    // clean up any string
    public function cleanString($string)
    {
        $string = preg_replace('/[^a-z0-9-]+/', '_', strtolower($string));
        return $string;
    }
}
