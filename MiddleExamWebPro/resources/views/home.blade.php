<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cemal-Cemil</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +62 81234567890&nbsp;&nbsp;
        <span class="d-none d-lg-inline-block"><i class="icofont-location-pin"></i> Sukolilo, Surabaya</span>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ route('home')}}">Cemal-Cemil</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('home')}}">Dashboard</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#why-us">Why Us?</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="{{ route('contact.store')}}">Contact</a></li>
          <li class="book-a-table text-center"><a href="{{ route('order.index')}}">Order Now</a></li>
          <li class="dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: black">
                <a class="dropdown-item" href="{{ route('profile') }}">
                    {{ __('Profile') }}
                </a>
                <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Cemal-Cemil</span></h1>
          <h2>Offering great snacks for more than 4 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="{{ route('order.index')}}" class="btn-book animated fadeInUp scrollto">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Cemal-Cemil is a snack bar that provide healthy snacks and a few light meals at relatively inexpensive prices. </h3>
            <p class="font-italic">
              <br>
              Located in Sukolilo, Surabaya, our place has been here since 2016.<br>
              From a humble beginning of short orders, 
              our focus is still to bring the best and most responsibly sourced ingredients to the table.<br>
              All these years and successes later, we never forget where we came from. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Cemal-Cemil</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bread Barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Simple but tasty. The meals were amazing!! I have to say it’s the best meal I have had in quite some time. 
              You will definitely be seeing more of me eating at this place again!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Everyone had a wonderful time at Cemal-Cemil last night.
              As expected, the food was delicious and our servers were so friendly and helpful – we loved them! 
              It was a delightful experience all round.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              My friend and I were here last night for dinner. 
              I want to thank you and the rest of the staff for the excellent food and service provided. 
              It was our first visit and we both agreed that it was a wonderful experience.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Just to let you know everyone was very impressed with everything about this place; staff, food and the place itself.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fantastic snacks! The prepared foods are delicious!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Cemal-Cemil</h3>
              <p>
                <strong>Phone:</strong> +62 81234567890<br>
                <strong>Email:</strong> cemalcemil@gmail.com<br>
              </p>
              {{-- <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cemal-Cemil</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>