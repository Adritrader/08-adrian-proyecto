<?php
declare(strict_types=1);

namespace App\Model;


use App\Core\Model;
use App\Entity\Producto;
use PDO;

class ProductoModel extends Model
{
    public function __construct(PDO $pdo, string $tableName = "producto", string $className = Producto::class)
    {
        parent::__construct($pdo, $tableName, $className);
    }
}