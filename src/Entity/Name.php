<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NameRepository")
 */
class Name
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $Second = [];

    /**
     * @ORM\Column(type="array")
     */
    private $no = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSecond(): ?array
    {
        return $this->Second;
    }

    public function setSecond(?array $Second): self
    {
        $this->Second = $Second;

        return $this;
    }

    public function getNo(): ?array
    {
        return $this->no;
    }

    public function setNo(array $no): self
    {
        $this->no = $no;

        return $this;
    }
}
