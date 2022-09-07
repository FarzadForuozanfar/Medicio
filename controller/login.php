<?php
if (isset($_POST)) {
    var_dump($_POST);
    if (!empty($_POST['typeAccount'])) {
        $type_acc = $_POST['typeAccount'];
        include "model/database.php";
        if ($type_acc == 'Doctor') // doctor login
        {
            $national_code = $_POST['nationalCode'];
            $temp_pass = $_POST['password'];
            $medic_num = $_POST['medical-number'];
            if (!empty($national_code) && !empty($temp_pass) && !empty($medic_num)) {
                $password = md5($temp_pass);
                $doctor = $db->query("SELECT *, doctors.id AS doctor_id , proficiencies.id AS prof_id FROM doctors inner join proficiencies on doctors.proficiency_id = proficiencies.id WHERE national_code = $national_code AND medical_number = $medic_num");
                if ($doctor->num_rows == 1) {
                    $doctor_login = $doctor->fetch_assoc();
                    if ($doctor_login['password'] == $password) {
                        $_SESSION['user_login'] = array();
                        foreach ($doctor_login as $key => $value) {
                            if ($key != 'id' && $key != 'password')
                                $_SESSION['user_login'][$key] = $value;
                        }
                        $_SESSION['user_login']['type'] = 'doctor';
                        $_SESSION['login_error'] = false;
                    }
                } elseif ($doctor->num_rows != 1) {
                    $_SESSION['login_error'] = true;
                    unset($_SESSION['user_login']);
                }
            }
        } 

        elseif ($type_acc == 'User') // user login
        {
            $national_code = $_POST['nationalCode'];
            $temp_pass = $_POST['password'];
            if (!empty($national_code) && !empty($temp_pass)) {
                $password = md5($temp_pass);
                $user = $db->query("SELECT * FROM users WHERE national_code = '$national_code' AND password = '$password'");
                if ($user->num_rows == 1) {
                    $user_login = $user->fetch_assoc();
                    if ($user_login['password'] == $password) {
                        $_SESSION['user_login'] = array();
                        foreach ($user_login as $key => $value) {
                            if ($key != 'password')
                                $_SESSION['user_login'][$key] = $value;
                        }
                        $_SESSION['user_login']['type'] = 'user';
                        $_SESSION['login_error'] = false;
                    }
                } elseif ($user->num_rows != 1) {
                    $_SESSION['login_error'] = true;
                    unset($_SESSION['user_login']);
                }
            }
            echo "user";
        }
    }
}
    header("Location:profile");