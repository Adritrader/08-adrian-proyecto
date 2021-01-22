<?php


namespace App\Entity;


use App\Core\Entity;

class Servicio implements Entity {

    private ?int $id = null;
    private string $nombre;

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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function toArray(): array
    {
        return [
            "id"=>$this->getId(),
            "name"=>$this->getNombre()
        ];
    }
}