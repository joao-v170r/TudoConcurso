<?php
namespace TudoConcurso\Class;

class Banca {
    private string $nome;
    private string $descricao;

    public function __construct(){
       //
    }

    public function getNome (): string{
        return $this->nome;
    }

    public function setNome (string $nome): void{
        if(strlen($nome) > 5){
            $this->nome = $nome;
        }
    }

    public function getDescricao (): string{
        return $this->descricao;
    }

    public function setDescricao (string $descricao): void{
        $this->descricao = $descricao;
    }
    
}