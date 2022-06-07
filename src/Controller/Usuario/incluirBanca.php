<?php
namespace TudoConcurso\Controller\Banca;

use TudoConcurso\Model\Banca;
use TudoConcurso\DataBase\BancaDao;

$objBanca = new Banca();
$objBancaDao = new UsuarioDao();


$nome = isset($_POST['nome']) ? addslashes($_POST['nome']) : '';
$descricao = isset($_POST['descricao']) ?  addslashes($_POST['descricao']) : '';


 
 $objBanca->nome = $nome;
 $objBanca->descricao = $descricao;
 
 
 $objBancaDao->salvaUsuario($objBanca);
 

?>