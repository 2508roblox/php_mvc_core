<?php
class OrdersModel extends Database
{

    public function count()
    {
        $sql  = "SELECT COUNT(OrderID) AS TotalOrders FROM tbl_orders";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
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
    public function getByUsername($username)
    {
        $sql  = "SELECT o.*, c.*
        FROM tbl_orders o
        JOIN tbl_customer c ON o.CustomerID = c.CustomerID
        WHERE c.Username = '$username' ORDER BY OrderID DESC";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function delivered($id)
    {
        $sql  = "UPDATE tbl_orders SET delivered = 1 WHERE OrderID ='$id'";
        $result = $this->update($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function confirm($id)
    {
        $sql = "UPDATE tbl_orders SET Status = 'confirmed' WHERE OrderID = '$id'";
        $result = $this->update($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function cancle($id)
    {
        $sql = "UPDATE tbl_orders SET Status = 'cancle' WHERE OrderID = '$id'";
        $result = $this->update($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function getAllCashOnDelivered()
    {
        $sql = "SELECT SUM(TotalPrice) AS TotalPrice FROM tbl_orders WHERE Delivered = 1";
        $result = $this->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
