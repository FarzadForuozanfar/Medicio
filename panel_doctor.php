<div class="panel shadow-lg">
    <div class="user-heading round">
        <a href="#">
            <img width="50px" height="50px" src="<?php echo $_SESSION['user_login']['image']; ?>" alt="">
        </a>
        <h1><?php echo $_SESSION['user_login']['name']; ?></h1>
        <p><i class="fas <?php echo $_SESSION['user_login']['icon']; ?> me-3"></i><b><?php echo $_SESSION['user_login']['proff_name']; ?></b></p>
    </div>

    <ul class="nav nav-pills nav-stacked">
        <li class="<?php echo ($_SESSION['location'] == 'profile') ? "active" : ''?> w-100"><a href="profile"> <i class="fa fa-user"></i> Profile</a></li>
        <li class="<?php echo ($_SESSION['location'] == 'appoimentsList') ? "active" : ''?> w-100"><a href="appoimentsList"> <i class="fa fa-calendar"></i> Appoiments</a></li>
        <li class="<?php echo ($_SESSION['location'] == 'editprofile') ? "active" : ''?> w-100"><a href="EditProfile"> <i class="fa fa-edit"></i> Edit profile</a></li>
    </ul>
</div>