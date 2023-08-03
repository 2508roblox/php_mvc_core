<?php
// method to include view, model
// model return class model to handle with database
// Ex: $postModel = $this->model('Posts');
//     $postModel->getAllPost();
class Controller
{
    public $fm;
    public function __construct()
    {
        $this->fm = new Format();
    }
    public function model($model)
    {
        $exit_model = array('brand', 'admin', 'cart', 'category', 'contact', 'customer', 'orderdetail', 'orders', 'product', 'slide');

        // model first name ex: product
        if (in_array($model, $exit_model)) {
            require_once __DIR__ . "/../models/" . ucfirst($model)  . 'Model.php';
            $model = ucfirst($model) . 'Model';
            return new  $model();
        } else {
            die('model not found');
        }
    }
    public function view($view, $data = [''])
    {
        if (file_exists('../app/views/' .  $view . '.php')) {
            require_once __DIR__ . "/../views/" . $view . '.php';
        } else {
            die('views not found');
        }
    }
}
