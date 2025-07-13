<?php

namespace App\service;

class AuthentificationService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new \App\repository\UtilisateurRepository();
    }

    public function login(string $login, string $password)
    {
        $user = $this->userRepository->findUserByEmail($login);

        if ($user && $password == $user['password']) {

            // Set user session or token here
            return $user;
        }
        return null;
    }
}