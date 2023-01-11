<?php

namespace app\controllers;

use app\core\Application;

class SiteController{

    public static function home()
    {
        $param = [
            'name' => "Marius"
        ];
        return Application::$app->router->renderView("home",$param);
    }

    public static function contact()
    {
        return Application::$app->router->renderView("contact");
    }
    public static function handleContact()
    {
        return "Datele au fost trimise";
    }
}