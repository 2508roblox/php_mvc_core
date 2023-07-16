<?php
class CustomerModel extends Database
{


    public function signup($data)
    {
        $Firstname = $data['Firstname'];
        $Lastname = $data['Lastname'];
        $Username = $data['Username'];
        $Email = $data['Email'];
        $Password = $data['Password'];


        $Firstname = mysqli_escape_string($this->link, $Firstname);
        $Lastname = mysqli_escape_string($this->link, $Lastname);
        $Username  = mysqli_escape_string($this->link, $Username);
        $Email  = mysqli_escape_string($this->link, $Email);
        $Password = mysqli_escape_string($this->link, $Password);

        $sql1 = "SELECT * FROM tbl_customer WHERE Username ='$Username' ";
        $result =  $this->select($sql1);
        if ($result) {
            //check pass
            return false;
        } else {
            $sql = "INSERT INTO tbl_customer (Firstname, Lastname, Username, Email, Password) VALUES ('$Firstname', '$Lastname', '$Username', '$Email', '$Password')";
            $result =  $this->insert($sql1);
            if ($result) {
            }
        }
    }
}
