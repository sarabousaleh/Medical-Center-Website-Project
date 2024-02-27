<?php
// Check if the user is authenticated
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not authenticated
    header("Location: login.php");
    exit();
}
if (isset($_GET['logout'])) {
  // Clear all session variables
  $_SESSION = array();

  // Destroy the session
  session_destroy();

  // Redirect to the login page after logout
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Medikal - Health Care &amp; Medical HTML5 Template</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Medikal,Health Care,Medikal - Health Care & Medical HTML5 Template">
<meta name="description" content="Medikal - Health Care & Medical HTML5 Template">
<meta name="author" content="M_Adnan">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  

  <!-- TOP BAR ===========================================-->
  <div class="top-bar light">
    <div class="container">
      <ul class="pull-left">
        <li><a href="index.html">Welcome To Our Medikal Center</a></li>
      </ul>
      
      <!-- SOCIAL ICONS ===========================================-->
      <ul class="social_icons">
        <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
        <li class="instagram"><a href="#."><i class="fa fa-instagram"></i> </a></li>
        <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
        <li class="pinterest"><a href="#."><i class="fa fa-pinterest"></i> </a></li>
        <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
      </ul>
    </div>
  </div>
  <!-- HEADER ===========================================-->
  <header class="navbar-fixed-top">
    <div class="container"> 
      <!--======= LOGO =========-->
      <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="" ></a> </div>
      <!--======= NAVIGATION =========-->
      <nav class="webimenu"> 
        <!-- MENU BUTTON RESPONSIVE -->
        <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
        <ul class="ownmenu">
          <li class="active"><a href="index.php">Home</a>
          </li>
          <li><a href="02-about-us.php">About</a>
          </li>
          <li><a href="services.php">SERVICES </a>
          </li>
          <li><a href="03-department.php">Department </a> </li>

          <li> <a href= "05-doctors.php"> Doctors </a></li>
          
          <li><a href="07-timetable.php">Timetable </a>
  
          </li>
          <li><a href="10-shop.php">Shop</a> 
              </li>
            
          </li>
          <li><a href="12-contact.php">Contact</a> </li>
          <li><a href="?logout" onclick="logout()">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <script>
    // Function to handle logout
    function logout() {
      // You can perform any necessary logout actions here, such as clearing session data.
      // After logout actions, redirect the user to the login page.
      window.location.href = "login.php";
    }
  </script>
  <!--======= CONTENT =========-->
  <div class="content fix-nav-space"> 
    
    <!--======= ABOUT US =========-->
    <div class="about-us"> 
      
      <!--======= TIME LINE SECTION =========-->
      <div class="time-line-sec">
        <div class="container">
          <div class="row"> 
            
            <!-- Text Section -->
            <div class="col-md-8">
              <h2>Hi, we are <span>Medikal</span> We care about
                your heath!</h2>
              
              <!-- Timeline Start -->
              <ul class="time-line">
                
                <!-- 2009 -->
                <li class="row">
                  <div class="col-xs-3 text-right">
                    <h3>2009</h3>
                  </div>
                  <div class="col-xs-9">
                    <p> Medikal was founded with the vision of creating a healthcare service that puts patients first </p>
                  </div>
                </li>
                
                <!-- 2012 -->
                <li class="row">
                  <div class="col-xs-3 text-right">
                    <h3>2012</h3>
                  </div>
                  <div class="col-xs-9">
                    <p>We expanded our services to include advanced surgical procedures. </p>
                  </div>
                </li>
                
                <!-- 2014 -->
                <li class="row">
                  <div class="col-xs-3 text-right">
                    <h3>2014</h3>
                  </div>
                  <div class="col-xs-9">
                    <p>Medikal became recognized for our groundbreaking research in medical science.</p>
                  </div>
                </li>
                
                <!-- 2015 -->
                <li class="row">
                  <div class="col-xs-3 text-right">
                    <h3>2015</h3>
                  </div>
                  <div class="col-xs-9">
                    <p>We launched our community health program, extending care to underprivileged areas. </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--======= Gallery =========-->
    <section class="gallery">
      <div id="container">
        <ul>
          <!-- Item 1 -->
          <li class="col-sm-6 item-mas"> 
            <!-- Image --> 
            <img class="img-responsive" src="images/gallery-img-1.jpg" alt=""> 
            <!-- Image Hove -->
            <div class="over-gallery"> 
              <!-- Hove Details -->
              <div class="details">
                <h4>Emergency department</h4>
                
              </div>
            </div>
          </li>
          
          <!-- Item 2 -->
          <li class="col-sm-3 item-mas"> <img class="img-responsive" src="images/gallery-img-2.jpg" alt=""> 
            <!-- Image Hove -->
            <div class="over-gallery"> 
              <!-- Hove Details -->
              <div class="details">
                <h4>Emergency department</h4>
                
              </div>
            </div>
          </li>
          <!-- Item 3 -->
          <li class="col-sm-3 item-mas"> <img class="img-responsive" src="images/gallery-img-3.jpg" alt=""> 
            <!-- Image Hove -->
            <div class="over-gallery"> 
              <!-- Hove Details -->
              <div class="details">
                <h4>Emergency department</h4>
                
              </div>
            </div>
          </li>

          <!-- Item 4 -->
          <li class="col-sm-3 item-mas"> <img class="img-responsive" src="images/gallery-img-4.jpg" alt=""> 
            <!-- Image Hove -->
            <div class="over-gallery"> 
              <!-- Hove Details -->
              <div class="details">
                <h4>Emergency department</h4>
                
              </div>
            </div>
          </li>
          <!-- Item 5 -->
          <li class="col-sm-3 item-mas"> <img class="img-responsive" src="images/gallery-img-5.jpg" alt=""> 
            <!-- Image Hove -->
            <div class="over-gallery"> 
              <!-- Hove Details -->
              <div class="details">
                <h4>Emergency department</h4>
                
              </div>
            </div>
          </li>
       
        </ul>
      </div>
    </section>
    
    <!--======= Our Services =========-->
    <div id="services" class="services-about">
      <div class="container">
        <div class="row"> 
          
          <!-- Tittle -->
          <div class="col-lg-4 padding-r-80">
            <div class="tittle">
              <h2>Our Sevices</h2>
            </div>
            <p> Our services range from general health check-ups to specialized treatments. We pride ourselves on our state-of-the-art facilities, which include the latest in medical technology. Our services are designed to cater to the unique needs of each patient </p>
          </div>
          
          <!--======= founder sliders =========-->
          <div class="col-lg-8">
            <div class="services-slide"> 
              
              <!-- Slider 1 -->
              <div class="slide sec-ser"> <i class="fa fa-tint"></i>
                <h6>Blood Bank</h6>
                <p> Our state-of-the-art blood bank is committed to saving lives by providing a safe and adequate supply of blood and blood components. We adhere to stringent safety standards to ensure the well-being of both donors and recipients. Join us in our mission to support the community in times of need.</p>
              </div>
              
              <!-- Slider 2 -->
              <div class="slide sec-ser"> <i class="fa fa-stethoscope"></i>
                <h6>Full Stethoscope</h6>
                <p>With our comprehensive diagnostic services, we ensure that every heartbeat tells its story. Our full stethoscope service includes thorough cardiac assessments conducted by our skilled professionals to monitor your heart's health and detect any concerns early on.</p>
              </div>
              
              <!-- Slider 2 -->
              <div class="slide sec-ser"> <i class="fa fa-wheelchair"></i>
                <h6>For Disable</h6>
                <p>We provide comprehensive support and services tailored for disabled individuals. From accessible facilities to specialized care programs, we strive to empower our disabled patients with independence and quality healthcare</p>
              </div>
              
              <!-- Slider 2 -->
              <div class="slide sec-ser"> <i class="fa fa-heartbeat"></i>
                <h6>Heart Specialest</h6>
                <p>Our Heart Specialist is at the forefront of cardiovascular care, offering expertise in diagnosing, treating, and preventing heart and blood vessel diseases. Our cardiologist is equipped with advanced diagnostic technology to evaluate heart function and provide personalized treatment plans. From managing high blood pressure and cholesterol to performing intricate procedures, our specialist ensures comprehensive care for your heart health</p>
              </div>
              
              <!-- Slider 2 -->
              <div class="slide sec-ser"> <i class="fa fa-user-md"></i>
                <h6>Exprienced Doctors</h6>
                <p>Our clinic is proud to have an experienced doctor who brings over two decades of medical expertise to our patients. With a steadfast commitment to patient care, our doctor has a proven track record of excellence in diagnosing and treating a wide range of medical conditions. Renowned for their compassionate approach, the doctor has also been at the forefront of implementing innovative treatments and contributing to medical research. Their extensive knowledge ensures that our patients receive care that is both current and reliable, rooted in years of practice and continuous learning.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--======= TESTIMONILAS =========-->
    <section id="prople-says">
      <div class="overlay">
        <div class="container"> 
          
          <!--======= TITTLE =========-->
          <div class="tittle tittle-2 ">
            <h3>what patients say about us</h3>
          </div>
          <div class="qou"> <i class="fa fa-quote-left"></i> <i class="fa fa-quote-right"></i> </div>
          <div class="testi">
            <div class="testi-slide">
              <div class="item">
                <p>My experience with the Ophthalmology Department was exceptional. The doctors were thorough and explained each procedure clearly, which eased my nerves about my cataract surgery. The care I received was top-notch, and the improvement in my vision is remarkable. I’m deeply thankful to the entire team for their professionalism and kindness throughout my treatment. Highly recommend to anyone in need of eye care. </p>
                <div class="avatar"><img src="images/avatar-1.jpg" alt="" ></div>
                <h5>JOHN CONNER</h5>
                <span>Ophthalmology DEPARTMENT</span> </div>

              <div class="item">
                <p> Going to the dentist has always been a challenge for me, but the team at the Dental Department changed that with their compassionate approach. Every step of my treatment, from routine cleanings to a complex root canal, was performed with utmost care and precision. The staff's attention to detail and commitment to patient comfort turned my dental health around. I'm truly grateful for their exceptional service and the bright smile they've given me! </p>
                <div class="avatar"><img src="images/avatar-2.jpg" alt="" ></div>
                <h5>JANE DEAN </h5>
                <span>DENTAL DEPARTMENT</span> </div>

                <div class="item">
                <p>Exceptional service! The medical center staff is professional, caring, and truly dedicated to patient well-being. I highly recommend their services. </p>
                <div class="avatar"><img src="images/avatar-3.jpg" alt="" ></div>
                <h5>Alice Thompson</h5>
                <span>Patient</span> </div>
                
              <div class="item">
                <p>I had a great experience at the medical center. The doctors and nurses were friendly, and the facilities were top-notch. Thank you for the excellent care! </p>
                <div class="avatar"><img src="images/avatar-4.jpg" alt="" ></div>
                <h5>Robert Parker </h5>
                <span>Patient</span> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Contact Info =========-->
    <section class="contact-info">
      <div class="container"> 
        
        <!--Address-->
        <ul class="row">
          <li class="col-md-3"> <i class="ion-ios-location-outline"></i>
            <h5>Address</h5>
            <p>1800 Abbot Kinney Blvd. Unit D & E
              Venice, CA 90291</p>
          </li>
          
          <!-- Hot line -->
          <li class="col-md-3"> <i class="ion-iphone"></i>
            <h5>Hotline</h5>
            <p>+00-0122-123-0089</p>
          </li>
          
          <!--Email Contact-->
          <li class="col-md-3"> <i class="ion-ios-email-outline"></i>
            <h5>Email contact</h5>
            <p>medikal@gmail.com</p>
            <p> contact@medikalclinic.com</p>
          </li>
          
          <!--Website-->
          <li class="col-md-3"> <i class="ion-earth"></i>
            <h5>Website</h5>
            <p>www.medikalclinic.com </p>
          </li>
        </ul>
      </div>
    </section>
  </div>
  
  <!--======= FOOTER =========-->
  <footer>
    <div class="container"> 
        <!-- Row -->
        <div class="row"> 
            <!-- About Us -->
            <div class="col-md-6">
                <div class="small-info"> 
                    <img src="images/logo-white.png" alt="">
                    <p>Welcome to Medikal, where your health is our priority. Our dedicated team of professionals is committed to providing quality care using the latest technologies and expertise. Your well-being is at the heart of everything we do.</p>
                </div>
            </div>
            
            <!-- Patient Guide and Timing -->
            <div class="col-md-6">
                <!-- Patient Guide -->
                <div class="links text-center">
                    <h5>Patient Guide</h5>
                    <ul>
                        <li><a href="05-doctors.php">Choosing a doctor</a></li>
                        <li><a href="appointment.html"> Book an appointment</a></li>
                        <li><a href="10-shop.html"> View Shop</a></li>
                        <li><a href="services.html"> View Services</a></li>
                        <li><a href="12-contact.html"> Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Timing -->
                <div class="timing text-center">
                    <h5>Opening Hours</h5>
                    <p>Monday to Friday: <span>8:00 am to 7:00 pm</span></p>
                    <p>Saturday & Sunday: <span>9:00 am to 5:00 pm</span></p>
                </div>
            </div>
        </div>
    </div>
  </footer>
</div>
<!-- Wrap End --> 
<script src="js/jquery-1.11.0.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/own-menu.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.superslides.js"></script> 
<script src="js/masonry.pkgd.min.js"></script> 
<script src="js/jquery.stellar.min.js"></script> 
<script src="js/jquery-ui-1.10.3.custom.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/appointment.js"></script> 
<script src="js/jquery.downCount.js"></script>
<script src="js/counter.js"></script> 
<script src="js/main.js"></script>
</body>
</html>