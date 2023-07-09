<?php
class AdminController extends Controller
{
    public function __construct()
    {

        // model, view Controller's extend method
    }
    public function get()
    {
        // if not auth -> view to login else go to dashboard
        $this->view('admin/index');
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
        $this->view('admin/addproduct');
    }
    public function updateproduct()
    {
        // handle all method, ->view
        //isset POST update
        $this->view('admin/updateproduct');
    }
    public function productlist()
    {

        // handle all method del, get, update, ->view
        //isset POST update
        $this->view('admin/productlist');
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
