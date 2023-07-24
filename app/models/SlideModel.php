<?php
class SlideModel extends Database
{


    public function getAll()
    {
        $sql  = "SELECT s.*, p.Image, p.Name 
        FROM tbl_slide s 
        JOIN tbl_product p ON s.ProductID = p.ProductID;";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function del($id)
    {
        $sql = "DELETE FROM tbl_slide WHERE SlideID = '$id'";
        $result = $this->delete($sql);
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function add($id)
    {
        $sql = "SELECT * FROM tbl_slide WHERE ProductID = '$id'";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            $sql = "INSERT INTO tbl_slide(ProductID) VALUES ('$id')";
            $result = $this->insert($sql);
            if ($result) {

                return $result;
            } else {
                return false;
            }
        }
    }
}
