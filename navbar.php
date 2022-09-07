<header id="header" class="<?php if($_SESSION['location'] == 'home'){ echo 'fixed-top'; }?>">
    <div class="container d-flex align-items-center">

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
        <?php $link = ($_SESSION['location'] == 'home') ? '#' : 'home'; ?>
        <div class="col col-small">
            <nav id="navbar" class="navbar order-lg-0">
                <ul>
                    <li><a href="index.html" class="logo me-auto"><img src="view/assets/img/logo.png" alt=""></a></li>
                    <li><a class="nav-link scrollto " href="<?php echo $link; ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Optometrist<i class="fas fa-eye"></i></a></li>
                            <li><a href="#">General practitioner<i class="fas fa-stethoscope"></i></a></li>
                            <li><a href="#">Pulmonologist <i class="fas fa-lungs"></i></a></li>
                            <li><a href="#">Dentist<i class="fas fa-teeth"></i></a></li>
                            <li><a href="#">Cardiologist<i class="fas fa-heartbeat"></i></a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
        <div class="col col-large dropdown-center d-flex justify-content-end">
            <?php if (!isset($_SESSION['user_login'])) : ?>
                <a href="home#register">
                    <button type="button" class="register_login_btn">
                        register / login
                    </button>
                </a>
            <?php else : ?>
                <div class="">
                    <span data-bs-toggle="dropdown" aria-expanded="false" class="shadow-sm profile-container align-items-center">
                        <?php if ($_SESSION['user_login']['type'] == 'doctor') : ?>
                            <img class="profile-img me-1" width="35px" height="35px" src="<?php echo $_SESSION['user_login']['image']; ?>" alt="profile image">
                        <?php endif; ?>
                        <span><?php echo $_SESSION['user_login']['name']; ?></span>
                        <i class="bi bi-chevron-down mx-1"></i>
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile"><i class="bi bi-person me-2"></i><span>profile</span></a></li>
                        <li><a class="dropdown-item" href="sign_out"><i class="bi bi-box-arrow-right me-2"></i><span>Sign out</span></a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>