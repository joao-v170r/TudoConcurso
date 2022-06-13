<?php
namespace TudoConcurso\Controller\Usuario;

use TudoConcurso\Model\Usuario;
use TudoConcurso\DataBase\UsuarioDao;

$objUser = new Usuario();
$objUserDao = new UsuarioDao();

$dtNascimento = isset($_POST['dtNascimento']) ? addslashes($_POST['dtNascimento']) : '';
$nome = isset($_POST['nome']) ? addslashes($_POST['nome']) : '';
$cep = isset($_POST['cep']) ?  addslashes($_POST['cep']) : '';
$email = isset($_POST['email']) ? addslashes($_POST['email']) : '';
$senha = isset($_POST['senha']) ? addslashes($_POST['senha']) : '';

 
$objUser->nome = $nome;
$objUser->cep = $cep;
$objUser->email = $email;
$objUser->dtNascimento = $dtNascimento;
$objUser->senha = $senha;        
           
 //print_r($objUser);
 $objUserDao->salvaUsuario($objUser);
 

?>