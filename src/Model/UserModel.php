<?php


namespace App\Model;



class UserModel extends Model
{
    public function __construct(PDO $pdo, string $tableName = "user",
                                string $className = User::class)
    {
        parent::__construct($pdo, $tableName, $className);
    }
}