<?php
namespace TudoConcurso\Class;

class Concurso {
    private string $dtProva;
    private string $nome;
    private string $cep;
    private string $perfil;
    private string $tipo;
    private string $idBanca;

    public function __construct() {
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

    public function getCep (): string{
        return $this->cep;
    }

    public function setCep (string $cep): void{
        $this->cep = $cep;
    }

    public function getPerfil (): string{
        return $this->perfil;
    }

    public function setPerfil (string $perfil): void{
        $tipoConcurso = ['Judiciario', 'Adminstrativo', 'Controle', 'Segurança', 'Fiscal', 'Lesgislativa', 'Alta Gestão', 'Magistério', 'Militar', 'Bancária'];
        if(in_array($perfil, $tipoConcurso)){
            $this->perfil = $perfil;            
        }
    }
    
    public function getDtProva (): string{
        return $this->dtProva;
    }

    public function setDtProva (string $dtProva): void{
        if(!empty($dtProva) && $dtProva != "00/00/0000"){
            $this->dtProva = date('Y-m-d', strtotime($dtProva));;
        } else {
            echo "Error in " . __METHOD__ ;
            exit();
        }
    }
    public function getIdBanca(): int{
        return $this->idBanca;
    }

    public function setIdBanca (int $idBanca): void{
        if(!empty($idBanca)){
            $this->idBanca = $idBanca;
        }        
    }

    public function getTipo (): string {
        return $this->tipo;
    }

    public function setTipos (string $tipo): void{
        $listTipos = ['Distrital', 'Municipal', 'Estadual', 'Federal'];

        if(in_array($tipo, $listTipos)){
            $this->tipo = $tipo;
        }
        
    }
    

}