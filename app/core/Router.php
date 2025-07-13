<?php

namespace App\core;


class Router
{
    public static function resolver($routes)
    {
        $uri = $_SERVER["REQUEST_URI"]?? "/";
            // var_dump("bonjour");die;
        if(array_key_exists($uri,  $routes))
        {
            $classname = $routes[$uri]["controlleur"];
            $actionname = $routes[$uri]["action"];
            $objet = new $classname();
            $objet->$actionname();
        }
      
    }

}