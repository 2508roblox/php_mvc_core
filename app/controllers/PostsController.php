 <?php
    class PostsController extends Controller
    {
        public function __construct()
        {
            echo 'Post ';
            $this->model('admin');
        }
        public function index()
        {
            //include file view
            $this->view('posts', ['postsData' => ['faew', 'gaw', 'gwg']]);
        }
        public function get($params)
        {
            $this->view('posts', ['postId' => $params]);
        }
    }
