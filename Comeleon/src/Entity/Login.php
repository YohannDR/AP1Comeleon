<?php

namespace App\Entity;

use App\Repository\PresentationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LoginRepository::class)
 */
class Login
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", lenght=255)
     */
    private $password;


    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUername(): ?string
    {
        return $this->username;
    }

    public function setUername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->age;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
