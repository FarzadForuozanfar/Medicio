<?php 
    if(!empty($_POST['user_id'] && $_POST['doctor_id'] && $_POST['day'] && $_POST['time']))
    {
        $user_id = $_POST['user_id'];
        $doctor_id = $_POST['doctor_id'];
        $day = $_POST['day']; 
        $time = $_POST['time'];
        include 'model/database.php';
        $exists = $db->query("SELECT * FROM appointments WHERE doctor_id = $doctor_id AND day = '$day' AND time = '$time'");
        if($exists->num_rows > 0)
        {
            $appo = $exists->fetch_assoc();
            $appo_id = $appo['id'];
            if($appo['action'] == 0)
            {
                $db->query("UPDATE appointments SET user_id = '$user_id', action = 1 WHERE id = $appo_id");
                echo $db->error;
            }
            elseif($appo['action'] == 1)
            {
                $db->query("UPDATE appointments SET user_id = null , action = 0 WHERE id = $appo_id");
                echo $db->error;
            }    
        }
        else
        {
            echo "ERROR: there is no appointment available";
        }
    }
    else
        echo "ERROR: invalid appointment data";
?>