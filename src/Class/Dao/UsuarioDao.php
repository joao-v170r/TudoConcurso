<?php
namespace TudoConcurso\Class\Dao;

use TudoConcurso\Class\Usuario;
use TudoConcurso\Class\Dao\Instancia\Conexao;

class UsuarioDao {

    private object $pdo;

    public function __construct() {
        $this->pdo = Conexao::getConect();  
    }
    
    
    public function salvaUsuario(Usuario $objUser): void{           
        if(empty($objUser->getSenha()) && empty($objUser->getEmail()) && empty($objUser->getNome()) && empty($objUser->getCep()) && empty($objUser->getDtNascimento())){                        
            print_r($objUser);
            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();        
        } 
        
        $dtNascimento = $objUser->getDtNascimento();
        $nome = $objUser->getNome();
        $cep = $objUser->getCep();
        $email = $objUser->getEmail();
        $senha = $objUser->getSenha();

        try {

            $query = $this->pdo->prepare('INSERT INTO tb_usuario(dt_nacimento, de_email, de_nome, de_senha, de_cep) VALUES (:dt_nacimento, :de_email, :de_nome, :de_senha, :de_cep)');    
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
    /*
    public static function getAllUsuarios() {

    }

   

    public function deletarUsuario(int $idUser): void{

    }

    public function consultaUsuarios(int $idUser): Usuario{
        
    }

    public function alterarUsuarios(int $idUser, array $campos, array $values): void{
        
    }
    */
}
?>