<?php
class CheckoutController extends Controller
{
    public function get()
    {


        if ($_SESSION['User_login']) {
            //get user info
            $username = $_SESSION['User_username'];
            $result = $this->model('Customer')->getUser($username);
            $user_data = $result->fetch_assoc();
            $this->view('frontend/checkout', ['user' => $user_data]);
        } else {
            redirect('/user/signin');
        }
    }
    public function add()
    {
        // add to db -> loop and insert each product
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkout_btn'])) {
            if ($_POST['CustomerID'] == '' || $_POST['Address'] == '' || $_POST['Phone'] == '' || $_POST['TotalPrice'] == '' || $_POST['shipping'] == '' || $_POST['payment'] == '') {
                $mess = "<p style=\"color: red;\">All fields must fill</p>";
                $username = $_SESSION['User_username'];
                $result = $this->model('Customer')->getUser($username);
                $user_data = $result->fetch_assoc();

                return $this->view('frontend/checkout', ['user' => $user_data, 'mess' => $mess]);
            } else {
                $result = $this->model('orders')->add($_POST);
                echo '<br>';
                echo '<br>';

                if ($result) {

                    // loop for orderdetail
                    // change the stock
                    $cart_products = $_SESSION['cart'];
                    $OrderID = $result->fetch_assoc()['OrderID'];
                    foreach ($cart_products as $product) {
                        # code...
                        $this->model('product')->delStock($product['Quantity'], $product['ProductID']);
                        $this->model('orderdetail')->add($product, $OrderID);
                    }
                    //remove cart
                    $this->model('cart')->delAll();
                    unset($_SESSION['cart']);
                    //
                    $mess = "<p style=\"color: green;\">Order successfully</p>";
                    // return checkout page
                    redirect('/user');

                    $this->view('frontend/profile', ['mess' => $mess]);
                } else {
                    $mess = "<p style=\"color: red;\">Order was Failed</p>";
                    $this->view('frontend/checkout', ['mess' => $mess]);
                }
            }
        }
    }
}
