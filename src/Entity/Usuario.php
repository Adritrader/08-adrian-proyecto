<?php
declare(strict_types=1);

namespace App\Entity;

use App\Core\Entity;
use JsonSerializable;

class Usuario implements Entity, JsonSerializable {

    private ?int $id = null;
    private string $nombre;
    private string $apellidos;
    private int $telefono;
    private string $email;
    private string $password;
    private string $role;

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

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }


        public function toArray(): array
    {
        return [
            "id"=>$this->getId(),
            "nombre"=>$this->getNombre(),
            "apellidos"=>$this->getApellidos(),
            "telefono"=>$this->getTelefono(),
            "email"=>$this->getEmail(),
            "password"=>$this->getPassword(),
            "role"=>$this->getRole()
        ];
    }

    public function jsonSerialize()
    {

        return $this->toArray();
    }


}