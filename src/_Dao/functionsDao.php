<?php
function mostraErroLog(object $erro, string $nameFunction){

    $stringErro = $erro->getMessage();
    $file = $erro->getFile();

    echo "
    <script>
    console.log(`Messagem Erro: $stringErro`);
    console.log(`Arquivo: $file`);
    console.log(`Função que deu erro: $nameFunction`);
    </script>
    ";
}
?>