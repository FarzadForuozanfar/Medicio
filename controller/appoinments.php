<?php
$_SESSION['location'] = 'appoinments';
$doctor_id = $_GET['id'];
include "model/database.php";

$doctor = $db->query("SELECT *, proficiencies.id AS proff_id FROM doctors 
                    inner join proficiencies ON proficiencies.id =  doctors.proficiency_id
                    WHERE doctors.id = $doctor_id")->fetch_assoc();
if($doctor)
{
    include "view/header.php";
    include 'view/navbar.php';
    $appoinments_list = array();
    $appoinments_table = $db->query("SELECT * FROM appointments WHERE doctor_id = $doctor_id");
    foreach($appoinments_table as $appoinment)
    {
        if($appoinment['user_id'] == $_SESSION['user_login']['id'])
            $appoinment['me'] = true;
        else
            $appoinment['me'] = false;
        $appoinments_list[] = $appoinment; 
    }
    $user_id = $_SESSION['user_login']['id'];
    $reserved_another = '<p class="text-danger">reserved</p>';
    include "view/appoiments.php";
    include 'view/footer.php';
}
else
    header("Location:notfound");
?>


