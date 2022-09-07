<!-- ======= Header Navbar ====== -->
<div class="row">
  <?php include 'navbar.php'; ?>
</div>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section class="position-relative" id="hero" style="background-image: url(view/assets/img/slide/slide-1.jpg)">
  <!-- Slide 1 -->
  <div class=" position-relative">

    <div class="row position-relative p-5 mt-5 bottom-0 justify-content-center text-center">
      <div class="col-lg-7 col-md-10 col-sm-12 p-4 rounded-4 bg-glass text-light">
        <h1 class=""><span class="text-info">Welcome to Medicio</span></h1>
        <b class="text-info ">Medicio is an online appointment scheduling program with more than 122 doctors ready to serve online</b>
        <div class="row justify-content-center">
          <form onsubmit="event.preventDefault()" method="post" id="form-search" class="col-11 shadow d-flex w-full bg-light p-2 pe-4 rounded-3">
            <input style="margin-right:15px" id="search-bar" type="search" placeholder="Search..." name="search-bar">
            <span id="btn-search">
              <button onclick="SearchDoctor(this)" type="button" class="bi bi-search"></button>
            </span>
          </form>
        </div>
      </div>
      <div id="search-results-container" style="display: none;" class="col-lg-7 col-md-10 col-sm-12">
        <div class="row d mt-3 p-0 justify-content-center">
          <div class="col-11 d-flex p-0 rounded-3">
            <ul id="list-container" class="list-group h-100 scrollbar overflow-auto w-100">
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fas fa-thermometer"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Featured Services Section -->
  <?php if (!isset($_SESSION['user_login'])) : ?>
      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="text-center">
            <h3>In an emergency? Need help now?</h3>
            <p>If you have not yet joined the Medicio family, register as a doctor or user to benefit from our services and help the health community.</p>
            <a class="cta-btn scrollto" href="#appointment">Make an Appointment</a>
          </div>

        </div>
      </section><!-- End Cta Section -->

  <?php endif; ?>
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p>Medicio vision is to help humanity live a healthy, happy and long life. Every day, millions of people in the world are challenged and trying to get proper medical services, and Medicio seeks to change this path.</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="view/assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Medicio vision</h3>
          <p class="fst-italic">
            The subject of online booking has been implemented and experienced in many countries of the world and the results of studies show that the level of efficiency, effectiveness and satisfaction resulting from it has been very impressive.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Medicio strives to spread the blessing of health, which is one of the most important blessings, through increasing health awareness and health among people. Medicio believes that in the era of information and communication technology, access to clear and correct information is the right of all people. Medicio believes that values are more important than rules (do's and don'ts) and these values are not only a guide for providing better services but also general principles for being a good human being.</li>
            <li><i class="bi bi-check-circle"></i> Medicio believes in being the best and doing everything in the best way. In the idea of being the best, Medicio seeks to have maximum impact, stand out, focus on the end consumer, move with momentum, have long-term thinking and accept suggestions and criticisms.</li>
          </ul>

        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

            <p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
            <a href="#">Find out more &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Services</strong> adipisci atque cum quia aut numquam delectus</p>
            <a href="#">Find out more &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-flask-vial"></i>
            <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Medical Lab</strong> aut commodi quaerat. Aliquam ratione</p>
            <a href="#">Find out more &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-book-medical"></i>
            <span data-purecounter-start="0" data-purecounter-end="487" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
            <a href="#">Find out more &raquo;</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="image col-lg-6" style='background-image: url("view/assets/img/features/main.jpg");'></div>

        <div class="col-lg-6" data-aos="fade-left">
          <div class="d-flex mt-5 mt-lg-0">
            <img src="view/assets/img/features/access.png" class="me-3" width="68px" alt="">
            <h5 style="width: 20%;" class="d-flex align-items-end">Easy Access</h5>
            <p class="d-flex align-items-center" style="word-wrap: break-word; width: 80%;">Easy and convenient access to services Medicio</p>
          </div>
          <div class="d-flex mt-5">
            <img src="view/assets/img/features/visit.png" width="68px" class="me-3" alt="">
            <h5 style="width: 20%; word-wrap: break-word;" class="d-flex align-items-center">On-site</h5>
            <p class="d-flex align-items-center" style="word-wrap: break-word; width: 80%;">Visiting patients as quickly as possible with advanced medical equipment</p>
          </div>
          <div class="d-flex mt-5">
            <img src="view/assets/img/features/send.png" width="68px" class="me-3" alt="">
            <h5 style="width: 20%;" class="d-flex align-items-center">Delivery</h5>
            <p class="d-flex align-items-center" style="word-wrap: break-word; width: 80%;">Immediate delivery to installments in the city of Mashhad</p>
          </div>
          <div class="d-flex mt-5">
            <img src="view/assets/img/features/bimeh.png" width="68px" class="me-3" alt="">
            <h5 style="width: 20%;" class="d-flex align-items-center">Insurance</h5>
            <p class="d-flex align-items-center" style="word-wrap: break-word; width: 80%;">Party to the contract with reliable and institutional and banking insurances</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="fas fa-heartbeat"></i></div>
          <h4 class="title"><a href="">Cardiologist</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="fas fa-pills"></i></div>
          <h4 class="title"><a href="">DrugStore</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-lungs"></i></div>
          <h4 class="title"><a href="">pulmonologist</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="fas fa-eye"></i></div>
          <h4 class="title"><a href="">Optometrist</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="fas fa-stethoscope"></i></div>
          <h4 class="title"><a href="">General practitioner</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-teeth"></i></div>
          <h4 class="title"><a href="">Dentist</a></h4>
          <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <?php if (!empty($_SESSION['user_login']['type'])) : ?>
    <?php if ($_SESSION['user_login']['type'] != 'doctor') : ?>
      <!-- ======= Appointment Section ======= -->
      <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Make an Appointment</h2>
            <p>If you haven't registered in Medicio yet, join our big family and use our online services, or have an account already, login into and take appoinments</p>
          </div>

          <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-md-4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group mt-3">
                <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
              </div>
              <div class="col-md-4 form-group mt-3">
                <select name="department" id="department" class="form-select">
                  <option value="">Select Department</option>
                  <option value="Department 1">Department 1</option>
                  <option value="Department 2">Department 2</option>
                  <option value="Department 3">Department 3</option>
                </select>
              </div>
              <div class="col-md-4 form-group mt-3">
                <select name="doctor" id="doctor" class="form-select">
                  <option value="">Select Doctor</option>
                  <option value="Doctor 1">Doctor 1</option>
                  <option value="Doctor 2">Doctor 2</option>
                  <option value="Doctor 3">Doctor 3</option>
                </select>
              </div>
            </div>

            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
          </form>

        </div>
      </section><!-- End Appointment Section -->

    <?php endif; ?>
  <?php endif; ?>
  <?php if (empty($_SESSION['user_login'])) : ?>
    <!-- ======= Register Section ======= -->
    <section id="register" class="featured-services section-bg">
      <div class="container" data-aos="fade-right">

        <div class="section-title">
          <h2>Register / Login</h2>
          <p>If you have not yet joined the Medicio family, register as a doctor or user to benefit from our services and help the health community.</p>
        </div>
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" style="border-bottom-left-radius:0px; border-bottom-right-radius:0px;" data-aos="fade-up" data-aos-delay="100">
              <div class="icon text-center"><i class="fas fa-user"></i></div>
              <h4 class="title text-center"><a><b>As User</b></a></h4>
              <p class="description text-center">You can also enjoy receiving health services online by becoming a member of <b>Medicio</b></p>
            </div>
            <a href="signup_user" style="width: 100%; padding:0;">
              <button type="button" style="width: 100%;" class="sign-up-btn shadow-lg m-0">SIGN UP</button>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" style="border-bottom-left-radius:0px; border-bottom-right-radius:0px;" data-aos="fade-up" data-aos-delay="100">
              <div class="icon text-center"><i class="fas fa-user-doctor"></i></div>
              <h4 class="title text-center"><a><b>As Doctor</b></a></h4>
              <p class="description text-center">By joining the large group of <b>Medicio</b> doctors, you can experience the good feeling of empathy with the users</p>
            </div>
            <a href="signup_doctor" style="width: 100%;">
              <button type="button" style="width: 100%;" class="sign-up-btn shadow-lg">SIGN UP</button>
            </a>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4 col-sm-8 d-flex justify-content-center">
            <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#Login">already have an account</button>
          </div>
        </div>
      </div>
    </section><!-- End Register Section -->
  <?php endif; ?>
  <!-- Login Modal -->
  <?php include 'view/login_modal.php'; ?>
  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Departments</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Cardiology</h4>
                <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Neurology</h4>
                <p>Voluptas vel esse repudiandae quo excepturi.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Hepatology</h4>
                <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>Pediatrics</h4>
                <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <h3>Cardiology</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="view/assets/img/departments-1.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
            <div class="tab-pane" id="tab-2">
              <h3>Neurology</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="view/assets/img/departments-2.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
            <div class="tab-pane" id="tab-3">
              <h3>Hepatology</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="view/assets/img/departments-3.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
            <div class="tab-pane" id="tab-4">
              <h3>Pediatrics</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="view/assets/img/departments-4.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Departments Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="view/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="view/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="view/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="view/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="view/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Doctors Section ======= -->
  <section id="doctors" class="section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Doctors</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="view/assets/img/doctors/doctors-4.jpg" class="docors-profile-slider" width="100%" height="310px" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>

            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="view/assets/img/doctors/doctors-3.jpg" class="docors-profile-slider" width="100%" height="310px" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>

            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="view/assets/img/doctors/doctors-2.jpg" class="docors-profile-slider" width="100%" height="310px" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>

            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide mb-5">
            <div class="">
              <img src="view/assets/img/doctors/doctors-1.jpg" class="docors-profile-slider" width="100%" height="310px" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>

            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination position-absolute"></div>

      </div>
  </section><!-- End Doctors Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gallery</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-1.jpg"><img src="view/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-2.jpg"><img src="view/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-3.jpg"><img src="view/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-4.jpg"><img src="view/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-5.jpg"><img src="view/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-6.jpg"><img src="view/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-7.jpg"><img src="view/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="view/assets/img/gallery/gallery-8.jpg"><img src="view/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Frequently Asked Questioins Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questioins</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <ul class="faq-list">

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq6" class="collapse" data-bs-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End Frequently Asked Questioins Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

    </div>

    

    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12 ">
              <div class="info-box shadow">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Jalal Al Ahmad Street, Mashhad, IRAN</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4 shadow">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>foruozanfar2000f@gmail.com<br>forouzanfarfarzad@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="info-box mt-4 shadow">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+98 915 236 3485<br>+98 921 216 7732</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 ">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form shadow">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group mt-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->