<?php
namespace Server\Core;

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Controller
        if (file_exists("../Server/Controllers/" . ucfirst($url[0]) . "Controller.php")) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        require_once "../Server/Controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // Method
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Params
        $this->params = $url ? array_values($url) : [];

        // Run
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        return isset($_GET['url']) 
            ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) 
            : ['home'];
    }
}
