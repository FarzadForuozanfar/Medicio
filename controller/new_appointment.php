<?php 
    if(!empty($_POST['day']) && !empty($_POST['time']))
    {
        switch($_POST['day'])
        {
            case("1"):
                $day = "Saturday";
                break;
            case("2"):
                $day = "Sunday";
                break;
            case("3"):
                $day = "Monday";
                break;
            case("4"):
                $day = "Tuesday";
                break;

            case("5"):
                $day = "Wednesday";
                break;

            case("6"):
                $day = "Thursday";
                break;

            case("7"):
                $day = "Friday";
                break;

            default:
                $day = null;
                break;

        }

        $time = $_POST['time'];
        var_dump($day,$time);
        if($day)
        {
            $doctor_id = $_SESSION['user_login']['doctor_id'];
            include 'model/database.php';
            var_dump($db->query("INSERT INTO appointments(doctor_id, day, time, action) VALUES ('$doctor_id', '$day', '$time', 0)"));
            if($db->error)
                echo $db->error;
        }
    }
    header("Location:appoimentsList");
