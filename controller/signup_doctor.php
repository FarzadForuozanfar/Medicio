<?php
$_SESSION['location'] = 'signup_doctor';
include 'view/header.php';
include 'view/navbar.php';
include 'model/database.php';
$result = $db->query("SELECT * FROM `proficiencies`");
if($result->num_rows > 0){
    while ( $record = $result->fetch_assoc() ) {
    
        $proficiencies[] = $record;
    }
}
include 'view/signup_doctor.php';
?>
<?php unset($_SESSION['register_error']); ?>
<?php include 'view/footer.php'; ?>                        
