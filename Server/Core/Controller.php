<?php
namespace Server\Core;

class Controller {
    public function model($model) {
        require_once "../Server/Models/" . $model . ".php";
        return new $model();
    }

    public function view($view, $data = []) {
        require_once "../Server/Views/" . $view . ".php";
    }
}
