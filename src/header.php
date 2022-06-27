<?php
    session_start();

    require 'autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../assets/css/menu.css">
<link rel="stylesheet" href="../assets/css/style.css">
<title>Tudo Concurso</title>
</head>
<body>
<!--<img src="../assets/img/looding.gif" alt="loading">-->
<?php if($_SESSION['UserEmail']){?>
<nav class="navbar navbar-expand-lg navSite col-xs-12 col-sm-12 col-md-12">
    <a class="navbar-brand" href="index.php">
      <img src="../assets/img/TConcurso-News.svg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="items-menuBar nav-link" href="explorar.php">Explorar</a>
          <a class="items-menuBar nav-link" href="home.php">Meus concursos</a>
        </div>
    </div>
</nav>
<div class="display-block-navBar"></div>
<?php }?>
