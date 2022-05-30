<?php
    //include 'header.php';
    include '_Class/Usuario.php';
    include '_Dao/UsuarioDao.php';
    $salve = isset($_POST['btn']) ? $_POST['btn'] : '';
    if(!empty($salve)){
        include '_Controller/Usuario/salvarUsuarioController.php';
    }
?>
<div class="body-content">
    <div class="">
        </div>
        <div class="">
        <form action="" method="post">
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="nome" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="senha" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Cep</h5>
                    <input type="text" name="cep" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Email</h5>
                    <input type="email" name="email" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <h5>Data de Nascimento</h5>
                    <input type="date" name="dtNascimento" class="input">
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