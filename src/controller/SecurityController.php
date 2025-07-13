<?php


namespace App\controller;

use App\core\abstract\AbstractController;
use App\service\AuthentificationService;

class SecurityController extends AbstractController
{
    private AuthentificationService $authService;

    public function __construct()
    {
        // parent::__construct();

        $this->authService = new AuthentificationService();
        
    }

    public function connexion()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $login = $_POST['login'] ?? '';
            $password = $_POST['password'] ?? '';
               
            $user = $this->authService->login($login, $password);

            if ($user) {
                // Set user session or token here
                // Redirect to a protected page or dashboard
                header('Location: /copmpte');
                exit;
            } else {
                // Handle login failure
                $this->renderHTML('login/login.html.php', ['error' => 'Invalid login or password']);
            }
        }
        // require_once __DIR__ . '/../../templates/login/login.html.php';
        $this->renderHTML('login/login.html.php');
    }
    public function inscription()
    {
        // require_once __DIR__ . '/../../templates/login/inscription.html.php';
        $this->renderHTML('login/inscription.html.php');
    }
}