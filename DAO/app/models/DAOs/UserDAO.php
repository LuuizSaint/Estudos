<?php

namespace app\models;

use app\configs\Connection;
use PDO;

class UserDAO 
{
    public function __construct(
        private PDO $pdo
    )
    {
        $this->pdo = Connection::getConn();
    }
}