<?php
class ProductModel extends Database
{

    // public function __construct()
    // {
    // }
    // không dùng __contruct ở class con khi extend class cha có __contruct
    // => sẽ không chạy __contruct của class cha
    public function getAllProducts()
    {
        $sql  = "SELECT * FROM tbl_product";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function addProduct($data)
    {
        $date = date("Y-m-d h:i:sa");
        $Name = $data['Name'];
        $Status = $data['Status'];
        $CateID = $data['CateID'];
        $SubCateID = $data['SubCateID'];
        $Description = $data['Description'];
        $Price = $data['Price'];
        $PromotionPrice = $data['PromotionPrice'];
        $Discount = $data['Discount'];
        $VAT = $data['VAT'];
        $Quantity = $data['Quantity'];
        $Tag = $data['Tag'];
        $Warranty = $data['Warranty'];
        $Name  = mysqli_escape_string($this->link, $Name);
        $Status = mysqli_escape_string($this->link, $Status);
        $CateID = mysqli_escape_string($this->link, $CateID);
        $SubCateID = mysqli_escape_string($this->link, $SubCateID);
        $Description = mysqli_escape_string($this->link, $Description);
        $Price = mysqli_escape_string($this->link, $Price);
        $PromotionPrice = mysqli_escape_string($this->link, $PromotionPrice);
        $Discount = mysqli_escape_string($this->link, $Discount);
        $VAT = mysqli_escape_string($this->link, $VAT);
        $Quantity  = mysqli_escape_string($this->link, $Quantity);
        $Tag  = mysqli_escape_string($this->link, $Tag);
        $Warranty = mysqli_escape_string($this->link, $Warranty);

        $sql  = "INSERT INTO tbl_product (Name, Tag ,Status, Image, ListImage, Price, PromotionPrice, Discount, VAT, Quantity, Warranty, Hot, Description, Detail, CateID, SubCateID)
        VALUES ('$Name', '$Tag', '$Status', 'abc.png', 'a.p, p.f', '$Price', '$PromotionPrice', '$Discount', '$VAT', '$Quantity', '$Warranty', '$date', '$Description', 'fawef', '$CateID', '$SubCateID')";
        $result = $this->insert($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
