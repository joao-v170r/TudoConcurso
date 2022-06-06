<?php
namespace TudoConcurso\DataBase;

use TudoConcurso\DataBase\Instancia\Conexao;
use TudoConcurso\Model\Usuario;
use TudoConcurso\Service\InteresaUser;

use PDOException;

class UsuarioDao extends Conexao{

    public function __construct() {
        parent::setConect();  
    }    
    
    public function salvaUsuario(Usuario $objUser): void{
        if(empty($objUser->senha) && empty($objUser->email) && empty($objUser->nome) && empty($objUser->cep) && empty($objUser->dtNascimento)){                        
            //print_r($objUser);
            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();        
        }
        
        $dtNascimento = $objUser->dtNascimento;
        $nome = $objUser->nome;
        $cep = $objUser->cep;
        $email = $objUser->email;
        $senha = $objUser->senha;

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
        if(empty($objUser->ensino) && empty($objUser->salarioEsperado)){ 

            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();

        }
        
        $ensino = $objUser->ensino;
        $salario = $objUser->salarioEsperado;
        
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

    public function definirConcursosInteressados(InteresaUser $obj): void{
        if(empty($obj->idUsuarios) && empty($obj->idConcurso) && empty($obj->usuarioIncrito) && empty($obj->statusConcurso)){
            echo "Error in " . __METHOD__ . "Dados vazios";    
            exit();

        }

        $idUsuario = $obj->idUsuario;
        $idConcurso = $obj->idConcurso;
        $usuarioIncrito = $obj->usuarioIncrito == 0? NULL : $obj->usuarioIncrito;
        $statusConcurso = $obj->statusConcurso == 0? NULL : $obj->statusConcurso;
            
        try {

            $query = $this->conect->prepare('INSERT INTO tb_concurso_usuario(id_usuario, id_concurso) VALUES (:id_usuario, :id_concurso)');
            $query->bindParam(':id_usuario', $idUsuario);
            $query->bindParam(':id_concurso', $idConcurso);
            $query->bindParam(':id_concurso', $usuarioIncrito);
            $query->bindParam(':id_concurso', $statusConcurso);
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