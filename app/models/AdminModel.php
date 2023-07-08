<?php
class AdminModel
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function get($id)
    {
        return ['data' => $id];
    }
}
