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
            <h2 class="title">Insira as informações da banca</h2>
            <div class="input-div one">
                <div class="div">
                    <h5>Nome da banca</h5>
                    <input type="text" name="nomeBanca" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>descrição da banca</h5>
                    <input type="text" name="descBanca" class="input">
                </div>
            </div>
            <!--<a href="#">Forgot Password?</a>-->
            <input type="submit" class="btn" name="btn" value="enviar">

        </form>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>