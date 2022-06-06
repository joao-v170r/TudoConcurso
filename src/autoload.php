<?php
spl_autoload_register(function (string $caminho) {
    
    $caminhoFisico = str_replace("TudoConcurso", __DIR__ , $caminho);
    $caminhoFisico = str_replace("\\", DIRECTORY_SEPARATOR, $caminhoFisico);
    $caminhoFisico .= '.php';

    if(file_exists($caminhoFisico)){
        require_once $caminhoFisico;
    }
})
?>
