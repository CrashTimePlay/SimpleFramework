<?php

namespace application\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    function __construct()
    {
        $arr = require 'application/config/routes.php';
//        debug($arr);
    }

    public function add() {

    }

    public function match() {

    }

    public function run() {
        echo 'start';
    }


}