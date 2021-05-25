<?php

namespace app\core;

use MongoDB\Driver\ReadConcern;

/***
 * Class Application
 *
 * @author Hamza BIYUZAN <hamza.biyuzan@gmail.com>
 * @package app\core
 **/

class Application
{
    public Router $router;
    public Request $request;
    public function __construct(){
        $this->request = new Request();
        $this->router = new Router($this->request);

    }


    public function run(){
        $this->router->resolve();
    }
}