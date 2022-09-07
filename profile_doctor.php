<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>user profile bio graph and total sales - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/assets/css/profile.css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <?php include 'view/panel_doctor.php'; ?>
            </div>
            <div class="profile-info col-md-9">

                <div class="panel">
                    <?php
                        if($_SESSION['location'] == 'profile')
                            include 'view/personal_info.php';
                        
                        elseif($_SESSION['location'] == 'editprofile')
                            include 'view/edit_info.php';

                        elseif($_SESSION['location'] == 'appoimentsList')
                            include 'view/appoimentsList.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>