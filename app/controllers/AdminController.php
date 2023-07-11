<?php
class AdminController extends Controller
{

    public function get()
    {
        // if not auth -> view to login else go to dashboard
        $this->view('admin/index');
    }
    public function table()
    {
        //if authed -> go to dashboard
        //if submit form -> check -> home 
        $this->view('admin/table');
    }
    public function login()
    {
        //if authed -> go to dashboard
        //if submit form -> check -> home 
        $this->view('admin/login');
    }
    public function addproduct()
    {
        // handle all method, ->view
        //isset POST update

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $result = $this->model('product')->addproduct($_POST, $_FILES);

            if ($result) {

                $this->view('admin/addproduct', ['Add successfully']);
            } else {
                $this->view('admin/addproduct', ['Add error']);
            }
        } else {

            $this->view('admin/addproduct');
        }
    }
    public function updateproduct()
    {
        // handle all method, ->view
        //isset POST update
        $this->view('admin/updateproduct');
    }
    public function productlist()
    {
        $model = $this->model('product');
        $result = $model->getAllProducts();
        if ($result) {
            $this->view('admin/productlist', ['products' => $result]);
        }
        // handle all method del, get, update, ->view
        //isset POST update
    }
    public function categorylist()
    {



        $this->view('admin/categorylist');

        // handle all method del, get, update, ->view
        //isset POST update
    }
    public function orders()
    {

        // handle all method del, get, update, ->view
        //isset POST update
        $this->view('admin/orders');
    }
    public function reviews()
    {

        // handle all method del, get, update, ->view
        //isset POST update
        $this->view('admin/reviews');
    }
}
