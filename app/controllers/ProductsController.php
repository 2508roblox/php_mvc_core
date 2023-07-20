<?php
class ProductsController extends Controller
{
    public function get()
    {
        $result =   $this->model('product')->getAllProducts();
        if ($result) {
            # code...
            $this->view('frontend/products', ['products' => $result]);
        } else {
            $this->view('frontend/products', ['products' => null]);
        }
    }
    public function productdetail($id = null)
    //get product detail from product Model
    {
        if (isset($id)) {
            $result =   $this->model('product')->getById($id);
            $this->view('frontend/productdetail', ['p_detail' => $result]);
        } else {
            redirect('/');
        }
    }
    public function productbycate()
    //get product detail from product Model
    {
        if (isset($_GET['cateId'])) {
            $result =   $this->model('product')->getByCate($_GET['cateId']);
            if ($result) {
                # code...
                $this->view('frontend/products', ['products' => $result]);
            } else {
                $this->view('frontend/products', ['products' => null]);
            }
        } else {
            redirect('/');
        }
    }
    public function addtocard()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result = $this->model('cart')->add_to_cart($_POST);
            if ($result) {
                // Thêm sản phẩm vào giỏ hàng thành công, chuyển hướng đến trang giỏ hàng
                redirect("/cart"); // -> redirect to CartController , excuse get mothed in this class
                $this->view('frontend/cart');
            } else {

                $this->view('frontend/cart');
            }
        } else {
            $this->view('frontend/cart');
        }
    }
    // public function productdetail()
    // {
    //     $this->view('frontend/productdetail');
    // }
}
