<?php
class AdminModel extends Database
{


    public function login($UserName, $Password)
    {


        $sql1 = "SELECT * FROM tbl_admin WHERE UserName ='$UserName' ";
        $result =  $this->select($sql1);
        if ($result) {
            //check pass
            $sql2 = "SELECT * FROM tbl_admin WHERE UserName = '$UserName' AND Password = '$Password'";
            $result =  $this->select($sql2);
            if ($result) {
                
                return $result->fetch_assoc();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
