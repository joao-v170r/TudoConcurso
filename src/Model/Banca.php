<?php
namespace TudoConcurso\Model;

class Banca 
{

    use AcesssoAtributos;

    private string $nome;
    private string $descricao;

    public function __construct(){
       //
    }

    public function setNome (string $nome): void{
        if(strlen($nome) < 5){
            echo "Erro in " . __METHOD__;
            return;  
        }

        $this->nome = $nome;
    }

    public function setDescricao (string $descricao): void{
        if(empty($descricao)){
            echo "Erro in " . __METHOD__;
            return;
        }
        
        $this->descricao = $descricao;
    }
    
}