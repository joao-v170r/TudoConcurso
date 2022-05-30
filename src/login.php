<?php
    include 'header.php';
?>
<div>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</div>
<div class="body-content">
    <img class="wave" src="../assets/img/wave.png">
    <div class="container">
        <div class="img">
        <img src="../assets/img/bg.svg">
        </div>
        <div class="login-content">
        <form action="index.html">
            <img src="../assets/img/avatar.svg">
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
            <div class="i">
                <i class="fas fa-user"></i>
            </div>
            <div class="div">
                <h5>Username</h5>
                <input type="text" class="input">
            </div>
            </div>
            <div class="input-div pass">
            <div class="i"> 
                <i class="fas fa-lock"></i>
            </div>
            <div class="div">
                <h5>Password</h5>
                <input type="password" class="input">
            </div>
            </div>
            <a href="#">Forgot Password?</a>
            <input type="submit" class="btn" value="Login">
        </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
<?php
    include 'footer.php';
?>