<?php
namespace TudoConcurso\Controller\Usuario;

use TudoConcurso\Model\Usuario;
use TudoConcurso\DataBase\UsuarioDao;

$objUser = new Usuario();
$objUserDao = new UsuarioDao();

$email = isset($_POST['email']) ? addslashes($_POST['email']) : '';
$senha = isset($_POST['senha']) ? addslashes($_POST['senha']) : '12345678';

$objUser->email = $email;
$objUser->senha = $senha;

if($objUserDao->validaUsuario($objUser)){
    $_SESSION['UserEmail'] = $objUser->email;
    $_SESSION['Acesso'] = 1;

    echo "<script> window.location.href = 'index.php'; </script> ";

    exit();

} else {
    echo " <script> alert('Ops, Email Invalido'); </script> ";
}
?>
