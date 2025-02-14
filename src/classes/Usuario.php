<?php
namespace Ecommerce\entidade;
class Usuario {
    private int $id;
    private  string $nome;
    private string $email;
    private string $senha;

    public function __construct($nome, $email, $senha) {
        // $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    
    public function getId(): int {
        return $this->id;
    }
    
    public function setId(int $id): void{
        $this->id = $id;
    }
    public function getNome() : string{
        return $this->nome;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function getSenha(): string {
        return $this->senha;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setEmail($email): void {
        $this->email = $email;
    }
    public function setSenha($senha): void {
        $this->senha = $senha;
    }
}