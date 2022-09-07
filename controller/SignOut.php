<?php 
    //session_destroy();
    unset($_SESSION['user_login']);
    header("Location:home");
?>