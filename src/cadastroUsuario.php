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
        <form action="" method="post" id="formCadastro">
            <h2 class="title-gradient">Welcome</h2>
            <div class="">
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="nome" class="input"  placeholder="" required>
                    <span class="display-off" id="msgNome">Ops! Nome esta muito pequeno!</span>
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="senha" class="input" required>
                    <span class="display-off" id="msgSenha">Ops! Senha esta muito pequena!</span>
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Cep</h5>
                    <input type="text" name="cep" class="input" required>
                    <span class="display-off" id="msgCep">Ops! Cep esta incorreto, Exemplo 01234-567</span>
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Email</h5>
                    <input type="email" name="email" class="input" required>
                    <span class="display-off" id="msgEmail">Ops! Email invalido!</span>
                </div>
            </div>
            <div class="">
                <div class="div">
                    <h5>Data de Nascimento</h5>
                    <input type="date" name="dtNascimento" class="input" required>
                    <span class="display-off" id="msgDataNascimento"> Ops! Data de nascimento invalida</span> 
                </div>
            </div>
            <!--<a href="#">Forgot Password?</a>-->
            <input type="submit" class="btn" name="btn" value="enviar" required>

        </form>
        </div>
    </div>
</div>
<script src="../assets/js/validaCadastro.js"></script>
<?php
    include 'footer.php';
?>