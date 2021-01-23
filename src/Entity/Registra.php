<?php


namespace App\Entity;


use App\Core\Entity;
use JsonSerializable;
use DateTime;

class Registra implements Entity, JsonSerializable {

    private ?int $id = null;
    private string $usuario_id;
    private string $servicio_id;
    private DateTime $hora;
    private DateTime $fecha;

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
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param mixed $usuario_id
     */
    public function setUsuarioId($usuario_id): void
    {
        $this->usuario_id = $usuario_id;
    }

    /**
     * @return mixed
     */
    public function getServicioId()
    {
        return $this->servicio_id;
    }

    /**
     * @param mixed $servicio_id
     */
    public function setServicioId($servicio_id): void
    {
        $this->servicio_id = $servicio_id;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora): void
    {
        $this->hora = $hora;
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

    public function toArray(): array
    {
        return [
            "id"=>$this->getId(),
            "usuario_id"=>$this->getUsuarioId(),
            "servicio_id"=>$this->getServicioId(),
            "hora"=>$this->getHora(),
            "fecha"=>$this->getFecha()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }


}