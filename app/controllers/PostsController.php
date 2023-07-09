 <?php
    class PostsController extends Controller
    {
        public function __construct()
        {
            $data = $this->model('admin')->get(2);
            $this->view('posts', $data);
        }
        public function index()
        {
            //include file view

        }
    }
