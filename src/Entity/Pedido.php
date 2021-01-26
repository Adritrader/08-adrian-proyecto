<?php
declare(strict_types=1);

namespace App\Entity;

use App\Core\Entity;
use DateTime;
use JsonSerializable;

class Pedido implements Entity, JsonSerializable {

    private ?int $id = null;
    private int $precio;
    private DateTime $fecha;
    private string $estado;
    private string $realiza_id;
    private string $realiza_usuario_id;


    public function __set(string $name, $value){
        switch ($name) {
            case "release_date":
                $this->fecha = DateTime::createFromFormat("Y-m-d", $value ?? date("Y-m-d"));
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
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
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
    public function getRealizaId()
    {
        return $this->realiza_id;
    }

    /**
     * @param mixed $realiza_id
     */
    public function setRealizaId($realiza_id): void
    {
        $this->realiza_id = $realiza_id;
    }

    /**
     * @return mixed
     */
    public function getRealizaUsuarioId()
    {
        return $this->realiza_usuario_id;
    }

    /**
     * @param mixed $realiza_usuario_id
     */
    public function setRealizaUsuarioId($realiza_usuario_id): void
    {
        $this->realiza_usuario_id = $realiza_usuario_id;
    }

    public function toArray(): array
    {
        return [
            "id"=>$this->getId(),
            "precio"=>$this->getPrecio(),
            "fecha"=>$this->getFecha(),
            "estado"=>$this->getEstado(),
            "realiza_id"=>$this->getRealizaId(),
            "realiza_usuario_id"=>$this->getRealizaUsuarioId()

        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }


}