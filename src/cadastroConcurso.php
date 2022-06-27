<?php 
    
    require 'header.php';

    $tiposPerfil = [ 1 => 'Judiciario', 'Adminstrativo', 'Controle', 'Segurança', 'Fiscal', 'Lesgislativa', 'Alto Gestão', 'Magistério', 'Militar', 'Bancária'];
    $tipoConcurso = [ 1 => 'distrital', 'municipal', 'estadual', 'federal'];
    $arrayComissao = [1 => 'Formada', 'Em formação'];
    $escolaridade = ['Superior', 'Ensino médio', 'Ensino fundamental'];

    if(isset($_POST['btn'])){ 

        include 'Controller/Concurso/incluirConcurso.php';

    }
?>
<div class="body-content">
    <div class="">
        </div>
        <div class="">
        <form action="" method="post">
            <h2 class="title">Insira as informações do concurso</h2>
            <div class="input-div one">
                <div class="div">
                    <h5>Nome do Concurso</h5>
                    <input type="text" name="nomeConcurso" class="input" >
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>id da banca</h5>
                    <input type="text" name="idBanca" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Cep do local da prova</h5>
                    <input type="text" name="localProva" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>perfil do concurso</h5>
                    <select class="form-select" aria-label="Default select example" name="perfil" >
                        <option selected>Perfil Concurso</option>
                        <?php foreach ($tiposPerfil as $key => $perfil) {?>
                        <option value="<?=$key?>"><?=$perfil?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Tipo do concurso</h5>
                    <select class="form-select" aria-label="Default select example" name="tipo" >
                        <option selected>Tipo do Concurso</option>
                        <?php foreach ($tipoConcurso as $key => $tipo) {?>
                        <option value="<?=$key?>"><?=$tipo?></option>
                        <?php }?>
                    </select>
                </div>
            </div>  
            <div class="input-div pass">
                <div class="div">
                    <h5>Data da prova</h5>
                    <input type="date" name="dtProva" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="div">
                    <h5>Salário do cargo do concurso</h5>
                    <input type="text" name="salario" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="div">
                    <h5>Quantidade de vagas</h5>
                    <input type="text" name="qntVagas" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="div">
                    <h5>Custo de inscrição</h5>
                    <input type="text" name="valorProva" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Escolaridade</h5>
                    <select class="form-select" aria-label="Default select example" name="ensino" >
                        <option selected>Escolaridade</option>
                        <?php 
                        foreach ($escolaridade as $ensino) {
                            foreach (['C' => 'completo', 'I' => 'incompleto'] as $nivel) {
                        ?>
                        <option value="<?=$ensino.$nivel?>"><?=$ensino . " ". $nivel?></option>
                        <?php   } 
                        }
                        ?>
                    </select>
                </div>
            </div>  
            <div class="input-div pass">
                <div class="div">
                    <h5>Estado da comissão</h5>
                    <select class="form-select" aria-label="Default select example" name="comissao" >
                        <option selected>Comissão</option>
                        <?php foreach ($arrayComissao as $key => $comissao) {?>
                        <option for="comissao<?=$key?>" value="<?=$key?>"><?=$comissao?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn" name="btn" value="enviar">

        </form>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>