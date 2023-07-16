<?php


class CartModel extends Database
{

    // public function __construct()
    // {
    // }
    // không dùng __contruct ở class con khi extend class cha có __contruct
    // => sẽ không chạy __contruct của class cha
    public function getAll()
    {
        $SessionID  = session_id();
        $sql = "SELECT c.*, p.Image, p.Name FROM tbl_cart c JOIN tbl_product p ON c.ProductID = p.ProductID WHERE c.SessionID = '$SessionID'";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function add_to_cart($data)
    {
        $SessionID  = session_id();
        $ProductID = $data['ProductID'];
        $Quantity = $data['Quantity'];
        $Price = $data['CurrentPrice'];
        $CurrentPrice = $data['CurrentPrice'];

        $SessionID = mysqli_escape_string($this->link, $SessionID);
        $ProductID = mysqli_escape_string($this->link, $ProductID);
        $Quantity = mysqli_escape_string($this->link, $Quantity);
        $Price = mysqli_escape_string($this->link, $Price);
        $CurrentPrice = mysqli_escape_string($this->link, $CurrentPrice);
        $sql = "SELECT * FROM tbl_cart WHERE SessionID = '$SessionID' AND ProductID = '$ProductID'";
        $isAdded  = $this->select($sql);
        print_r($isAdded);
        if ($isAdded) {
            $isAdded =  $isAdded->fetch_assoc();
            $CartID = $isAdded['CartID'];
            $query = "UPDATE tbl_cart SET Quantity = Quantity + ' $Quantity ' WHERE CartID = '$CartID'";
            $result = $this->insert($query);
            if ($result) {
                return $result;
            } else {
                return false;
            }
        } else {
            $sql = "INSERT INTO tbl_cart (SessionID, ProductID, Quantity, Price) VALUES ('$SessionID', '$ProductID', '$Quantity', '$Price')";

            $result = $this->insert($sql);
            if ($result) {
                return $result;
            } else {
                return false;
            }
        }
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM tbl_brand WHERE BrandID = '$id' LIMIT 1";
        $result = $this->select($sql);
        if ($result) {

            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    public function updateOne($data, $img = '')
    {
        $Name = $data['Name'];
        $Status = $data['Status'];
        $id = $data['id'];
        $Name  = mysqli_escape_string($this->link, $Name);
        $Status = mysqli_escape_string($this->link, $Status);
        if ($img == '') {
            $sql = "UPDATE tbl_brand
            SET Name = '$Name', Status = $Status
            WHERE BrandID = '$id'";
            $result = $this->update($sql);
        } else {
            $sql = "UPDATE tbl_brand
            SET Name = '$Name', Status = $Status, Image = '$img'
            WHERE BrandID = '$id'";
            $result = $this->update($sql);
        }


        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function del($id)
    {
        $sql = "DELETE FROM tbl_brand WHERE BrandID = '$id'";
        $result = $this->delete($sql);
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
}
