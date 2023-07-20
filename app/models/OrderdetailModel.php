<?php
class OrderdetailModel extends Database
{

    public function add($data, $OrderID)
    {



        $ProductID = $data['ProductID'];
        $Quantity = $data['Quantity'];
        $Price = $data['Price'];
        $Name = $data['Name'];

        $ProductID  = mysqli_escape_string($this->link, $ProductID);
        $Quantity  = mysqli_escape_string($this->link, $Quantity);
        $Price  = mysqli_escape_string($this->link, $Price);
        $Name  = mysqli_escape_string($this->link, $Name);
        // $shipping  = mysqli_escape_string($this->link, $shipping);



        $sql  = "INSERT INTO tbl_orderdetail (OrderID, ProductID, Name, Price, Quantity  )
        VALUES ('$OrderID', '$ProductID','$Name','$Price','$Quantity')";
        $result = $this->insert($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function get($id)
    {
        $sql  = "SELECT od.*, o.address, o.orderdate, o.status, o.delivered, p.image 
        FROM tbl_orderdetail od 
        JOIN tbl_orders o ON od.OrderID = o.OrderID 
        JOIN tbl_product p ON od.ProductID = p.ProductID 
        WHERE od.OrderID = '$id'";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
