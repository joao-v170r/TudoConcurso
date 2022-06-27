<?php

if(isset($_SESSION['UserEmail'])){

    echo "<script> window.location.href = 'login.php'; </script> ";

    exit();
}

