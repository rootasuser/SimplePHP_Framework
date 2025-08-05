<?php

class HomeController {
    public function index() {
        echo "Welcome to SimplePHP Framework Developed By Wndev!";
    }

    public function hello($name = "Guest") {
        echo "Hello, $name!";
    }
}
