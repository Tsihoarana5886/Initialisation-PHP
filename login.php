<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rechauffement climatique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ;?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ;?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ;?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Amoeba - v4.7.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">InfoClimat</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">Recherche</a></li>
          <li><a class="nav-link scrollto" href="#services">Se Connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenue chez InfoClimat</h1>
      <h2>Informations sur le réchauffement climatique dans le monde</h2>
      <a href="#about" class="btn-get-started scrollto">Commencer</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
	<!-- Section: Design Block -->
	<section class="">
	<!-- Jumbotron -->
	<div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
		<div class="container">
		<div class="row gx-lg-5 align-items-center">
			<div class="col-lg-6 mb-5 mb-lg-0">
			<h1 class="my-5 display-3 fw-bold ls-tight">
				Se connecter <br />
				<span class="text-primary">en tant qu'administrateur</span>
			</h1>
			<p style="color: hsl(217, 10%, 50.8%)">
			"Les jeunes nous appellent à protéger notre planète et à garantir la vie humaine, les citoyens nous le demandent et la nature nous implore de prendre soin d'elle pour qu'elle puisse prendre soin de nous."
			</p>
			</div>

			<div class="col-lg-6 mb-5 mb-lg-0">
			<div class="card">
				<div class="card-body py-5 px-md-5">
				<form action="<?php echo site_url('Welcome/connexionAdmin');?>" method="post">
					<!-- 2 column grid layout with text inputs for the first and last names -->

					<!-- Email input -->
					<div class="form-outline mb-4">
					<input type="email" id="login" name="login" class="form-control" />
					<label class="form-label" for="form3Example3">Login</label>
					</div>

					<!-- Password input -->
					<div class="form-outline mb-4">
					<input type="password" id="mdp" name="mdp" class="form-control" />
					<label class="form-label" for="form3Example4">Mot de passe</label>
					</div>

					<p>
					<?php if(isset($error_message)){?>
							<td style="background-color:Red"><?php echo $error_message; ?></td>
					<?php  } ?>
					</p>
					<!-- Checkbox -->
					<div class="form-check d-flex justify-content-center mb-4">
					<input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
					<label class="form-check-label" for="form2Example33">
					    Abonnez-vous à notre newsletter  
					</label>
					</div>

					<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block mb-4">
					Connecter
					</button>

					<!-- Register buttons -->
				</form>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Jumbotron -->
	</section>
<!-- Section: Design Block -->
    <!-- End About Us Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>InfoClimat</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
		Designed by <a href="https://bootstrapmade.com/">Rojas Tsihoarana Giovanni</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ;?>assets/js/main.js"></script>


</body>

</html>
