<?php
namespace TudoConcurso\DataBase;

use TudoConcurso\DataBase\Instancia\Conexao;
use TudoConcurso\Model\Concurso;
use TudoConcurso\Service\LinksConcurso;

use PDOException;

class ConcursoDao extends Conexao{

    public function __construct() {
        parent::setConect();  
    }    
    
    public function salvaConcurso(Concurso $objConcurso): bool{
        if(empty($objConcurso->localProva) && empty($objConcurso->perfil) && empty($objConcurso->tipo) && empty($objConcurso->dtProva)&& empty($objConcurso->idBanca)&& empty($objConcurso->ensino)&& empty($objConcurso->salario)&& empty($objConcurso->qntVagas)&& empty($objConcurso->comissao)&& empty($objConcurso->valorProva)&& empty($objConcurso->nome)){                        
            //print_r($objConcurso);
            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();        
        }
        
        $dtProva = $objConcurso->dtProva;
        $nome = $objConcurso->nome;
        $localProva = $objConcurso->localProva;
        $ensino = $objConcurso->ensino;
        $qntVagas = $objConcurso->qntVagas;
        $comissao = $objConcurso->comissao;
        $valorProva = $objConcurso->valorProva;
        $perfil = $objConcurso->perfil;
        $tipo = $objConcurso->tipo;
        $idBanca = $objConcurso->idBanca;
        $salario = $objConcurso->salario;

        try {

            $query = $this->conect->prepare('INSERT INTO tb_Concurso(dt_nacimento, de_email, de_nome, de_senha, de_cep) VALUES (:dt_nacimento, :de_email, :de_nome, :de_senha, :de_cep)');    
            $query->bindParam(':de_email', $dtProva);
            $query->bindParam(':de_nome', $nome);
            $query->bindParam(':de_senha', $localProva);
            $query->bindParam(':de_cep', $ensino);
            $query->bindParam(':dt_nacimento', $qntVagas);
            $query->bindParam(':de_cep', $comissao);
            $query->bindParam(':de_cep', $valorProva);
            $query->bindParam(':de_cep', $perfil);
            $query->bindParam(':de_cep', $tipo);
            $query->bindParam(':de_cep', $idBanca);
            $query->bindParam(':de_cep', $salario);
            $query->execute(); 

            return True;

        } catch (PDOException $erro) {

            print_r($erro);
            echo "Error in " . __METHOD__ ;
            exit();
            
        }
    }
    
    public function salvaLinksConcurso(LinksConcurso $objLinksConc): bool{
        $tipo = $objLinksConc->tipo;
        $nome = $objLinksConc->nome;
        $descricao = $objLinksConc->descricao;
        $link = $objLinksConc->link;

        if(empty($link) || empty($nome) || empty($descricao) || empty($tipo)){                        
            print_r($objLinksConc);
            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();        
        } 

        try {

            $query = $this->conect->prepare('INSERT INTO tb_links_concurso(numb_tipo, de_links, de_nome, de_senha, de_descricao) VALUES (:numb_tipo, :de_links, :de_nome, :de_senha, :de_descricao)');
            $query->bindParam(':de_links', $link);
            $query->bindParam(':de_nome', $nome);
            $query->bindParam(':de_descricao', $descricao);
            $query->bindParam(':numb_tipo', $tipo);
            $query->execute(); 

            return True;

        } catch (PDOException $erro) {

            print_r($erro);
            echo "Error in " . __METHOD__ ;

            //exit();
            
        }
    }
}
?>