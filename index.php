<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TanyaKode.com</title>

    <!-- ==== STYLE.CSS ==== -->
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.css">

    <!-- ====  REMIXICON CDN ==== -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- =====Link Font ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet">

    <!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <!-- ==== HEADER ==== -->
    <header class="container header">
      <!-- ==== NAVBAR ==== -->
      <nav class="nav">
        <div class="logo">
          <h2>TanyaKode</h2>
        </div>

        <div class="nav_menu" id="nav_menu">
          <button class="close_btn" id="close_btn">
            <i class="ri-close-fill"></i>
          </button>

          <ul class="nav_menu_list">
            <li class="nav_menu_item">
              <a href="#" class="nav_menu_link">Home</a>
            </li>
            <li class="nav_menu_item">
              <a href="#" class="nav_menu_link">about</a>
            </li>
            <li class="nav_menu_item">
              <a href="login.php" class="nav_menu_link">Get Started</a>
            </li>
          </ul>
        </div>

        <button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button>

      </nav>
    </header>

    <section class="wrapper">
      <div class="container">
        <div class="grid-cols-2">
          <div class="grid-item-1">
            <h1 class="main-heading">
              Welcome to <span>TanyaKode</span>
            </h1>
            <p class="info-text">
              Forum diskusi bagi developer untuk tanya, jawab, dan menemukan solusi dari kodemu.
            </p>

            <div class="btn_wrapper">
              <div class="btn get_started_btn">
                <div class="vertical-center">
                  <a class="" href="login.php">Tanya?</a>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item-2">
            <div class="team_img_wrapper">
              <img src="assets/img/coding.jpg" alt="team-img" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About section -->
    <section class="about">
      <img src="assets/img/img_about.jpg" alt="">
      <div class="description">
        <h2 class="child-heading">Apa itu <span>TanyaKode</span> ?</h2>
        <p class="info-text">
          TanyaKode merupakan forum diskusi untuk memberikan kemudahan bagi para programmer saat menemukan error pada code mereka. 
        </p>
      </div>
    </section>

    <section class="wrapper">
      <h3 class="section-title">Our Feature</h3>
      <div class="desc">Fitur unggulan kami yang memudahkan para programmer</div>
      <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="grid-cols-3">
          <div class="grid-col-item">
            <div class="featured_info">
              <span>Forum diskusi</span>
              <p>
                Tanyakode dapat menjawab pertanyaan dan membantu programmer dalam memberikan jawaban yang berkualitas
              </p>
            </div>
          </div>
          <div class="grid-col-item">
            <div class="featured_info">
              <span>Microbloging</span>
              <p>
                Tanyakode menyediakan wadah bagi programmer untuk berbagi wawasan terkait info terkini di bidang IT
              </p>
            </div>
          </div>

          <div class="grid-col-item">
            <div class="featured_info">
              <span>Job Hiring</span>
              <p>
                Tanyakode membantu rekruiter dalam mencari programmer terbaik yang berkompeten
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Footer Section-->
  <footer class="site-footer">
      <div class="container">
        <div class="grid-cols-4-footer">
          <div class="">
            <div class="footer-image">
            <img src="assets/img/footer-removebg.png">
            </div>
          </div>

          <div class="grid-item-footer">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">Forum Diskusi</a></li>
              <li><a href="#">Microbloging</a></li>
              <li><a href="#">Job Hiring</a></li>
            </ul>
          </div>

          <div class="grid-item-footer">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="grid-item-footer">
            <h6>Social Media</h6>
            <ul class="footer-sosmed">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">LinkedIn</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
  </footer>

    <!-- ==== ANIMATE ON SCROLL JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ==== GSAP CDN ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- ==== SCRIPT.JS ==== -->
    <script src="assets/js/main.js" defer></script>
  </body>
</html>
