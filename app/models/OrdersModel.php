<?php
class OrdersModel extends Database
{


    public function add($data)
    {

        $CustomerID = $data['CustomerID'];
        $Address = $data['Address'];
        $Phone = $data['Phone'];
        $TotalPrice = $data['TotalPrice'] + $data['shipping'];
        // $shipping = $data['shipping'];
        $payment = $data['payment'];

        $CustomerID  = mysqli_escape_string($this->link, $CustomerID);
        $Address  = mysqli_escape_string($this->link, $Address);
        $Phone  = mysqli_escape_string($this->link, $Phone);
        $TotalPrice  = mysqli_escape_string($this->link, $TotalPrice);
        // $shipping  = mysqli_escape_string($this->link, $shipping);
        $payment = mysqli_escape_string($this->link, $payment);


        $sql  = "INSERT INTO tbl_orders (CustomerID, Address, Phone, TotalPrice, PaymentMethod)
        VALUES ('$CustomerID', '$Address', '$Phone', '$TotalPrice', '$payment')";
        $this->insert($sql);
        $result = $this->insert(" SELECT LAST_INSERT_ID() AS OrderID");
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function getAll()
    {
        $sql  = "SELECT * FROM tbl_orders";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
