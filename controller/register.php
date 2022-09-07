<?php
$date = date("Y-m-d H:i:s");
$date = str_replace(':', '-', $date);
if (isset($_POST['type'])) {
    if ($_POST['type'] == 'user') {
        if (!empty($_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['national_code']) && !empty($_POST['gender']) && !empty($_POST['phone'])) {
            $password = md5($_POST['password']);
            $name = $_POST['first_name'] . " " . $_POST['last_name'];
            $phone = $_POST['phone'];
            $national_code = $_POST['national_code'];
            if ($_POST['gender'] == '1')
                $gender = 1;
            else
                $gender = 0;
            include 'model/database.php';
            $db->query("INSERT INTO users(name, password, gender, national_code,phone) VALUES ('$name', '$password', $gender, '$national_code', '$phone')");
            if ($db->error) //unsuccess
            {

                $_SESSION['register_error'] = "There is a problem, please fill all the fields correctly";
                header("Location:signup_user");
            } else //register success
            {
                $user = $db->query("SELECT * FROM users WHERE national_code = '$national_code'")->fetch_assoc();
                $_SESSION['user_login'] = array();
                $_SESSION['register_status'] = "Success";
                foreach ($user as $key => $value) {
                    if ($key != 'password')
                        $_SESSION['user_login'][$key] = $value;
                }
                $_SESSION['user_login']['type'] = 'user';
            }
        } else {
            $_SESSION['register_error'] = "Please fill all required fields";
            header("Location:signup_user");
        }
    } elseif ($_POST['type'] == 'doctor') {
        unset($_SESSION['register_error']);
        $_SESSION['register_error'] = array();
        foreach ($_POST as $key => $value) {
            if ($key != 'bio')
                if (empty($value))
                    $_SESSION['register_error'][] = $key . " is required";
        }

        if ($_POST['password'] != $_POST['confirmPassword'])
            $_SESSION['register_error'][] = "Mismatch between password fields";

        else {
            unset($_SESSION['register_status']);
            unset($_SESSION['register_error']);
            $_SESSION['register_error'] = array();
            $password = md5($_POST['password']);
            $name = $_POST['first_name'] . " " . $_POST['last_name'];
            $phone = $_POST['phone'];
            $national_code = $_POST['national_code'];

            include 'model/database.php';
            $medical_number = $_POST['medical_number'];
            $invalid_national_code = $db->query("SELECT * FROM doctors WHERE national_code = '$national_code'")->num_rows;
            if ($invalid_national_code > 0)
                $_SESSION['register_error'][] = "This national code is used to register";

            
            $invalid_medic_num = $db->query("SELECT * FROM doctor WHERE medical_number = '$medical_number'")->num_rows;
            if ($invalid_medic_num > 0)
                $_SESSION['register_error'][] = "This medical number is used and invalid";

            if ($_POST['gender'] == '1')
                $gender = 1;
            else
                $gender = 0;

            $bio = $_POST['bio'];
            $exp = $_POST['experiance'];
            $prof = $_POST['proficiency'];
            if ($_SESSION['register_error'])
                header("Location:signup_doctor");
            else {
                if ($_FILES['profile']['name']) {
                    
                    $path = "view/assets/img/doctors/" . $date . $_FILES['profile']['name'];
                    move_uploaded_file($_FILES['profile']['tmp_name'], $path);
                    $db->query("INSERT INTO doctors(name, proficiency_id, national_code, password, image, gender, phone, experiance, medical_number, bio) 
                                VALUES('$name', '$prof', '$national_code', '$password', '$path', $gender, '$phone', $exp, '$medical_number', '$bio')");
                    if ($db->error)
                        echo $db->error;
                    else {
                        unset($_SESSION['user_login']);
                        $doctor = $db->query("SELECT *, doctors.id AS doctor_id , proficiencies.id AS proff_id FROM doctors INNER JOIN proficiencies ON proficiencies.id = doctors.proficiency_id WHERE medical_number = '$medical_number'")->fetch_assoc();
                        $_SESSION['user_login'] = array();
                        foreach ($doctor as $key => $value) {
                            if ($key != 'password' && $key != 'id')
                                $_SESSION['user_login'][$key] = $value;
                        }
                        $_SESSION['register_status'] = "Success";
                        $_SESSION['user_login']['type'] = 'doctor';
                    }
                } else {
                    if($gender == 1)
                        $img = 'male.png';
                    else
                        $img = 'female.png';

                    $path = "view/assets/img/doctors/".$img;
                    $db->query("INSERT INTO doctors(name, proficiency_id, national_code, password, image, gender, phone, experiance, medical_number, bio) 
                    VALUES('$name', '$prof', '$national_code', '$password', '$path', $gender, '$phone', $exp, '$medical_number', '$bio')");
                    if ($db->error)
                        echo $db->error;
                    else {
                        unset($_SESSION['user_login']);
                        $doctor = $db->query("SELECT *, doctors.id AS doctor_id , proficiencies.id AS proff_id FROM doctors INNER JOIN proficiencies ON proficiencies.id = doctors.proficiency_id WHERE medical_number = '$medical_number'")->fetch_assoc();
                        $_SESSION['user_login'] = array();
                        foreach ($doctor as $key => $value) {
                            if ($key != 'password' && $key != 'id')
                                $_SESSION['user_login'][$key] = $value;
                        }
                        $_SESSION['register_status'] = "Success";
                        $_SESSION['user_login']['type'] = 'doctor';
                    }
                }
            }
        }
    }
}

header("Location:home#services");
