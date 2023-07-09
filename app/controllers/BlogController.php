<?php
class BlogController extends Controller
{
    public function get()
    {
        $this->view('frontend/blog');
    }
    public function details()
    {
        $this->view('frontend/blogdetails');
    }
}
