<?php
class HomeController extends Controller
{
    public function __construct()
    {

        // model, view Controller's extend method
    }
    public function get()
    {
        if ($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['login'])) {
            echo "login...";
        }
        if ($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['logout'])) {
            echo "logout...";
        }
        // redirect('/admin');
        $this->view('frontend/index');
    }
    
}
