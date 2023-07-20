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
        print_r($_POST);
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
                    $cart_products = $_SESSION['cart'];
                    $OrderID = $result->fetch_assoc()['OrderID'];
                    foreach ($cart_products as $product) {
                        # code...
                        $this->model('orderdetail')->add($product, $OrderID);
                    }
                    //remove cart
                    $this->model('cart')->delAll();
                    unset($_SESSION['cart']);
                    //
                    $mess = "<p style=\"color: green;\">Update successfully</p>";
                    // return checkout page
                    $username = $_SESSION['User_username'];
                    $result = $this->model('Customer')->getUser($username);

                    $user_data = $result->fetch_assoc();

                    return $this->view('frontend/checkout', ['user' => $user_data, 'mess' => $mess]);
                } else {
                    $mess = "<p style=\"color: red;\">Update Failed</p>";
                }
            }
        }
    }
}
