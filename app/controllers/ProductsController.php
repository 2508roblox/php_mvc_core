<?php
class ProductsController extends Controller
{
    public function get()
    {
        $this->view('frontend/products');
    }
    public function productdetail($id = '1')
    //get product detail from product Model
    {
        $this->view('frontend/productdetail');
    }
    public function wishlist()
    //get product detail from product Model
    {
        $this->view('frontend/wishlist');
    }
    // public function productdetail()
    // {
    //     $this->view('frontend/productdetail');
    // }
}
