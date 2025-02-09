<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Beehive</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><span>B</span>hive</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#features">Features</a></li> 
          <li><a href="{{ route('login') }}">Login </a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2>Beehive</h2>
            <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/hero-img.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <!-- <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
              </div>
            </div>End Icon Box -->

            <!-- <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
              </div>
            </div>End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Location</a></h4>
              </div>
            </div><!--End Icon Box -->

            <!-- <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
              </div>
            </div>End Icon Box -->

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Beehive</p>
            <h3>About Our Beehive Monitoring System</h3>
            <p class="fst-italic">
            Our IoT-Based Beehive Monitoring System is designed to revolutionize beekeeping practices through smart technology,
            enhancing honeybee health, productivity, and sustainability.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Real-time monitoring of hive conditions like temperature, humidity, and air quality.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Early detection of potential threats, reducing colony losses from diseases and pests.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Supports sustainable beekeeping practices by bridging traditional methods with modern IoT technology.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <div><span>Check Our</span> <span class="description-title">Beehive Services</span></div>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      <!-- Service 1: Real-Time Hive Monitoring -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-activity"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Real-Time Hive Monitoring</h3>
          </a>
          <p>Monitor hive temperature, humidity, and air quality in real-time to ensure optimal conditions for healthy colonies.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Service 2: Early Threat Detection -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Early Threat Detection</h3>
          </a>
          <p>Detect potential risks like diseases, pests, and environmental changes early, preventing colony losses and ensuring safety.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Service 3: Data Analytics & Insights -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-graph-up"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Data Analytics & Insights</h3>
          </a>
          <p>Analyze environmental data to make informed decisions that improve hive productivity and sustainability.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Service 4: Remote Access & Control -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-wifi"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Remote Access & Control</h3>
          </a>
          <p>Manage and monitor your beehives from anywhere using IoT technology for greater flexibility and convenience.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Service 5: Sustainable Beekeeping Practices -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-recycle"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Sustainable Beekeeping</h3>
          </a>
          <p>Promote eco-friendly and sustainable beekeeping practices through data-driven insights and smart technology.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Service 6: Cost-Effective Hive Management -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-cash-coin"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Cost-Effective Hive Management</h3>
          </a>
          <p>Reduce operational costs by minimizing manual hive checks and optimizing resource use through smart automation.</p>
        </div>
      </div><!-- End Service Item -->

    </div>
  </div>

</section>
<!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Features</h2>
  <div><span>Check Our</span> <span class="description-title">Smart Beehive Features</span></div>
</div><!-- End Section Title -->

<div class="container">
  <div class="row gy-5 justify-content-between">

    <!-- Beehive Monitoring Illustration -->
    <div class="col-xl-5" data-aos="zoom-out" data-aos-delay="100">
     <img src="assets/assets/img//template/eStartup/features.svg" class="img-fluid" alt="">
    </div>

    <div class="col-xl-6 d-flex">
      <div class="row align-self-center gy-4">

        <!-- Feature 1: Real-Time Data Collection -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-bar-chart-line"></i>
            <h3>Real-Time Data Collection</h3>
          </div>
        </div><!-- End Feature Item -->

        <!-- Feature 2: Environmental Monitoring -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-cloud-sun"></i>
            <h3>Environmental Monitoring</h3>
          </div>
        </div><!-- End Feature Item -->

        <!-- Feature 3: Automated Alerts -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-bell-fill"></i>
            <h3>Automated Alerts</h3>
          </div>
        </div><!-- End Feature Item -->

        <!-- Feature 4: Remote Hive Access -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-phone"></i>
            <h3>Remote Hive Access</h3>
          </div>
        </div><!-- End Feature Item -->

        <!-- Feature 5: Battery & Power Efficiency -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-battery-charging"></i>
            <h3>Power Efficiency</h3>
          </div>
        </div><!-- End Feature Item -->

        <!-- Feature 6: Data-Driven Insights -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-lightbulb"></i>
            <h3>Data-Driven Insights</h3>
          </div>
        </div><!-- End Feature Item -->

      </div>
    </div>

  </div>
</div>

</section>
<!-- /Features Section -->

    <!-- Pricing Section -->


    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

<div class="container">

  <div class="row gy-4">

    <!-- FAQ Title Section -->
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="content px-xl-5">
        <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
        <p>
          Here are some common questions about our IoT-Based Beehive Monitoring System to help you understand its features, benefits, and how it works.
        </p>
      </div>
    </div>

    <!-- FAQ Items -->
    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

      <div class="faq-container">

        <!-- Question 1 -->
        <div class="faq-item faq-active">
          <h3><span class="num">1.</span> <span>How does the IoT-Based Beehive Monitoring System work?</span></h3>
          <div class="faq-content">
            <p>
              The system uses IoT sensors to collect real-time data on temperature, humidity, hive weight, and bee activity. This data is transmitted to a cloud platform, where it’s analyzed and displayed on a dashboard for easy monitoring.
            </p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <!-- Question 2 -->
        <div class="faq-item">
          <h3><span class="num">2.</span> <span>What types of data can the system monitor?</span></h3>
          <div class="faq-content">
            <p>
              It monitors key parameters such as internal hive temperature, humidity levels, hive weight (to track honey production), and bee activity levels to detect potential swarming or health issues.
            </p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <!-- Question 3 -->
        <div class="faq-item">
          <h3><span class="num">3.</span> <span>Can I access the data remotely?</span></h3>
          <div class="faq-content">
            <p>
              Yes, the system is designed for remote access. You can view hive data from your smartphone, tablet, or computer anytime, anywhere, through a user-friendly web dashboard or mobile app.
            </p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <!-- Question 4 -->
        <div class="faq-item">
          <h3><span class="num">4.</span> <span>Will the system notify me of any issues?</span></h3>
          <div class="faq-content">
            <p>
              Absolutely. The system sends automated alerts via SMS or email if it detects abnormal conditions, such as sudden drops in temperature, unusual hive activity, or low hive weight, helping you respond quickly.
            </p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

        <!-- Question 5 -->
        <div class="faq-item">
          <h3><span class="num">5.</span> <span>Is the system easy to install and maintain?</span></h3>
          <div class="faq-content">
            <p>
              Yes, the system is designed with ease of use in mind. It comes with clear installation instructions, and the sensors require minimal maintenance. Battery-powered sensors have long battery life, and the software updates automatically.
            </p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

      </div>

    </div>
  </div>

</div>

</section>
<!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Need Help?</span> <span class="description-title">Contact Us</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Bukidnon State University</p>
                <p>Malaybalay City, Bukidnon
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+639917067201</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>Portillass@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p><span>Capstone</span>  <span>Project</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://github.com/Portillass">Rell</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>