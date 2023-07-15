<?php
class CategoryModel extends Database
{

    // public function __construct()
    // {
    // }
    // không dùng __contruct ở class con khi extend class cha có __contruct
    // => sẽ không chạy __contruct của class cha
    public function getAll()
    {
        $sql  = "SELECT * FROM tbl_category";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getAllPublished()
    {
        $sql  = "SELECT * FROM tbl_category WHERE Status = '1'";
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

        $Name  = mysqli_escape_string($this->link, $Name);
        $Status = mysqli_escape_string($this->link, $Status);


        $sql  = "INSERT INTO tbl_category (Name,   Status, Image )
        VALUES ('$Name',   '$Status', '$img')";
        $result = $this->insert($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM tbl_category WHERE CateID = '$id' LIMIT 1";
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
            $sql = "UPDATE tbl_category
            SET Name = '$Name', Status = $Status
            WHERE CateID = '$id'";
            $result = $this->update($sql);
        } else {
            $sql = "UPDATE tbl_category
            SET Name = '$Name', Status = $Status, Image = '$img'
            WHERE CateID = '$id'";
            $result = $this->update($sql);
        }


        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function delOne($id)
    {

        $sql = "DELETE FROM tbl_category WHERE CateID = '$id'";
        $result = $this->delete($sql);


        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
}
