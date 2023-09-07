<?php
class Url
{
    // Default controller, method
    private $controller = 'Home';
    private $method = 'index';
    private $params = [];

    // Manipulate URL
    public function __construct()
    {
        if (isset($_GET['url'])) {

            // Delete slash symbol in the right side of url
            $url = rtrim($_GET['url'], '/');

            // Clean the url from suspicious character
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Saparate the url with a slash symbol
            $url = explode('/', $url);
        }

        // Check controller
        if (isset($url[0])) {
            if (file_exists('../app/controller/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        require_once '../app/controller/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        // Check method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Check params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Call controller, method, and params if exists
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
