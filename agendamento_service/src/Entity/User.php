<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class User
{
    /**
     *@ORM\Id
     *@ORM\GeneratedValue
     *@ORM\Column(type="integer") 
     */
    private string $nome;
    private $email;
    private $cpf;

    public function  getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getEmail(): string
    {
        return  $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }
}
