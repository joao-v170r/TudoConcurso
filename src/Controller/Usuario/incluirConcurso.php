<?php
namespace TudoConcurso\Controller\Concurso;

use TudoConcurso\Model\Concurso;
use TudoConcurso\DataBase\ConcursoDao;

$objConcurso = new Concurso();
$objConcursoDao = new ConcursoDao();

$dtProva = isset($_POST['dtProva']) ? addslashes($_POST['dtProva']) : '';
$nome = isset($_POST['nome']) ? addslashes($_POST['nome']) : '';
$localProva = isset($_POST['localProva']) ?  addslashes($_POST['localProva']) : '';
$perfil = isset($_POST['perfil']) ? addslashes($_POST['perfil']) : '';
$tipo = isset($_POST['tipo']) ? addslashes($_POST['tipo']) : '';
$idBanca = isset($_POST['idBanca']) ? addslashes($_POST['idBanca']) : '';
$ensino = isset($_POST['ensino']) ? addslashes($_POST['ensino']) : '';
$salario = isset($_POST['salario']) ? addslashes($_POST['salario']) : '';
$qntVagas = isset($_POST['qntVagas']) ? addslashes($_POST['qntVagas']) : '';
$comissao = isset($_POST['comissao']) ? addslashes($_POST['comissao']) : '';
$valorProva = isset($_POST['valorProva']) ? addslashes($_POST['valorProva']) : '';

 $objConcurso->nome = $nome;
 $objConcurso->localProva = $localProva;
 $objConcurso->perfil = $perfil;
 $objConcurso->tipo = $tipo;
 $objConcurso->idBanca = $idBanca;     
 $objConcurso->ensino = $ensino;
 $objConcurso->salario = $salario;
 $objConcurso->qntVagas = $qntVagas;
 $objConcurso->comissao = $comissao;
 $objConcurso->valorProva = $valorProva;
 $objConcurso->dtProva = $dtProva;
           
 
 $objConcursoDao->salvaUsuario($objConcurso);
 

?>