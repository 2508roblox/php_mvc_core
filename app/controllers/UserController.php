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
        $this->view('frontend/signup');
    }
    public function signout()
    {
        $this->view('frontend/profile');
    }
}
