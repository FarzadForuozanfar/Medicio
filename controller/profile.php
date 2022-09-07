<?php
    if(empty($_SESSION['user_login']))
        header("Location:home");

    elseif(isset(($_SESSION['user_login'])) && ($_SESSION['user_login']['type'] == 'doctor'))
    {
        $_SESSION['location'] = 'profile';
        include 'view/header.php';
        include 'view/navbar.php';
        include 'view/profile_doctor.php';
        include 'view/footer.php';
    }

    elseif(isset(($_SESSION['user_login'])) && ($_SESSION['user_login']['type'] == 'user'))
    {
        $_SESSION['location'] = 'profile';
        include 'view/header.php';
        include 'view/navbar.php';
        include 'view/profile_user.php';
        include 'view/footer.php';
    }
?>