<?php
class HomeController extends Controller
{
    public function __construct()
    {
        $this->view('home');
        // model, view Controller's extend method
    }
    public function index()
    {
    }
    public function get($id)
    {
        echo 'Home ' . $id;
    }
}
