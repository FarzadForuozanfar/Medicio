<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Medicio</h3>
                        <p>
                            Jalal Al Ahmad Street <br>
                            Khorasan Razavi, IR<br><br>
                            <strong>Phone:</strong> +98 915 236 3485<br>
                            <strong>Email:</strong> foruozanfar2000f@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://github.com/farzadForoozanfar" class="twitter"><i class="bx bxl-github"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100084560521243" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://instagram.com/farzad__foroozanfar" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://t.me/farzad_foroozanfar" class="google-plus"><i class="bx bxl-telegram"></i></a>
                            <a href="https://www.linkedin.com/in/farzad-foruozanfar-a1773b225/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Optometrist</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">General practitioner</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Pulmonologist</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Dentist</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cardiologist</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://getbootstrap.com/">Bootstrap5</a>
        </div>
    </div>
</footer><!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Error login -->
<?php if (isset($_SESSION['login_error'])) : ?>
    <?php if ($_SESSION['login_error']) : ?>
        <div class="error-login d-flex align-items-center px-5 justify-content-end">
            <div class="toast-container" id="toastPlacement" data-original-class="toast-container p-3">
                <div class="toast fade show bg-danger">
                    <div class="toast-header">
                        <i class="bi bi-exclamation-triangle-fill me-3"></i>
                        <strong class="me-auto">Login Error</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-light">
                        Incorrect password or username
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php elseif(isset($_SESSION['register_status'])):?>
    <?php if($_SESSION['register_status'] == "Success" && $_SESSION['user_login']['type'] == 'user'):?>
        <div class="error-login d-flex align-items-center px-5 justify-content-end">
            <div class="toast-container" id="toastPlacement" data-original-class="toast-container p-3">
                <div class="toast fade show bg-success">
                    <div class="toast-header">
                        <i class="bi bi-chat-square-heart me-3"></i>
                        <strong class="me-auto">Welcome To Medicio dear <?php echo $_SESSION['user_login']['name'] ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-light">
                        Medicio is at your service and the first appointment Register yourself ✅😊.
                    </div>
                </div>
            </div>
        </div>
    <?php elseif($_SESSION['register_status'] == "Success" && $_SESSION['user_login']['type'] == 'doctor'):?>
        <div class="error-login d-flex align-items-center px-5 justify-content-end">
            <div class="toast-container" id="toastPlacement" data-original-class="toast-container p-3">
                <div class="toast fade show bg-success">
                    <div class="toast-header">
                        <i class="bi bi-chat-square-heart me-3"></i>
                        <strong class="me-auto">Welcome To Medicio Dr. <?php echo $_SESSION['user_login']['name'] ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-light">
                        Go to your profile page now and complete the necessary settings for your first appointment 👨‍⚕️🏥👩‍⚕️.
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php
    endif;
    unset($_SESSION['register_status']);
    unset($_SESSION['login_error']);
?>
<!-- Vendor JS Files -->
<script src="view/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="view/assets/vendor/aos/aos.js"></script>
<script src="view/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="view/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="view/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="view/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="view/assets/js/main.js"></script>
</body>

</html>