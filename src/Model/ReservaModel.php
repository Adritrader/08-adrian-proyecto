<?php
declare(strict_types=1);

namespace App\Model;


use App\Core\Model;
use App\Entity\Reserva;
use PDO;

class ReservaModel extends Model
{
    public function __construct(PDO $pdo, string $tableName = "reserva", string $className = Reserva::class)
    {
        parent::__construct($pdo, $tableName, $className);
    }
}