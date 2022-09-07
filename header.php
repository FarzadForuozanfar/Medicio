<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio</title>
  <meta name="description" content="Online Appointment, Medicio,  online doctor booking service, online doctor reservation">
  <meta name="keywords" content="doctor, nurse, bootstrap5, js, php, sql, database, Appointment, Medicio website, medical website, online booking service">
  <meta name="author" content="farzad foroozanfar">

  <!-- Favicons -->
  <link href="view/assets/img/icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="view/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="view/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="view/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="view/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="view/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="view/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="view/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Template Main CSS File -->
  <link href="view/assets/css/style.css" rel="stylesheet">

</head>

<body class="bg-light scrollbar">
  <?php if ($_SESSION['location'] == 'home') : ?>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="align-items-center d-none d-md-flex">
          <i class="bi bi-clock"></i> Saturday - Monday, 8AM to 8PM
        </div>
        <div class="d-flex align-items-center">
          <i class="bi bi-phone"></i> Call us now +98 915 236 3485
        </div>
      </div>
    </div>
  <?php endif; ?>