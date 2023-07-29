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
            $cateID = $result['CateID'];
            $familiarProducts = $this->model('product')->familiar8($cateID);
            $this->view('frontend/productdetail', ['p_detail' => $result, 'f_ps' =>  $familiarProducts]);
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
            $Quantity = $_POST['Quantity'];
            $Id = $_POST['ProductID'];
            $result = $this->model('product')->checkStock($_POST['ProductID']);

            if ($result > 0 && $result >= $Quantity) {
                $result = $this->model('cart')->add_to_cart($_POST);
                if ($result) {
                    // Thêm sản phẩm vào giỏ hàng thành công, chuyển hướng đến trang giỏ hàng
                    redirect("/cart"); // -> redirect to CartController , excuse get mothed in this class
                    $this->view('frontend/cart');
                } else {

                    $this->view('frontend/cart');
                }
            } else {
                $result =   $this->model('product')->getById($Id);
                $mess = "<p style=\"color: red;\">Sorry, the Product is out of stock</p>";

                $this->view('frontend/productdetail', ['p_detail' => $result, 'mess' => $mess]);
            }
        }
    }
    // public function productdetail()
    // {
    //     $this->view('frontend/productdetail');
    // }
}
