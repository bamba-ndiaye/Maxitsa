<?php

namespace App\core\abstract;

class AbstractRepository
{
    protected \PDO $pdo;

    public function __construct()
    {
        $this->pdo = (new Database())->getConnection();
    }
}