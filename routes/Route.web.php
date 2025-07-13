<?php

use App\controller\SecurityController;
// $controller = new SecurityController();
// $controller->login();

use App\controller\ConnexionController;
// $connexion = new ConnexionController();
// $connexion->connexion();

 use App\controller\CompteController;
// $compte = new CompteController();
// $compte->controller();
return $routes = [
    "/" => [

            "controlleur" => SecurityController::class,
            "action" => "connexion"
    ],

    "/inscription" =>[
            "controlleur" => SecurityController::class,
            "action" => "inscription"
    ],
    "/copmpte" =>[ 
            "controlleur" => CompteController::class,
            "action" => "controller"
    ],


    ];