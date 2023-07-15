<?php
class UserController extends Controller
{
    public function get()
    {
        $this->view('frontend/profile');
    }
    public function signin()
    {

        $this->view('frontend/signin');
    }
    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
            $result = $this->model('customer')->signup($_POST);
            if ($result) {
                echo $result;
            }
        }
        $this->view('frontend/signup');
    }
    public function signout()
    {
        $this->view('frontend/profile');
    }
}
