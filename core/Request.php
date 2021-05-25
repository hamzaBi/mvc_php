<?php


namespace app\core;

/***
 * Class Request
 *
 * @author Hamza BIYUZAN <hamza.biyuzan@gmail.com>
 * @package app\core
 **/


class Request
{

    public function __construct()
    {
    }

    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position == false){
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function method(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet(){
        return $this->method() === 'get';
    }

    public function isPost(){
        return $this->method() == 'post';
    }

    public function getBody(){
        $body = [];
        if($this->method() === 'get'){
            foreach ($_GET as $k => $v){
                $body[$k] = filter_input(INPUT_GET, $k, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if($this->method() === 'post'){
            foreach ($_POST as $k => $v){
                $body[$k] = filter_input(INPUT_POST, $k, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }

}