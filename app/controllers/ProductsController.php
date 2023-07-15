<?php
class ProductsController extends Controller
{
    public function get()
    {
        $this->view('frontend/products');
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

    // public function productdetail()
    // {
    //     $this->view('frontend/productdetail');
    // }
}
