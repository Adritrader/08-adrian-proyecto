<?php declare(strict_types=1);

namespace App\Model;


use App\Core\Model;
use App\Entity\Usuario;
use PDO;

class UsuarioModel extends Model
{
    public function __construct(PDO $pdo, string $tableName = "usuario", string $className = Usuario::class)
    {
        parent::__construct($pdo, $tableName, $className);
    }
}