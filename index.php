<?php
    session_start();
    date_default_timezone_set("Asia/Tehran");
    $request = $_SERVER["REQUEST_URI"];

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else
    {
        $id = '';
    }

    switch($request)
    {
        case("/Medicio/"):
        case("/Medicio"):
        case("/Medicio/index"):
        case("/Medicio/home"):
            require __DIR__."/controller/index.php";
            break;

        case("/Medicio/login"):
            require __DIR__."/controller/login.php";
            break;
        
        case("/Medicio/signup_user"):
            require __DIR__."/controller/signup_user.php";
            break;

        case("/Medicio/signup_doctor"):
            require __DIR__."/controller/signup_doctor.php";
            break;

        case("/Medicio/register"):
            require __DIR__."/controller/register.php";
            break;
        
        case("/Medicio/sign_out"):
            require __DIR__."/controller/SignOut.php";
            break;

        case("/Medicio/signup_doctor"):
            require __DIR__."/controller/signup_doctor.php";
            break;

        case("/Medicio/profile"):
            require __DIR__."/controller/profile.php";
            break;
        
        case("/Medicio/editUserProfile"):
            require __DIR__."/controller/editUserProfile.php";
            break;
        case("/Medicio/searchDoctor"):
            require __DIR__."/controller/searchDoctor.php";
            break;

        case("/Medicio/EditProfile"):
            require __DIR__."/controller/EditProfile.php";
            break;
        case("/Medicio/DrProfile?id=".$id):
            require __DIR__."/controller/appoinments.php";
            break;
        
        case("/Medicio/update_profile"):
            require __DIR__."/controller/update_profile.php";
            break;
        
        case("/Medicio/appoimentsList"):
            require __DIR__."/controller/appoimentsList.php";
            break;
        
        case("/Medicio/new_appointment"):
            require __DIR__."/controller/new_appointment.php";
            break;
        case("/Medicio/notfound"):
            require __DIR__."/controller/404.php";
            break;
            
        case("/Medicio/TakeAppointment"):
            require __DIR__."/controller/CheckAppointments.php";
            break;
        default:
            require __DIR__."/controller/404.php";
            break;
    }
?>