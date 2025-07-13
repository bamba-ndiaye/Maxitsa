<?php

namespace App\core\abstract;

class Database
{
    private \PDO $pdo;

    public function __construct()
    {
        // Assuming you have a method to get the PDO instance
        $this->pdo = $this->getPDOInstance();
    }

    private function getPDOInstance(): \PDO
    {
        // Replace with your actual database connection logic
        return new \PDO('pgsql:host=localhost;dbname=maxitsa', 'khadim', 'bamba');
    }

    public function getConnection(): \PDO
    {
        return $this->pdo;
    }
}