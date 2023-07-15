<?php
class BrandModel extends Database
{

    // public function __construct()
    // {
    // }
    // không dùng __contruct ở class con khi extend class cha có __contruct
    // => sẽ không chạy __contruct của class cha
    public function getAll()
    {
        $sql  = "SELECT * FROM tbl_brand";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function add($data, $img)
    {
        $Name = $data['Name'];
        $Status = $data['Status'];
        $CateID = $data['CateID'];

        $Name  = mysqli_escape_string($this->link, $Name);
        $Status = mysqli_escape_string($this->link, $Status);


        $sql  = "INSERT INTO tbl_brand (Name,   Status, CateID,  Image )
        VALUES ('$Name',   '$Status', '$CateID', '$img')";
        $result = $this->insert($sql);
        if ($result) {
            return $result;
        } else {
            return false;
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
