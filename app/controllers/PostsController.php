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
            $this->view('posts', ['postsData' => ['faew', 'gaw', 'gwg']]);
        }
        public function get($params)
        {
            $this->view('posts', ['postId' => $params]);
        }
    }
