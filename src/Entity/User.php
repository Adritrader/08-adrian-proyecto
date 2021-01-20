<?php
declare(strict_types=1);

namespace App\Entity;

use App\Core\Entity;
use App\Model\UserModel;
use DateTime;
use JsonSerializable;

class User implements Entity {

    private ?int $id = null;
    private string $nombre;
    private string $password;
    private string $role;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function toArray(): array
    {
        return [
            "username"=>$this->getUsername(),
            "password"=>$this->getPassword(),
            "id"=>$this->getId(),
            "role"=>$this->getRole()
        ];
    }


}