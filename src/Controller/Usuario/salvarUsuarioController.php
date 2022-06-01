<?php
use TudoConcurso\Class\Usuario;
use TudoConcurso\Class\Dao\UsuarioDao;

$objUser = new Usuario();
$objUserDao = new UsuarioDao();

$dtNascimento = isset($_POST['dtNascimento']) ? $_POST['dtNascimento'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cep = isset($_POST['cep']) ?  $_POST['cep'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

 
 $objUser->setNome($nome);
 $objUser->setCep($cep);
 $objUser->setEmail($email);
 $objUser->setDtNascimento($dtNascimento);
 $objUser->setSenha($senha);        
           
 //print_r($objUser);
 $objUserDao->salvaUsuario($objUser);
 
?>