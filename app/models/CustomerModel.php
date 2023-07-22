<?php
class CustomerModel extends Database
{
    public function count()
    {
        $sql  = "SELECT COUNT(CustomerID) AS TotalCustomer FROM tbl_customer";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getAll()
    {
        $sql  = "SELECT * FROM tbl_customer";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function del($id)
    {
        $sql = "DELETE FROM tbl_customer WHERE CustomerID = '$id'";
        $result = $this->delete($sql);
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function getUser($username)
    {
        $sql1 = "SELECT * FROM tbl_customer WHERE Username ='$username' ";
        $result =  $this->select($sql1);
        return $result;
    }
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
            $result =  $this->insert($sql);
            if ($result) {
                return $result;
            } else {
                return false;
            }
        }
    }
    public function signin($data)
    {
        $Username = $data['Username'];
        $Password = $data['Password'];


        $Username  = mysqli_escape_string($this->link, $Username);
        $Password = mysqli_escape_string($this->link, $Password);

        $sql1 = "SELECT * FROM tbl_customer WHERE Username ='$Username' AND Password = '$Password' ";
        $result =  $this->select($sql1);
        if ($result) {
            $sql1 = "SELECT * FROM tbl_customer WHERE Username ='$Username'  ";
            $result =  $this->select($sql1);
            return $result->fetch_assoc();

        } else {
            return false;
        }
    }
}
