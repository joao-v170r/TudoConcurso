<?php
namespace TudoConcurso\Model;

class Concurso {

    use AcesssoAtributos;

    private string $dtProva;
    private string $nome;
    private string $localProva;
    private string $perfil;
    private string $tipo;
    private int $idBanca;
    private string $ensino;
    private float $salario;
    private int $qntVagas;
    private string $comissao;
    private float $valorProva;

    public function __construct() {
        //
    }

    public function setNome (string $nome): void{
        if(strlen($nome) > 5){
            $this->nome = $nome;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        } 
    }

    public function setLocalProva (string $localProva): void{
        
        if(empty($localProva)){
            $this->localProva = $localProva;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        } 
    }

    public function setPerfil (string $perfil): void{
        $tipoConcurso = ['Judiciario', 'Adminstrativo', 'Controle', 'Segurança', 'Fiscal', 'Lesgislativa', 'Alta Gestão', 'Magistério', 'Militar', 'Bancária'];
        if(in_array($perfil, $tipoConcurso)){
            $this->perfil = $perfil;            
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        } 
    }
    
    public function setDtProva (string $dtProva): void{
        if(!empty($dtProva) && $dtProva != "00/00/0000"){
            $this->dtProva = date('Y-m-d', strtotime($dtProva));;
        } else {
            echo "Error in " . __METHOD__ ;
            exit();
        }
    }

    public function setIdBanca (int $idBanca): void{
        if(!empty($idBanca)){
            $this->idBanca = $idBanca;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }      
    }

    public function setTipos (string $tipo): void{
        $listTipos = ['Distrital', 'Municipal', 'Estadual', 'Federal'];

        if(in_array($tipo, $listTipos)){
            $this->tipo = $tipo;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        } 
        
    }
    

}