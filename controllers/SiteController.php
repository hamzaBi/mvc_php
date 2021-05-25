<?php

namespace app\controllers;


use app\core\Request;
use app\core\Controller;

/**
* @package app\controllers
 */

class SiteController extends Controller
{
    public function contact(){
        return $this->render('contact');

    }
    public function home(){
        $params = [
            'name' => 'Hamza Biyuzan'
        ];
        return $this->render("home", $params);

    }

    public function handleContact(Request $request){
        $body = $request->getBody();
        var_dump($body);
        return "handling contact data";
    }
}