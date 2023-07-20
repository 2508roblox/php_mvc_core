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
}
