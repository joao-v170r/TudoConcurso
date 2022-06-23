<<<<<<< HEAD
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
 

=======
<?php
namespace TudoConcurso\Controller\Questionario;

    $questaoA = isset($_POST['questao1']) ? $_POST['questao1'] : '';
    $questaoB = isset($_POST['questao2']) ? $_POST['questao2'] : '';
    $questaoC = isset($_POST['questao3']) ? $_POST['questao3'] : '';
    $questaoD = isset($_POST['questao4']) ? $_POST['questao4'] : '';
    $questaoE = isset($_POST['questao5']) ? $_POST['questao5'] : '';
    $questaoF = isset($_POST['questao6']) ? $_POST['questao6'] : '';
    $questaoG = isset($_POST['questao7']) ? $_POST['questao7'] : '';
    $questaoH = isset($_POST['questao8']) ? $_POST['questao8'] : '';
    $questaoI = isset($_POST['questao9']) ? $_POST['questao9'] : '';
    $questaoJ = isset($_POST['questao10']) ? $_POST['questao10'] : '';
    $questaoK = isset($_POST['questao11']) ? $_POST['questao11'] : '';


>>>>>>> 5f2b66ef90e01cf0180a1b9a9d5535bad80b84af
?>