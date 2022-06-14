<?php
    
    include 'header.php';    
     
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
                        <option value="1">Edital</option>
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
            <input type="submit" class="btn" name="btn" value="enviar">
        </form>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>