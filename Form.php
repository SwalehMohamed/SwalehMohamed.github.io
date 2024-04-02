<?php
include_once("forms/function.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$fname=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql=$insertdata->insert($fname,$email,$message);
if($sql)
{
echo "<script>alert('Your message has been sent. Thank you!');</script>";
}
else
{
echo "<script>alert('Your message has not been sent. Please Try Again.');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swaleh Mohamed CV</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/favicon.ico" rel="icon">
  <link href="assets/img/Favicon/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <a href="index.html" class="nav-link active"><i class="bx bx-home"></i> <span>Home</span></a>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Swaleh Mohamed EL-Busaidy</h1>
      <p>I'm <span class="typed" data-typed-items=" a Web Designer, a Web Developer, an Android App Developer, a Freelancer "></span></p>
      <div class="social-links">
        <a href="https://twitter.com/BusaidySwaleh" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/swalehmohamed.elbusaidy/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/master_elbusaidy/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/swaleh-mohamed-el-busaidy-82a520205/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <h2>Thank You For Your Feedback. To Go Back To Home, Press The Icon.</h2>
    </div>
  </section><!-- End Hero -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
      <h3>Swaleh Mohamed EL-Busaidy</h3>
      <p>This Is My Resume and if you want to communicate in other ways my Social Media Links Are Below.</p>
      <div class="social-links">
        <a href="https://twitter.com/BusaidySwaleh" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/swalehmohamed.elbusaidy/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/master_elbusaidy/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/swaleh-mohamed-el-busaidy-82a520205/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/contact-form-script.js"></script>
  <script src="assets/vendor/php-email-form/form-validator.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>