<?php
    $_SESSION['location'] = "appoimentsList";
    include "model/database.php";
    $doctor_id = $_SESSION['user_login']['doctor_id'];
    $appoinments_list = $db->query("SELECT *, users.id AS id_user ,appointments.id AS appo_id FROM appointments
                                    LEFT JOIN users ON users.id = appointments.user_id
                                     WHERE doctor_id = $doctor_id");
    $reserved = '<td class=" text-success">reserved</td>';
    $notreserved = '<td class=" text-danger">not reserved</td>';
    include "view/header.php";
    include "view/navbar.php";
    include "view/profile_doctor.php";
?>

<?php include "view/footer.php";?>