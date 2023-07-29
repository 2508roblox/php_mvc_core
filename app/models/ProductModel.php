<?php
class ProductModel extends Database
{
    public function getAllProductsAdmin()
    {
        $sql  = "SELECT * FROM tbl_product ";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getAllProducts()
    {
        $sql  = "SELECT * FROM tbl_product  WHERE Status = 'Published'";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function addProduct($data, $first_element, $listFile)
    {
        $date = date("Y-m-d h:i:sa");
        $Name = $data['Name'];
        $Status = $data['Status'];
        $CateID = $data['CateID'];
        $BrandID = $data['BrandID'];
        $Price = $data['Price'];
        $PromotionPrice = $data['PromotionPrice'];
        $Discount = $data['Discount'];
        $VAT = $data['VAT'];
        $Quantity = $data['Quantity'];
        $Tag = isset($data['Tag']) ? $data['Tag'] : '';
        $Warranty = $data['Warranty'];
        $Detail = $data['productdesc'];
        $Name  = mysqli_escape_string($this->link, $Name);
        $Status = mysqli_escape_string($this->link, $Status);
        $CateID = mysqli_escape_string($this->link, $CateID);
        $BrandID = mysqli_escape_string($this->link, $BrandID);
        $Price = mysqli_escape_string($this->link, $Price);
        $PromotionPrice = mysqli_escape_string($this->link, $PromotionPrice);
        $Discount = mysqli_escape_string($this->link, $Discount);
        $VAT = mysqli_escape_string($this->link, $VAT);
        $Quantity  = mysqli_escape_string($this->link, $Quantity);
        $Tag  = mysqli_escape_string($this->link, $Tag);
        $Warranty = mysqli_escape_string($this->link, $Warranty);


        $sql  = "INSERT INTO tbl_product (Name, Tag, Status, Image, ListImage, Price, PromotionPrice, Discount, VAT, Quantity, Warranty, Hot, Description, Detail, CateID, BrandID)
        VALUES ('$Name', '$Tag', '$Status', '$first_element', '$listFile', '$Price', '$PromotionPrice', '$Discount', '$VAT', '$Quantity', '$Warranty', '', '', ' $Detail', '$CateID', '$BrandID')";
        $result = $this->insert($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function updateProduct($data, $file_name = '')
    {

        $id = $data['id'];
        $Name = $data['Name'];
        $Status = $data['Status'];
        $CateID = $data['CateID'];
        $BrandID = $data['BrandID'];
        $Description = $data['Description'];
        $Price = $data['Price'];
        $PromotionPrice = $data['PromotionPrice'];
        $Discount = $data['Discount'];
        $VAT = $data['VAT'];
        $Quantity = $data['Quantity'];
        $Tag = isset($data['Tag']) ? $data['Tag'] : '';
        $Warranty = $data['Warranty'];
        $Name  = mysqli_escape_string($this->link, $Name);
        $Status = mysqli_escape_string($this->link, $Status);
        $CateID = mysqli_escape_string($this->link, $CateID);
        $BrandID = mysqli_escape_string($this->link, $BrandID);
        $Description = mysqli_escape_string($this->link, $Description);
        $Price = mysqli_escape_string($this->link, $Price);
        $PromotionPrice = mysqli_escape_string($this->link, $PromotionPrice);
        $Discount = mysqli_escape_string($this->link, $Discount);
        $VAT = mysqli_escape_string($this->link, $VAT);
        $Quantity  = mysqli_escape_string($this->link, $Quantity);
        $Tag  = mysqli_escape_string($this->link, $Tag);
        $Warranty = mysqli_escape_string($this->link, $Warranty);


        if ($file_name != '') {
            $sql  =  "UPDATE  tbl_product SET Name = '$Name', Tag = '$Tag', Status = '$Status', Image = '$file_name', ListImage = '', Price = '$Price', PromotionPrice = '$PromotionPrice', Discount = '$Discount', VAT = '$VAT', Quantity = '$Quantity', Warranty = '$Warranty', Hot = '', Description = '$Description', Detail = '', CateID = '$CateID', BrandID = '$BrandID'
      WHERE ProductID = '$id'";
            $result = $this->update($sql);
        } else {
            $sql  =  "UPDATE  tbl_product SET Name = '$Name', Tag = '$Tag', Status = '$Status',  ListImage = '', Price = '$Price', PromotionPrice = '$PromotionPrice', Discount = '$Discount', VAT = '$VAT', Quantity = '$Quantity', Warranty = '$Warranty', Hot = '', Description = '$Description', Detail = '', CateID = '$CateID', BrandID = '$BrandID'
        WHERE ProductID = '$id'";
            $result = $this->update($sql);
        }
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM tbl_product WHERE ProductID = '$id' LIMIT 1";
        $result = $this->select($sql);
        if ($result) {

            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    public function getByCate($id)
    {
        $sql = "SELECT * FROM tbl_product WHERE CateID = '$id' ";
        $result = $this->select($sql);
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function del($id)
    {
        $sql = "DELETE FROM tbl_product WHERE ProductID = '$id'";
        $result = $this->delete($sql);
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function getFirst8Products()
    {
        $sql  = "SELECT * FROM tbl_product WHERE Status = 'Published' ORDER BY RAND()  LIMIT 8 ";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function familiar8($id)
    {
        $sql  = "SELECT * FROM tbl_product WHERE CateID = '$id' ORDER BY RAND()  LIMIT 8 ";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getSecond8Products()
    {
        $sql  = "SELECT * FROM tbl_product WHERE Status = 'Published' LIMIT 8 OFFSET 8 ";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getLastestProduct()
    {
        $sql  = "SELECT * FROM tbl_product WHERE Status = 'Published'  ORDER BY ProductID DESC LIMIT 5 ";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function checkStock($id)
    {
        $sql  = "SELECT Quantity FROM tbl_product WHERE ProductID = '$id'";
        $result = $this->select($sql);
        if ($result) {
            return $result->fetch_assoc()['Quantity'];
        } else {
            return false;
        }
    }
    public function delStock($num, $id)
    {
        $sql  = "UPDATE tbl_product
                 SET Quantity = Quantity - $num,
                     Sold = Sold + $num
                 WHERE ProductID = '$id'";
        $result = $this->update($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getSoldCount()
    {
        $sql  = "SELECT SUM(Sold) AS TotalSold FROM tbl_product";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
