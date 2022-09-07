<?php 
    if(isset($_POST))
    {   
        $_SESSION['update_profile_error'] = array();
        foreach($_POST as $key => $value)
        {
            if(empty($value))
                $_SESSION['update_profile_error'][$key] = $key."is required"; 
        }
        var_dump($_SESSION);
        if(empty($_SESSION['update_profile_error']))
        {
            include 'model/database.php';
            $name = $_POST['name'];
            $bio = $_POST['bio'];
            $exp = $_POST['exp'];
            $phone = $_POST['phone'];
            $doctor_id = $_SESSION['user_login']['doctor_id'];
            if(!empty($_FILES['profile']['name']))
            {
                $img = $_FILES['profile'];
                $date = date("Y-m-d H:i:s");
                $date = str_replace(':', '-', $date);
                $path = "view/assets/img/doctors/".$date.$img['name'];
                echo $path;
                $db->query("UPDATE doctors SET name = '$name' , phone = '$phone', bio = '$bio', experiance = '$exp' , image = '$path' WHERE id = $doctor_id ");
                if($db->error)
                    echo "Error: ".$db->error;
                else
                    {
                        $_SESSION['user_login']['name'] = $name;
                        $_SESSION['user_login']['experiance'] = $exp;
                        $_SESSION['user_login']['phone'] = $phone;
                        $_SESSION['user_login']['image'] = $path;
                        $_SESSION['user_login']['bio'] = $bio;
                        move_uploaded_file($img['tmp_name'], $path);
                        header("Location:EditProfile");

                    }
            }
            else
            {
                $db->query("UPDATE doctors SET name = '$name' , phone = '$phone', bio = '$bio', experiance = '$exp' WHERE id = $doctor_id ");
                if($db->error)
                    echo "Error: ".$db->error;
                else
                {
                    $_SESSION['user_login']['name'] = $name;
                        $_SESSION['user_login']['experiance'] = $exp;
                        $_SESSION['user_login']['phone'] = $phone;
                        $_SESSION['user_login']['image'] = $path;
                        $_SESSION['user_login']['bio'] = $bio;
                        header("Location:EditProfile");

                }
                    header("Location:EditProfile");
            }
        }
    }
?>
