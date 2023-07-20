<?php
class CartController extends Controller
{
    public function get()
    {
        $result =   $this->model('cart')->getAll();
        if ($result) {
            Session::set('cart', $result->fetch_all(MYSQLI_ASSOC));

            // Hiển thị trang giỏ hàng
            $this->view('frontend/cart', ['cart' =>  Session::get('cart')]);
        } else {
            Session::set('cart', null);
            $this->view('frontend/cart', ['cart' =>  null]);
        }
    }
    public function del()
    {
        if (isset($_GET['Id']) && $_GET['Id'] != '') {
            $this->model('cart')->del($_GET['Id']);
            Self::get();
        } else {
            redirect('/');
        }
    }
}
