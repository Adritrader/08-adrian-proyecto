<?php
declare(strict_types=1);

namespace App\Entity;

use App\Core\Entity;
use DateTime;
use JsonSerializable;

class Pedido implements Entity, JsonSerializable {

    private ?int $id = null;
    private int $precio;
    private DateTime $fecha_pedido;
    private string $estado;
    private string $REALIZA_id;
    private string $REALIZA_USUARIO_id;


    public function __set(string $name, $value){
        switch ($name) {
            case "fecha":
                $this->fecha_pedido = DateTime::createFromFormat("Y-m-d", $value);
                break;
        }
    }
    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getFechaPedido()
    {
        return $this->fecha_pedido;
    }

    /**
     * @param mixed $fecha_pedido
     */
    public function setFechaPedido($fecha_pedido): void
    {
        $this->fecha_pedido = $fecha_pedido;
    }





    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getREALIZAId()
    {
        return $this->REALIZA_id;
    }

    /**
     * @param mixed $REALIZA_id
     */
    public function setREALIZAId($REALIZA_id): void
    {
        $this->REALIZA_id = $REALIZA_id;
    }

    /**
     * @return mixed
     */
    public function getREALIZAUSUARIOId()
    {
        return $this->REALIZA_USUARIO_id;
    }

    /**
     * @param mixed $REALIZA_USUARIO_id
     */
    public function setREALIZAUSUARIOId($REALIZA_USUARIO_id): void
    {
        $this->REALIZA_USUARIO_id = $REALIZA_USUARIO_id;
    }



    public function toArray(): array
    {
        return [
            "id"=>$this->getId(),
            "precio"=>$this->getPrecio(),
            "fecha"=>$this->getFechaPedido(),
            "estado"=>$this->getEstado(),
            "REALIZA_id"=>$this->getREALIZAId(),
            "REALIZA_USUARIO_id"=>$this->getREALIZAUSUARIOId()

        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }


}