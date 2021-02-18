<?php


namespace App\Entity;


use App\Core\Entity;
use JsonSerializable;
use DateTime;

class Registra implements Entity, JsonSerializable {

    private ?int $id = null;
    private int $USUARIO_id;
    private int $SERVICIO_id;
    private DateTime $hora_cita;
    private DateTime $fecha_cita;

    public function __set(string $name, $value)
    {
        switch ($name) {
            case "hora":
                $this->hora_cita = DateTime::createFromFormat("H:i:s", $value);
                break;
            case "fecha":
                $this->fecha_cita = DateTime::createFromFormat("Y-m-d", $value);
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
     * @return int
     */
    public function getUSUARIOId(): int
    {
        return $this->USUARIO_id;
    }

    /**
     * @param int $USUARIO_id
     */
    public function setUSUARIOId(int $USUARIO_id): void
    {
        $this->USUARIO_id = $USUARIO_id;
    }

    /**
     * @return int
     */
    public function getSERVICIOId(): int
    {
        return $this->SERVICIO_id;
    }

    /**
     * @param int $SERVICIO_id
     */
    public function setSERVICIOId(int $SERVICIO_id): void
    {
        $this->SERVICIO_id = $SERVICIO_id;
    }




    /**
     * @return DateTime
     */
    public function getHoraCita(): DateTime
    {
        return $this->hora_cita;
    }

    /**
     * @param DateTime $hora_cita
     */
    public function setHoraCita(DateTime $hora_cita): void
    {
        $this->hora_cita = $hora_cita;
    }

    /**
     * @return DateTime
     */
    public function getFechaCita(): DateTime
    {
        return $this->fecha_cita;
    }

    /**
     * @param DateTime $fecha_cita
     */
    public function setFechaCita(DateTime $fecha_cita): void
    {
        $this->fecha_cita = $fecha_cita;
    }


    public function toArray(): array
    {
        return [
            "id"=>$this->getId(),
            "USUARIO_id"=>$this->getUsuarioId(),
            "SERVICIO_id"=>$this->getServicioId(),
            "hora"=>$this->getHoraCita(),
            "fecha"=>$this->getFechaCita()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }


}