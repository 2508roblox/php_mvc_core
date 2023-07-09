<?php
class AboutsController extends Controller
{
    public function __construct()
    {

        // model, view Controller's extend method
    }
    public function get()
    {
        $this->view('frontend/aboutus');
    }
    public function details()
    {
        $this->view('frontend/aboutus');
    }
}
