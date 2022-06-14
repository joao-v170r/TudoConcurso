<?php 
    

    require 'autoload.php';

    if(isset($_POST['btn'])){ 

        include 'Controller/Usuario/salvarUsuarioController.php';

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
                    <input type="text" name="nomeConcurso" class="input">
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
                    <input type="text" name="cepConcurso" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>perfil do conocurso</h5>
                    <input type="radio" name="perfil" class="input" id="perfil1">
                    <label for="perfil1">Adminstrativo</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil2">
                    <label for="perfil2">Alta Gestão</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil3">
                    <label for="perfil3">Bancária</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil4">
                    <label for="perfil4">Controle</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil5">
                    <label for="perfil5">Fiscal</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil6">
                    <label for="perfil6">Judiciario</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil7">
                    <label for="perfil7">Lesgislativa</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil8">
                    <label for="perfil8">Magistério</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil9">
                    <label for="perfil9">Militar</label><br>
                    <input type="radio" name="perfil" class="input" id="perfil10">
                    <label for="perfil10">Segurança</label><br>
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Tipo do concurso</h5>
                    <input type="radio" name="tipo" class="input" id="tipo1">
                    <label for="tipo1">Distrital</label><br>
                    <input type="radio" name="tipo" class="input" id="tipo2">
                    <label for="tipo2">Estadual</label><br>
                    <input type="radio" name="tipo" class="input" id="tipo3">
                    <label for="tipo3">Federal</label><br>
                    <input type="radio" name="tipo" class="input" id="tipo4">
                    <label for="tipo4">Municipal</label><br>
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
                    <input type="radio" name="ensino" class="input" id="ensino1">
                    <label for="ensino1">Superior completo</label><br>
                    <input type="radio" name="ensino" class="input" id="ensino2">
                    <label for="ensino2">Superior incompleto</label><br>
                    <input type="radio" name="ensino" class="input" id="ensino3">
                    <label for="ensino3">Ensino médio completo</label><br>
                    <input type="radio" name="ensino" class="input" id="ensino4">
                    <label for="ensino4">Ensino médio incompleto</label><br>
                    <input type="radio" name="ensino" class="input" id="ensino5">
                    <label for="ensino5">Ensino fundamental completo</label><br>
                    <input type="radio" name="ensino" class="input" id="ensino6">
                    <label for="ensino6">Ensino fundamental incompleto</label><br>
                </div>
            </div>  
            <div class="div">
                <h5>Estado da comissão</h5>
                <input type="radio" name="comissao" class="input" id="comissao1">
                <label for="comissao1">Formada</label><br>
                <input type="radio" name="comissao" class="input" id="comissao2">
                <label for="comissao2">A formar</label><br>
            <!--<a href="#">Forgot Password?</a>-->
            <input type="submit" class="btn" name="btn" value="enviar">

        </form>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>