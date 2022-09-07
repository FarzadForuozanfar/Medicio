<?php
if (isset($_POST)) {
    if (!empty($_POST['full-name']) && !empty($_POST['phone']) && !empty($_POST['gender'])) {

        $full_name = $_POST['full-name'];
        $phone = $_POST['phone'];
        
        if($_POST['gender'] == 'male')
            $gender = 1;

        elseif($_POST['gender'] == 'female')
            $gender = 0;
        
        include "model/database.php";
        $user_id = $_SESSION['user_login']['id'];
        if(isset($gender))        
        {
            $db->query("UPDATE users SET name = '$full_name', phone = '$phone', gender = $gender WHERE id = '$user_id'");
            if($db->error)
                echo $db->error;
            
            $_SESSION['user_login']['name'] = $full_name;
            $_SESSION['user_login']['phone'] = $phone;
            $_SESSION['user_login']['gender'] = "$gender";
            var_dump($_SESSION['user_login'],$gender);
            header("Location:profile");
        }
        else
        {
            $db->query("UPDATE users SET name = '$full_name', phone = '$phone' WHERE id = '$user_id'");
            if($db->error)
                echo $db->error;   
            
            $_SESSION['user_login']['name'] = $full_name;
            $_SESSION['user_login']['phone'] = $phone;
        }
        header("Location:profile");
    } 
    elseif (isset($_SESSION['user_login'])) 
    {
        header("Location:profile");
    } 
    else
        header("Location:home");
} 
elseif (isset($_SESSION['user_login'])) 
{
    header("Location:profile");
} 
else
    header("Location:home");

