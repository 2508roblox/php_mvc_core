<?php
class ContactController extends Controller
{
    public function get()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['Name'] == '' || $_POST['Phone'] == '' || $_POST['Email'] == '' || $_POST['Mess'] == '') {
                $result = "<p style=\"color: red;\">All fields must be not empty</p>";
                return  $this->view('frontend/contact', ['result' =>  $result]);
            } else {
                $result = $this->model('contact')->add($_POST);
                if ($result) {
                    // set Session
                    $result = "<p style=\"color: green;\">Successfully</p>";

                    return  $this->view('frontend/contact', ['result' =>  $result]);
                } else {
                    $result = "<p style=\"color: red;\">Username or Password didn't match.</p>";

                    return  $this->view('frontend/contact', ['result' =>  $result]);
                }
            }
        }
        $this->view('frontend/contact');
    }
}
