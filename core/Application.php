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
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response  $response;

    public static Application $app;
    public Controller $controller;
    public function __construct($roopath){
        self::$ROOT_DIR = $roopath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        self::$app = $this;
    }


    public function run(){
        echo $this->router->resolve();
    }

    /**
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * @param Controller $controller
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }
}