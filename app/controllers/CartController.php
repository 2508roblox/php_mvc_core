<?php
class CartController extends Controller
{
    public function get()
    {
        $result =   $this->model('cart')->getAll();
        Session::set('cart', $result->fetch_all(MYSQLI_ASSOC));

        // Hiển thị trang giỏ hàng
        $this->view('frontend/cart', ['cart' =>  Session::get('cart')]);
    }
}
