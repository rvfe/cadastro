<?php

namespace App\Entity;

use App\Repository\PessoaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PessoaRepository::class)
 */
class Pessoa
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
    private $Nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Endereco;

    /**
     * @ORM\Column(type="date")
     */
    private $CriadoEm;

    /**
     * @ORM\Column(type="date")
     */
    private $AtualizadoEm;

    /**
     * @ORM\Column(type="integer")
     */
    private $idade;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Telefone;

    public function getId(): ?int
    {
        
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->Nome;
    }

    public function setNome(string $Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->Endereco;
    }

    public function setEndereco(string $Endereco): self
    {
        $this->Endereco = $Endereco;

        return $this;
    }

    public function getCriadoEm(): ?\DateTimeInterface
    {
        return $this->CriadoEm;
    }

    public function setCriadoEm(\DateTimeInterface $CriadoEm): self
    {
        $this->CriadoEm = $CriadoEm;

        return $this;
    }

    public function getAtualizadoEm(): ?\DateTimeInterface
    {
        return $this->AtualizadoEm;
    }

    public function setAtualizadoEm(\DateTimeInterface $AtualizadoEm): self
    {
        $this->AtualizadoEm = $AtualizadoEm;

        return $this;
    }

    public function getIdade(): ?int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->Telefone;
    }

    public function setTelefone(string $Telefone): self
    {
        $this->Telefone = $Telefone;

        return $this;
    }
}
