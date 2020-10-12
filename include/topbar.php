<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i> <a href="mailto:contact@awachsaccos.coop">contact@awachsaccos.coop</a>
      <i class="icofont-phone"></i> +251 944 696 969
    </div>
    <div class="social-links">
      <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="#" class="skype"><i class="icofont-skype"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <a href="index.php" class="logo mr-auto"><img src="assets/img/full logo.png" alt="" class="img-fluid"></a>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="<?php if($current_page == 'Home') echo 'active' ?>">
          <a href="index.php">Home</a>
        </li>
        <li class="drop-down"><a href="#About">About</a>
          <ul>
            <li class=" <?php if($current_page == 'Who we are?') echo 'active' ?>">
              <a href="./who-we-are.php">Who we are?</a>
            </li>
            <li class=" <?php if($current_page == 'Vision and Mission') echo 'active' ?>">
              <a href="./vision-and-mission.php">Vision and Mission</a>
            </li>
            <li class=" <?php if($current_page == 'Our team') echo 'active' ?>">
              <a href="./our-team.php">Our team</a>
            </li>
            <li class=" <?php if($current_page == 'Documents') echo 'active' ?>">
              <a href="./documents.php">Documents</a>
            </li>
            <li class=" <?php if($current_page == 'Testimonial') echo 'active' ?>">
              <a href="./testimonial.php">Testimonial</a>
            </li>
          </ul>
        </li>
        <li class="drop-down"><a href="#">Services</a>
          <ul>
            <li class=" <?php if($current_page == 'Saving') echo 'active' ?>">
              <a href="./saving.php">Saving</a>
            </li>
            <li class=" <?php if($current_page == 'Loan') echo 'active' ?>">
              <a href="./loan.php">Loan</a>
            </li>
            <li class=" <?php if($current_page == 'Training & Consultancy') echo 'active' ?>">
              <a href="./training-and-consultancy.php">Training & Consultancy</a>
            </li>
          </ul>
        </li>
        <li class=" <?php if($current_page == 'News') echo 'active' ?>">
          <a href="./news">News</a>
        </li>
        <li class="drop-down"><a href="#gallary">Gallary</a>
          <ul>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Audio</a></li>
          </ul>
        </li>
        <li class=" <?php if($current_page == 'FAQ') echo 'active' ?>">
          <a href="./faq">FAQ</a>
        </li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->