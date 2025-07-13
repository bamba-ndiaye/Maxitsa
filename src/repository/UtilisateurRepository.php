<?php

namespace App\repository;


use App\core\abstract\AbstractRepository;


class UtilisateurRepository extends AbstractRepository
{
    
    
    public function findUserByEmail(string $login)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE login = :login");
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    

   
}