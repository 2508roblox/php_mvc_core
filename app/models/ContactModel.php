<?php
class ContactModel extends Database
{


    public function add($data)
    {

        $Name = $data['Name'];
        $Phone = $data['Phone'];
        $Email = $data['Email'];
        $Mess = $data['Mess'];
        // $shipping = $data['shipping'];


        $Name  = mysqli_escape_string($this->link, $Name);
        $Phone  = mysqli_escape_string($this->link, $Phone);
        $Email  = mysqli_escape_string($this->link, $Email);
        $Mess  = mysqli_escape_string($this->link, $Mess);
        // $shipping  = mysqli_escape_string($this->link, $shipping);


        $sql  = "INSERT INTO tbl_contact (Name, Phone, Email, Mess )
        VALUES ('$Name', '$Phone', '$Email', '$Mess')";
        $result =   $this->insert($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getAll()
    {


        $sql  = "SELECT * FROM tbl_contact";

        $result =   $this->select($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
