<?php
require 'conexao/Conexao.php';

class UsuariosDao {

    private object $pdo;

    public function __construct() {
        $this->pdo = Conexao::getConect();  
    }

    public function salvaUsuarios(Usuario $objUser): void{    
        $dtNascimento = $objUser->getDtNascimento();  
        $nome = $objUser->getNome();
        $cep = $objUser->getCep();
        $email = $objUser->getEmail();
        $senha = $objUser->getSenha();

        try {
            $stmt = $pdo->prepare('INSERT INTO tb_usuario(dt_nacimento, de_email, de_nome, de_senha, de_cep) VALUES (:dt_nacimento, :de_email, :de_nome, :de_senha, :de_cep)');            
            $result = $stmt->execute([':dt_nacimento' => $dtNacimento, ':de_email' => $email, ':de_nome' => $nome, ':de_senha' => $senha, ':de_cep']);
        }   catch (PDOException $erro) {
            mostraErroLog($erro, __METHOD__);
            echo "erro ao salvar";
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