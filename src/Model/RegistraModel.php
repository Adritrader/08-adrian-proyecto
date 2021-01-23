<?php
declare(strict_types=1);

namespace App\Model;


use App\Core\Model;
use App\Entity\Registra;
use PDO;

class RegistraModel extends Model
{
    public function __construct(PDO $pdo, string $tableName = "registra", string $className = Registra::class)
    {
        parent::__construct($pdo, $tableName, $className);
    }
}