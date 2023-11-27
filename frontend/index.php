<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Profile Mirakel Hafiza Ayata</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/profile-icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

    <?php
  $sql = "SELECT * FROM navbar";
  $data = $conn->query($sql);
  if ($data->num_rows > 0) :
    $i = 1;
    while ($row = $data->fetch_assoc()) :
  ?>

      <div class="profile">
        <img src="../backend/form/navbar/file/<?= $row['FOTO'] ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?= $row['NAMA'] ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Hfz5494" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/mirakel.ayat.3" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/mirakelhfz_/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UCv4Zti23D8x1Vm2Mj0mETtQ" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="https://www.tiktok.com/@nnktvf" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        </div>
      </div>

      <?php 
      endwhile;
    endif;
      ?>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php
  $sql = "SELECT * FROM home";
  $data = $conn->query($sql);
  if ($data->num_rows > 0) :
    $i = 1;
    while ($row = $data->fetch_assoc()) :
  ?>
      <section style="width: 100%;height: 100vh;
  background: url('../backend/form/home/file/<?= $row['FOTO'] ?>') top center;
  background-size: cover;" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">

          <h1>
            <font color="white"><?= $row['NAMA'] ?></font>
          </h1>
          <font color="white">
            <p  style="font-size: 1rem; font-weight: 600;">I'm <span class="typed" data-typed-items="<?= $row['ALAMAT'] ?>"></span></p>
          </font>

      <?php
    endwhile;
  endif;
      ?>
        </div>
      </section>
      <!-- End Hero -->

      <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container">

            <div class="section-title">
              <h2>About</h2>
              <?php
              $sql = "SELECT * FROM about";
              $data = $conn->query($sql);
              if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :
              ?>
                  <p><?= $row['KETERANGAN'] ?></p>
            </div>

            <div class="row">
              <div class="col-lg-4" data-aos="fade-right">
                <img src="../backend/form/about/file/<?= $row['FOTO'] ?>" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3> <?= $row['NAMA'] ?></h3>
                <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= $row['BIRTHDAY'] ?></span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $row['NO_HP'] ?></span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $row['KOTA'] ?></span></li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $row['UMUR'] ?></span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $row['DERAJAT'] ?></span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $row['EMAIL'] ?></span></li>
                    </ul>
                  </div>
                </div>
                <p>
                  <?= $row['KETERANGAN2'] ?>
                </p>
                <a href="https://drive.google.com/file/d/1BuXEzXMMTx91EN3cjJ6D1sCkYQDEELnA/view?usp=drive_link" class="btn btn-style btn-dark btn-lg mt-lg-6 mt-5">Download CV</a>
              </div>
            </div>
        <?php
                endwhile;
              endif;
        ?>
          </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
          <div class="container">

            <div class="section-title">
              <h2>Facts</h2>

              <?php
              $sql = "SELECT * FROM facts";
              $data = $conn->query($sql);
              if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :
              ?>

                  <p><?= $row['KETERANGAN'] ?></p>
            </div>

            <div class="row no-gutters">

              <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="count-box">
                  <i class="bi bi-controller"></i>
                  <span>
                    <h3><strong> <?= $row['NOMER'] ?></h3></strong>
                  </span>
                  <p><strong><?= $row['NAMA'] ?></strong><?= $row['KETERANGAN2'] ?></p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="count-box">
                  <i class="bi bi-pc-display"></i>
                  <span>
                    <h3><strong> <?= $row['NOMER2'] ?></h3></strong>
                  </span>
                  <p><strong><?= $row['NAMA2'] ?></strong><?= $row['KETERANGAN3'] ?></p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="count-box">
                  <i class="bi bi-film"></i>
                  <span>
                    <h3><strong> <?= $row['NOMER3'] ?></h3></strong>
                  </span>
                  <p><strong><?= $row['NAMA3'] ?></strong><?= $row['KETERANGAN4'] ?></p>
                </div>
              </div>

            </div>

          </div>
      <?php
                endwhile;
              endif;
      ?>
      </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
          <div class="container">

            <div class="section-title">
              <h2>Skills</h2>

              <?php
              $sql = "SELECT * FROM skill";
              $data = $conn->query($sql);
              if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :
              ?>

                  <p><?= $row['KETERANGAN'] ?></p>

                  <div class="row skills-content mt-3">
                    <div class="col" data-aos="fade-up">
                      <div class="progress">
                        <span class="skill"><?= $row['NAMA'] ?><i class="val"><?= $row['ANGKA'] ?>%</i></span>
                        <div class="progress-bar-wrap">
                          <div class="progress-bar" role="progressbar" aria-valuenow="<?= $row['ANGKA'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                endwhile;
              endif;
              ?>
            </div>


          </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
          <div class="container">

            <div class="section-title">
              <h2>Resume</h2>
              <?php
              $sql = "SELECT * FROM resume";
              $data = $conn->query($sql);
              if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :
              ?>
                  <p><?= $row['KETERANGAN'] ?></p>
              <?php
                endwhile;
              endif;
              ?>
            </div>

            <h3 class="resume-title">Education</h3>
            <?php
            $sql = "SELECT * FROM resume";
            $data = $conn->query($sql);
            if ($data->num_rows > 0) :
              $i = 1;
              while ($row = $data->fetch_assoc()) :
            ?>
                <div class="resume-item">
                  <h4><?= $row['NAMA'] ?></h4>
                  <h5><?= $row['TANGGAL'] ?></h5>
                  <p><em><?= $row['ALAMAT'] ?></em></p>
                  <p><?= $row['KETERANGAN2'] ?></p>
                </div>

            <?php
              endwhile;
            endif;
            ?>
          </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
          <div class="container">

            <div class="section-title">
              <h2>Portfolio</h2>

              <?php
              $sql = "SELECT * FROM portfolio";
              $data = $conn->query($sql);
              if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :
              ?>

                  <p><?= $row['KETERANGAN'] ?></p>
            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app"><?= $row['RFID'] ?></li>
                  <li data-filter=".filter-card"><?= $row['EXPO'] ?></li>
                  <li data-filter=".filter-web"><?= $row['WEB'] ?> </li>
                </ul>
              </div>
            </div>

        <?php
                endwhile;
              endif;
        ?>

        <?php
        $sql = "SELECT * FROM foto_port";
        $data = $conn->query($sql);
        if ($data->num_rows > 0) :
          $i = 1;
          while ($row = $data->fetch_assoc()) :
        ?>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="RFID "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO1'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO1'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Login Logout"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO2'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO2'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="RFID Spreetsheed"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO3'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO3'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Desain Ganci"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO4'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO4'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="3D Java"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO5'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO5'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kunjungan Mentri"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO6'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO6'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Desain Banner"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO7'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO7'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Desain Stiker"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="../backend/form/foto_port/file/<?= $row['FOTO8'] ?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="../backend/form/foto_port/file/<?= $row['FOTO8'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web Portofolio"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

            </div>


        <?php
          endwhile;
        endif;
        ?>

          </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
          <div class="container">

            <div class="section-title">
              <h2>Services</h2>

              <?php
              $sql = "SELECT * FROM services";
              $data = $conn->query($sql);
              if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :
              ?>

                  <p><?= $row['KETERANGAN'] ?></p>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-cpu"></i></div>
                <h4 class="title"><a href=""><?= $row['NAMA1'] ?></a></h4>
                <p class="description"><?= $row['KETERANGAN1'] ?></p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-pc-display-horizontal"></i></div>
                <h4 class="title"><a href=""><?= $row['NAMA2'] ?></a></h4>
                <p class="description"><?= $row['KETERANGAN2'] ?></p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-joystick"></i></div>
                <h4 class="title"><a href=""><?= $row['NAMA3'] ?></a></h4>
                <p class="description"><?= $row['KETERANGAN3'] ?></p>
              </div>
            </div>

        <?php
                endwhile;
              endif;
        ?>

          </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>End testimonial item -->

        <!-- <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>End testimonial item -->

        <!-- <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>End testimonial item -->

        <!-- <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>End testimonial item -->

        <!-- <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>End testimonial item -->

        <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">

            <div class="section-title">
              <h2>Contact</h2>

              <?php
              $sql = "SELECT * FROM contact";
              $data = $conn->query($sql);
              if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :

              ?>

                  <p><?= $row['KETERANGAN'] ?></p>
            </div>

            <div class="row" data-aos="fade-in">

              <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p><?= $row['ALAMAT'] ?></p>
                  </div>

                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p><?= $row['EMAIL'] ?></p>
                  </div>

                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p><?= $row['NO_HP'] ?></p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3558165024981!2d110.16772802847908!3d-7.306253169325921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7079a55165ea87%3A0xb0df9155a528fe8c!2sYonasz&#39;s%20Dangau%22!5e0!3m2!1sid!2sid!4v1691030216781!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

              </div>
          <?php
                endwhile;
              endif;
          ?>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="kontak/aksi_tambah.php" method="POST">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Your Name</label>
                  <input type="text" name="NAMA" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Your Email</label>
                  <input type="email" class="form-control" name="EMAIL" id="exampleFormControlInput1" required>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Subject</label>
                <input type="text" class="form-control" name="SUBJEK" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Message</label>
                <textarea class="form-control" name="PESAN" rows="10" required></textarea>
              </div>
              <br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center">
                <button type="submit" class="btn btn-secondary" name="submit" value="submit">Submit</button>
              </div>
            </form>
          </div>

            </div>
          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <!-- <footer id="footer">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>iPortfolio</span></strong>
          </div>
          <div class="credits"> -->
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer> -->
      <!-- End  Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/typed.js/typed.umd.js"></script>
      <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>

</body>

</html>