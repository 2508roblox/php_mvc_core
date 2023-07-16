<?php
class UserController extends Controller
{
    public function get()
    {
        $this->view('frontend/profile');
    }
    public function signin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])) {
            if ($_POST['Username'] == ''  || $_POST['Password'] == '') {
                $result = "<p style=\"color: red;\">All fields must be not empty</p>";
                return  $this->view('frontend/signin', ['result' =>  $result]);
            } else {
                $result = $this->model('customer')->signin($_POST);
                if ($result) {
                    // set Session
                    print_r($result);
                    Session::set('User_login', true);
                    Session::set('User_username', $_POST['Username']);
                    redirect('/');
                } else {
                    $result = "<p style=\"color: red;\">Username or Password didn't match.</p>";

                    return  $this->view('frontend/signin', ['result' =>  $result]);
                }
            }
        }
        $this->view('frontend/signin');
    }
    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
            if ($_POST['Firstname'] == '' || $_POST['Lastname'] == '' || $_POST['Username'] == '' || $_POST['Email'] == '' || $_POST['Password'] == '') {
                $result = "<p style=\"color: red;\">All fields must be not empty</p>";
                return  $this->view('frontend/signup', ['result' =>  $result]);
            } else {
                $result = $this->model('customer')->signup($_POST);
                if ($result) {
                    // set Session
                    Session::set('User_login', true);
                    Session::set('User_firstname', $_POST['Firstname']);
                    Session::set('User_lastname', $_POST['Lastname']);
                    Session::set('User_username', $_POST['Username']);
                    redirect('/');
                } else {
                    $result = "<p style=\"color: red;\">Username has been taken</p>";

                    return  $this->view('frontend/signup', ['result' =>  $result]);
                }
            }
        }
        $this->view('frontend/signup');
    }
    public function signout()
    {
        Session::destroy();
        redirect('/user/signin');
    }
}
