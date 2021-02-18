<?php


namespace App\Entity;


use App\Core\Entity;
use JsonSerializable;

class Realiza implements Entity, JsonSerializable {

    private ?int $id = null;
    private int $usuario_id;

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
     * @return int|null
     */
    public function getUsuarioId(): ?int
    {
        return $this->usuario_id;
    }

    /**
     * @param int|null $usuario_id
     */
    public function setUsuarioId(?int $usuario_id): void
    {
        $this->usuario_id = $usuario_id;
    }



    public function toArray(): array
    {
        return [
            "id"=>$this->getId(),
            "nombre"=>$this->getUsuarioId()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }


}