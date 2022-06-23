<?php
namespace TudoConcurso\Controller\Usuario;

$questaoA = isset($_POST['questao1']) ? $_POST['questao1'] : '';
$questaoB = isset($_POST['questao2']) ? $_POST['questao2'] : '';
$questaoC = isset($_POST['questao3']) ? $_POST['questao3'] : '';

 $objUser->nome = $nome;
 $objUser->cep = $cep;
 $objUser->email = $email;
 $objUser->dtNascimento = $dtNascimento;
 $objUser->senha = $senha;                 
 
 $objUserDao->salvaUsuario($objUser);
 

?>