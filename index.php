<?php include "includes/config.php";
$sql ="SELECT * FROM `users` WHERE `users`.`id`= 1";

$result = mysqli_query($con, $sql);
$data=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Sakshi Gupta - Web designer </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $data['name']?></a></h1>
      <h2>I'm a passionate <span><?php echo $data['title']?></span> from <?php echo $data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Project</a></li>
         
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links"> 
        <a href="#"  target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/sakshi_gupta__12?igsh=MWJremdwam1obGwwbQ=="  target="_blank"  class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://youtube.com/@sakshigupta6960?si=G8922__HC5MGcZLW"  target="_blank" class="linkedin"><i class="bi bi-youtube"></i></a>
        <a href="https://www.linkedin.com/in/sakshi-gupta-19b818225?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"  class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/guptasakshi14003"  target="_blank" class="linkedin"><i class="bi bi-github"></i></a>
       
      </div>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
  <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/sakshi.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic">
            Try to learn "hello-world" for my new "abcd". my passionate to create something new one.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>14 october 2003</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Linkedln Profile:</strong> <span ><a style="color:white;" href="www.sakshigupta.com">www.sakshigupta.com</a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>7415955689</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Shahdol (M.P.)</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor's of vocational education</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>E-mail:</strong> <span><a style="color:white;" href="guptsakshi14003@gmail.com">guptasakshi14003@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Experience:</strong> <span>Three months</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    
    <div class="counts container">
    <center>

      <div class="row">


        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="163" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>
      </center>
    </div>
    <!-- End Counts -->
    
    <!-- ======= Skills  ======= -->

    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-file-earmark-code" style="color: #ffbb2c;"></i>
            <h3>HTML</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-filetype-css" style="color: #5578ff;"></i>
            <h3>CSS</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-filetype-js" style="color: #e80368;"></i>
            <h3>Javascript</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="bi bi-flower2" style="color: #e361ff;"></i>
            <h3>React</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bi bi-file-code" style="color: #47aeff;"></i>
            <h3>Bootstrap</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bi bi-filetype-php style="color: #ffa76e;"></i>
            <h3>PHP</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bi bi-database-fill-lock" style="color: #11dbcf;"></i>
            <h3>MySQL</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bi bi-filetype-docx" style="color: #4233ff;"></i>
            <h3>Microsoft word</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bi bi-filetype-pptx" style="color: #b2904f;"></i>
            <h3>Microsoft powerpoint</h3>
          </div>
        </div>
        
      </div>

    </div>
    <!-- End skills -->

    <center><h3 style="color:aliceblue;">Thank You..!!!</h3>
  </section>
  <!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>Sakshi Gupta</h4>
            <p><em>"to learn"hello-world" for my new "abcd" and also to work with an organization where i can learn new skills and increase my abilities for the organizational goals as well as myself"</em></p>
            <p>
            <ul>
              <li>Shahpur (M.P.)</li>
              <li>7415955689</li>
              <li>guptasakshi14003@gmail.com</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Higher Secondary education</h4>
            <h5>2009-2020</h5>
            <p><em>Satguru Public Higher Secondary School, Shahdol (M.P.)</em></p>
            <p>"The lessons learned in the school days stay with the person forever as their guiding light.It's provide me with education apart from my physical and social development"</p>
          </div>
        </div>
          <div class="resume-item">
            <h4>Bachelor of vocational education</h4>
            <h5>2020- 2023</h5>
            <p><em>Indira Gandhi National Tribal University, Amarkantak(M.P.)</em></p>
            <p>"Central University has been the most important experience for me and also <br> i topped in my batch in that university. IGNTU provided me with explore to<br> new opportunities, new skills and confidence and a talanted peer to group <br>that never failed to inspire me."</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Experience</h3>
          <div class="resume-item">
            <h4>Web Development</h4>
            <h5>three Months (2020)</h5>
            <p><em>Dollop infotech Pvt. Ltd Company, Indore (M.P.)</em></p>
            <p>
            "During the intership, this company provide me an overview of the tasks and responsibilities were assigned. I worked on development based team project in |HTML|&nbsp; |CSS|&nbsp; |JS| &nbsp;|PHP with MySQL|"
            </p>
          </div>
          
        </div>
      </div>

    </div>
  </section>
  <!-- End Resume Section -->

  <!-- ======= project ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Project</h2>
        <p>My Project</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-person-raised-hand"></i></div>
            <h4><a href="">Quiz Game website</a></h4>
            <p></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-cart-fill"></i></div>
            <h4><a href="">Grocery E-commerce Website</a></h4>
            <p></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-train-front-fill"></i></div>
            <h4><a href="">Travel and tourism website</a></h4>
            <p></p>
          </div>
        </div>

        
      </div>

    </div>
  </section>
  <!-- End project -->

  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Shahpur Dist- Umaria (M.P.), 484001</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
            <a href="#"  target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.instagram.com/sakshi_gupta__12?igsh=MWJremdwam1obGwwbQ==" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://youtube.com/@sakshigupta6960?si=G8922__HC5MGcZLW"  target="_blank" class="linkedin"><i class="bi bi-youtube"></i></a>
              <a href="https://www.linkedin.com/in/sakshi-gupta-19b818225?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://github.com/guptasakshi14003"  target="_blank" class="linkedin"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p ><a style="color:white;" href="guptasakshi14003@gmail.com">guptasakshi14003@gmail.com</a></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+91 7415955689</p>
          </div>
        </div>
      </div>
      
      <form action="https://api.web3forms.com/submit" method="post" role="form" class="php-email-form mt-4">
        
        <div class="row">
        
          <div class="col-md-6 form-group">
         
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
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
        <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
        <input type="hidden" name="access_key" value="cf3fbda0-99b7-4020-bf8c-b549e87fcf16">
      </form>

    </div>
  </section>
  <!-- End Contact Section -->

  <div class="credits">
    Designed by <a href="index.php">Sakshi Gupta 2024</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--  JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>