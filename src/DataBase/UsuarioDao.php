<?php
namespace TudoConcurso\DataBase;

use TudoConcurso\DataBase\Instancia\Conexao;
use TudoConcurso\Model\Usuario;

use PDOException;

class UsuarioDao extends Conexao{

    public function __construct() {
        parent::setConect();  
    }    
    
    public function salvaUsuario(Usuario $objUser): void{
        if(empty($objUser->getSenha()) && empty($objUser->getEmail()) && empty($objUser->getNome()) && empty($objUser->getCep()) && empty($objUser->getDtNascimento())){                        
            //print_r($objUser);
            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();        
        }
        
        $dtNascimento = $objUser->getDtNascimento();
        $nome = $objUser->getNome();
        $cep = $objUser->getCep();
        $email = $objUser->getEmail();
        $senha = $objUser->getSenha();

        try {

            $query = $this->conect->prepare('INSERT INTO tb_usuario(dt_nacimento, de_email, de_nome, de_senha, de_cep) VALUES (:dt_nacimento, :de_email, :de_nome, :de_senha, :de_cep)');    
            $query->bindParam(':de_email', $email);
            $query->bindParam(':de_nome', $nome);
            $query->bindParam(':de_senha', $senha);
            $query->bindParam(':de_cep', $cep);
            $query->bindParam(':dt_nacimento', $dtNascimento);
            $query->execute(); 
        } catch (PDOException $erro) {

            print_r($erro);
            echo "Error in " . __METHOD__ ;
            exit();
            
        }
    }
    
    public function incluirDadosFacultativos(int $idUser, Usuario $objUser):void{
        if(empty($objUser->getEnsino()) && empty($objUser->getSalarioEsperado())){ 

            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();

        }
        
        $ensino = $objUser->getEnsino();
        $salario = $objUser->getSalarioEsperado();
        
        try {

            $query = $this->conect->prepare('UPDATE tb_usuario SET  de_ensino = :de_ensino, de_salario_esperado = :de_salario_esperado WHERE id = :id');    
            $query->bindParam(':de_ensino', $ensino);
            $query->bindParam(':de_salario_esperado', $salario);
            $query->bindParam(':id', $idUser);
            $query->execute(); 

        } catch (PDOException $erro) {

            print_r($erro);
            echo "Error in " . __METHOD__ ;
            exit();
            
        }
    }

    public function definirConcursosInteressados(int $idUser, int $idConcurso): void{

        try {

            $query = $this->conect->prepare('INSERT INTO tb_concurso_usuario(id_usuario, id_concurso) VALUES (:id_usuario, :id_concurso)');
            $query->bindParam(':id_usuario', $idUser);
            $query->bindParam(':id_concurso', $idConcurso);
            $query->execute();

        } catch (PDOException $erro) {

            print_r($erro);
            echo "Error in " . __METHOD__ ;
            exit();
            
        }
    }
    
    public function definirPerfilUsuario(int $idUser, string $perfil): void{
        try {

            $query = $this->conect->prepare('INSERT INTO perfil_usuario(id_usuario, de_perfil) VALUES (:id_usuario, :de_perfil)');
            $query->bindParam(':id_usuario', $idUser);
            $query->bindParam(':de_perfil', $perfil);
            $query->execute(); 

        } catch (PDOException $erro) {

            print_r($erro);
            echo "Error in " . __METHOD__ ;
            exit();
            
        }
    }
    
}
?>