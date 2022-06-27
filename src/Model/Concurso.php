<?php
namespace TudoConcurso\Model;

class Concurso 
{

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
    
    private static array $perfisConcurso = [ 1 => 'Judiciario', 'Adminstrativo', 'Controle', 'Segurança', 'Fiscal', 'Lesgislativa', 'Alta Gestão', 'Magistério', 'Militar', 'Bancária'];

    private static array $tipoConcurso = [1 => 'Distrital', 'Municipal', 'Estadual', 'Federal'];

    public function __construct() {
        //
    }

    public function setNome (string $nome): void{
        if(strlen($nome) < 5){
            echo "Error in " . __METHOD__ ;
            return;
        } 

        $this->nome = $nome;
    }

    public function setLocalProva (string $localProva): void{
        
        if(strlen($localProva) != 9){
            echo "Error in " . __METHOD__ ;
            return;
        }

        $this->localProva = $localProva;
       
    }

    public function setPerfil (int $perfil): void{
        
        if(!array_key_exists($perfil, self::$perfisConcurso)){
            echo "Erro in " . __METHOD__;
            return;       
        } 

        $this->perfil = $perfil;   
    }
    
    public function setDtProva (string $dtProva): void{
        if(empty($dtProva) && $dtProva == "00/00/0000"){
            echo "Error in " . __METHOD__ ;
            exit();            
        } 

        $this->dtProva = date('Y-m-d', strtotime($dtProva));;
    }

    public function setIdBanca (int $idBanca): void{
        if(empty($idBanca)){
            echo "Error in " . __METHOD__ ;
            return;            
        }      

        $this->idBanca = $idBanca;
    }

    public function setTipos (int $tipo): void{

        if(!array_key_exists($tipo, self::$tipoConcurso)){
            echo "Error in " . __METHOD__ ;
            return;
        } 
        
        $this->tipo = $tipo;
        
    }
    

}