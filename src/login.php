<?php
    include 'header.php';

    if($_POST['btn'] == 'Login'){
        require "Controller/Usuario/logar.php";
    }
?>
<div>
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</div>
<div class="body-content">
    <img class="wave" src="../assets/img/wave.png">
    <div class="body-login-content">
        <div class="img">
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_4nkdwted.json"  background="rgba(0, 0, 0, 0)"  speed="1"  style="width: 800px; height: 800px; transform: none!important;"  loop  autoplay></lottie-player>
        </div>
        <div class="login-content">
        <form action="" method="POST" >
            <h2 class="title">Welcome</h2>
                <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input type="text" class="input" name="email" placeholder="">
                </div>
            </div>
            <input type="submit" class="btn" name="btn" value="Login">
        </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
<?php
    include 'footer.php';
?>