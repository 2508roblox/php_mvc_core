<?php
// handle route to include ->Controller
class Core
{
    private $controller = DEFAULT_CONTROLLER;
    private $method = DEFAULT_METHOD;
    private $params = DEFAULT_PARAMS;
    // default controller, method, params
    public function __construct()
    {
        $exit_controller = array('abouts', 'admin', 'blog', 'cart', 'checkout', 'contact', 'home', 'posts', 'products', 'user', 'wishlist');

        $url = self::explodeUrl();
        // tồn tại url và controller

        if (isset($url) &&   in_array($url[0], $exit_controller)) {

            $this->controller = ucfirst($url[0]) . 'Controller';
            include_once __DIR__ . '/../controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller();
            unset($url[0]);

            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
            $this->params = isset($url) ? array_values($url) : $this->params;
        } else {
            // không có url hoặc url không tồn tại controller -> dùng controller mặc định -> kiểm tra method -> params
            include_once __DIR__ . '/../controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller();
            if (isset($url[0]) && method_exists($this->controller, $url[0])) {

                $this->method = $url[0];
                unset($url[0]);
                $this->params = isset($url) ? array_values($url) : $this->params;
            }
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function explodeUrl()
    {

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = rtrim($url, '/');
            $url  = explode('/', $url);
            return $url;
        }
    }
}
