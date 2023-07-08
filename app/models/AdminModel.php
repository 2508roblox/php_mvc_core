<?php
class AdminModel extends Database
{
    public function __construct()
    {
        echo "done";
        $this->insert('gawge');
    }
    public function get($id)
    {
        return ['data' => $id];
    }
}
