<?php 

class Usuario {
    private string $dtNascimento;
    private string $nome;
    private string $cep;
    private string $email;
    private string $senha;

    private static int $qntUsuarios = 0;

    public function __construct(){
        self::$qntUsuarios++;
    }

    public function getNome (): string{
        return $this->nome;
    }

    public function setNome (string $nome): void{
        if(strlen($nome) > 5){
            $this->nome = $nome;
        }
    }

    public function getCep (): string{
        return $this->cep;
    }

    public function setCep (string $cep): void{
        $this->cep = $cep;
    }

    public function getEmail (): string{
        return $this->email;
    }

    public function setEmail (string $email): void{
        $this->email = $email;
    }
    
    public function getDtNascimento (): string{
        return $this->dtNascimento;
    }

    public function setDtNascimento (DateTime $dtNascimento): void{
        if(!empty($dtNascimento) && $dtNascimento->format('d-m-Y') != "00/00/0000"){
            $this->dtNascimento = $dtNascimento->format('d-m-Y');
        }
    }
    public function getSenha(): string{
        return $this->senha;
    }

    public function setSenha (string $senha): void{
        if(!empty($senha) && strlen($senha) >= 8){
            $this->senha = $senha;
        }        
    }

}