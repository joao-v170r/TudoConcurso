<?php
namespace TudoConcurso\Controller\Concurso;

use TudoConcurso\Service\LinksConcurso;
use TudoConcurso\DataBase\ConcursoDao;

$objLinkCon = new LinksConcurso();
$objConcurso = new ConcursoDao();

$tipoLink = isset($_POST['tipo']) ? addslashes($_POST['tipo']) : '';
$nome = isset($_POST['nome']) ? addslashes($_POST['nome']) : '';
$descricao = isset($_POST['descricao']) ?  addslashes($_POST['descricao']) : '';
$link = isset($_POST['link']) ? addslashes($_POST['link']) : '';

$objLinkCon->tipo = $tipoLink;
$objLinkCon->nome = $nome;
$objLinkCon->descricao = $descricao;
$objLinkCon->link = $link;        

$objConcurso->salvaLinksConcurso($objLinkCon);

?>
