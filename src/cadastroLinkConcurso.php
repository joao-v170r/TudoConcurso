<?php
    
    include 'header.php';    
    
    $tiposPerfil = [ 1 => 'Judiciario', 2 => 'Adminstrativo', 3 => 'Controle', 4 => 'Segurança', 5 => 'Fiscal', 6 => 'Lesgislativa', 7 => 'Alto Gestão', 8 => 'Magistério', 9 => 'Militar', 10 => 'Bancária'];

    if(isset($_POST["btn"])){
        require "Controller/Concurso/incluirLinksConcurso.php";
    }
?>
<div class="body-content">
    <div class="">
        </div>
        <div class="">
        <form action="" method="post">
            <div class="">
                <div class="div">
                    <h5>Tipo Link</h5>
                    <select class="form-select" aria-label="Default select example" name="tipo" >
                        <option selected>Categoria do Link</option>
                        <option value="1">Concurso Aberto</option>
                        <option value="2">Video</option>
                        <option value="3">Noticia</option>
                    </select>
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Name Links (sobre o que se trata)</h5>
                    <input type="text" name="nome" class="input">
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Descrição</h5>
                    <input type="text" name="descricao" class="input">
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Link</h5>   
                    <input type="text" name="link" class="input">
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>perfil do concurso</h5>
                    <select class="form-select" aria-label="Default select example" name="tipo" >
                        <option selected>Categoria do Link</option>
                        <?php foreach ($tiposPerfil as $key => $perfil) {?>
                        <option value="<?=$key?>"><?=$perfil?></option>
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