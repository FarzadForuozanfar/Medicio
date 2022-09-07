<?php
$_SESSION['location'] = 'signup_user';
include 'view/header.php';
include 'view/navbar.php';
include 'view/signup_user.php';
?>
<?php unset($_SESSION['register_error']); ?>
<?php include 'view/footer.php'; ?>