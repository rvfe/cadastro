<?php

namespace App\Entity;

use App\Repository\GeradornumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GeradornumRepository::class)
 */
class Geradornum
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroMinimo;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroMaximo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroMinimo(): ?int
    {
        return $this->numeroMinimo;
    }

    public function setNumeroMinimo(int $numeroMinimo): self
    {
        $this->numeroMinimo = $numeroMinimo;

        return $this;
    }

    public function getNumeroMaximo(): ?int
    {
        return $this->numeroMaximo;
    }

    public function setNumeroMaximo(int $numeroMaximo): self
    {
        $this->numeroMaximo = $numeroMaximo;

        return $this;
    }
}
