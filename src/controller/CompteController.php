<?php

namespace App\controller;
use App\core\abstract\AbstractController;
class CompteController extends AbstractController
{
    public function controller()
    {
        
     $this->renderHTML('login/accueil.html.php');
    }
}