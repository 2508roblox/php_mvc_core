<?php
class HomeController extends Controller
{
    public function __construct()
    {
        echo 'Home ';
        // model, view Controller's extend method
        $data =  $this->model('admin')->get('2');
        $this->view('home', $data);
    }
    public function index()
    {
        echo 'Home index';
    }
    public function get($id)
    {
        echo 'Home ' . $id;
    }
}
