<?php
    
    include 'header.php';    
        
    if(isset($_POST['btn'])){
        require "Controller/Usuario/incluirUsuario.php";
    }
        
?>
<div class="body-content">
    <div class="">
        </div>
        <div class="">
        <form action="" method="post">
            <h2 class="title-gradient">Welcome</h2>
            <div class="">
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="nome" class="input">
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="senha" class="input">
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Cep</h5>
                    <input type="text" name="cep" class="input">
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Email</h5>
                    <input type="email" name="email" class="input">
                </div>
            </div>
            <div class="">
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