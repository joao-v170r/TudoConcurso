<?php
namespace TudoConcurso\Controller\Usuario;

use TudoConcurso\Model\Usuario;
use TudoConcurso\DataBase\UsuarioDao;

$objUser = new Usuario();
$objUserDao = new UsuarioDao();

$dadosUsuario = ['de_ensino', 'de_salario_esperado'];
$dadosUserConcurso = [];

$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$idUsuario = $_POST['idUser'];
 
 $objUser->nome = $nome;
 $objUser->setCep($cep);

 
 //print_r($objUser);
 $objUserDao->salvaUsuario($objUser);
 
 
?>