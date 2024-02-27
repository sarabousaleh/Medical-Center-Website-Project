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
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner" data-stellar-background-ratio="0.5">
      <div class="overlay">
        <div class="container">
          <h3>online shop</h3>
          <p>Welcome to the Medikal Center Shop, where we strive to provide more than just products – we offer a curated selection of items aimed at enhancing your health and well-being. Our shop is designed to complement your healthcare journey, offering a range of carefully chosen products to meet your needs.</p>

          <!--======= Breadcrumbs =========-->
          
        </div>
      </div>
    </section>
    
    <!--======= SHOP =========-->
    <section class="shop shop-pages dep-detail-page">
      <div class="container">
        <div class="shop-page">
          <div class="row"> 
            <!--======= SHOP PRODUCTS =========-->
            <div class="col-md-9">
              <div class="items"> 
                
                <!--======= ITEM ROW =========-->
                <ul class="row">
                  <!--======= ITEM 1 =========-->
                  <li class="col-sm-4"> 
                    <!-- Image -->
                    <div class="img"> <img src="images/shop-img-1.jpg" alt="" > 
                      <!-- Hover Info -->
                      <div class="over-info">
                        <h6>Wheel Chair</h6>
                        <span> $230.99</span>
                        <p>Our wheelchairs offer a reliable and smooth transportation solution for those in need.</p>
                        <a href="#."><i class="fa fa-heart"></i></a> <a href="#."><i class="fa fa-shopping-cart"></i></a> <a href="#."><i class="fa fa-search-plus"></i></a></div>
                      <!-- Items Detail -->
                      <div class="items-details">
                        <h6>Wheelchair</h6>
                        <span> $230.99</span> </div>
                    </div>
                  </li>
                  
                  <!--======= ITEM 2 =========-->
                  <li class="col-sm-4"> 
                    <!-- Image -->
                    <div class="img"> <img src="images/shop-img-2.jpg" alt="" > 
                      <!-- Hover Info -->
                      <div class="over-info">
                        <h6>Medical Devices</h6>
                        <span> $20.99</span>
                        <p> Our medical devices, ensuring precision, reliability, and advanced technology for optimal healthcare outcomes.</p>
                        <a href="#."><i class="fa fa-heart"></i></a> <a href="#."><i class="fa fa-shopping-cart"></i></a> <a href="#."><i class="fa fa-search-plus"></i></a></div>
                      <!-- Items Detail -->
                      <div class="items-details">
                        <h6>Medical Devices</h6>
                        <span> $20.99</span> </div>
                    </div>
                  </li>
                  
                  <!--======= ITEM 3 =========-->
                  <li class="col-sm-4"> 
                    <!-- Image -->
                    <div class="img"> <img src="images/shop-img-3.jpg" alt="" > 
                      <!-- Hover Info -->
                      <div class="over-info">
                        <h6>Digital Thermometer</h6>
                        <span> $30.99</span>
                        <p>Discover accurate and efficient temperature monitoring with our state-of-the-art digital thermometers.</p>
                        <a href="#."><i class="fa fa-heart"></i></a> <a href="#."><i class="fa fa-shopping-cart"></i></a> <a href="#."><i class="fa fa-search-plus"></i></a></div>
                      <!-- Items Detail -->
                      <div class="items-details">
                        <h6>Digital Thermometer</h6>
                        <span> $30.99</span> </div>
                    </div>
                  </li>
                </ul>
                
                <!--======= ITEM ROW =========-->
                <ul class="row">
                  
                  <!--======= ITEM 1 =========-->
                  <li class="col-sm-4"> 
                    <!-- Image -->
                    <div class="img"> <img src="images/shop-img-4.jpg" alt="" > 
                      <!-- Hover Info -->
                      <div class="over-info">
                        <h6>Digital Sphygmomanometer</h6>
                        <span> $90.99</span>
                        <p>Recise blood pressure measurements with our Digital Sphygmomanometer, combining advanced technology and user-friendly design for reliable health monitoring.</p>
                        <a href="#."><i class="fa fa-heart"></i></a> <a href="#."><i class="fa fa-shopping-cart"></i></a> <a href="#."><i class="fa fa-search-plus"></i></a></div>
                      <!-- Items Detail -->
                      <div class="items-details">
                        <h6>Digital Sphygmomanometer</h6>
                        <span> $90.99</span> </div>
                    </div>
                  </li>
                  
                  <!--======= ITEM 2 =========-->
                  <li class="col-sm-4"> 
                    <!-- Image -->
                    <div class="img"> <img src="images/shop-img-5.jpg" alt="" > 
                      <!-- Hover Info -->
                      <div class="over-info">
                        <h6>Insulin Cool Wallets</h6>
                        <span> $19.99</span>
                        <p>Keep your insulin safe and at the right temperature on the go with our Insulin Cool Wallets</p>
                        <a href="#."><i class="fa fa-heart"></i></a> <a href="#."><i class="fa fa-shopping-cart"></i></a> <a href="#."><i class="fa fa-search-plus"></i></a></div>
                      <!-- Items Detail -->
                      <div class="items-details">
                        <h6>Insulin Cool Wallets</h6>
                        <span> $19.99</span> </div>
                    </div>
                  </li>
                  
                  <!--======= ITEM 3 =========-->
                  <li class="col-sm-4"> 
                    <!-- Image -->
                    <div class="img"> <img src="images/shop-img-6.jpg" alt="" > 
                      <!-- Hover Info -->
                      <div class="over-info">
                        <h6>Medical Walker - IIA</h6>
                        <span> $200.99</span>
                        <p>Move confidently through your daily activities, ensuring comfort and independence in every step.</p>
                        <a href="#."><i class="fa fa-heart"></i></a> <a href="#."><i class="fa fa-shopping-cart"></i></a> <a href="#."><i class="fa fa-search-plus"></i></a></div>
                      <!-- Items Detail -->
                      <div class="items-details">
                        <h6>Medical Walker - IIA</h6>
                        <span> $200.99</span> </div>
                    </div>
                  </li>
                </ul>
                
                <!--======= ITEM ROW =========-->
                
                
                <!--======= PAGINATION =========-->
                
              </div>
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