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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Medikal - Health Care & Medical HTML5 Template</title>
    <meta
      name="keywords"
      content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Medikal,Health Care,Medikal - Health Care & Medical HTML5 Template"
    />
    <meta
      name="description"
      content="Medikal - Health Care & Medical HTML5 Template"
    />
    <meta name="author" content="M_Adnan" />

    <!-- FONTS ONLINE -->
    <link
      href="http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300"
      rel="stylesheet"
      type="text/css"
    />

    <!-- MAIN STYLE -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />

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
            <li class="facebook">
              <a href="#."><i class="fa fa-facebook"></i> </a>
            </li>
            <li class="twitter">
              <a href="#."><i class="fa fa-twitter"></i> </a>
            </li>
            <li class="dribbble">
              <a href="#."><i class="fa fa-dribbble"></i> </a>
            </li>
            <li class="instagram">
              <a href="#."><i class="fa fa-instagram"></i> </a>
            </li>
            <li class="googleplus">
              <a href="#."><i class="fa fa-google-plus"></i> </a>
            </li>
            <li class="pinterest">
              <a href="#."><i class="fa fa-pinterest"></i> </a>
            </li>
            <li class="linkedin">
              <a href="#."><i class="fa fa-linkedin"></i> </a>
            </li>
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
              <h3>Our Departments</h3>
              <p>Explore specialized medical departments dedicated to providing exceptional care and expertise, ensuring your health needs are met with precision and compassion.





              </p>
            </div>
          </div>
        </section>

        <!--======= INTRO =========-->
        <section class="intro">
          <div class="container">
            <div class="intro-in">
              <!--Title-->
              <div class="title">
                <h3>We are a team of dedicated healthcare professionals.</h3>
              </div>

              <!--Text Section-->
              <ul class="row">
                <li class="col-md-6">
                  <p>
                    At Medikal, we are committed to providing top-notch
                    healthcare services with a focus on your well-being. Our
                    team of experts is dedicated to ensuring your health and
                    comfort are our priorities.
                  </p>
                </li>
                <li class="col-md-6">
                  <p>
                    With state-of-the-art facilities and a compassionate
                    approach, we strive to make a positive impact on your health
                    journey. Explore our departments to discover specialized
                    care tailored to your needs.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!--======= DEPARTMENT SECTION =========-->
        <section class="depart-sec">
          <div class="container">
            <!-- ROW -->
            <ul class="row">
              <!-- DENTAL -->
              <li class="col-sm-4">
                <div class="in-dert">
                  <img src="images/icon-1.png" alt="" />
                  <h5>Dental</h5>

                  <!-- Hover Info -->
                  <div class="over-depart">
                    <img src="images/icon-1.png" alt="" />
                    <h5>Dental</h5>
                    <p>
                      Comprehensive dental care with a focus on your oral
                      health. Our experienced team ensures a comfortable and
                      personalized experience for every patient.
                    </p>
                  </div>
                </div>
              </li>

              <!-- Cardiology -->
              <li class="col-sm-4">
                <div class="in-dert">
                  <img src="images/icon-2.png" alt="" />
                  <h5>Cardiology</h5>

                  <!-- Hover Info -->
                  <div class="over-depart">
                    <img src="images/icon-2.png" alt="" />
                    <h5>Cardiology</h5>
                    <p>
                      Specialized cardiac care with a focus on heart health. Our
                      cardiology department is equipped to handle a range of
                      cardiovascular conditions with advanced diagnostic and
                      treatment options.
                    </p>
                  </div>
                </div>
              </li>

              <!-- For disabled -->
              <li class="col-sm-4">
                <div class="in-dert">
                  <img src="images/icon-3.png" alt="" />
                  <h5>For Disabled</h5>

                  <!-- Hover Info -->
                  <div class="over-depart">
                    <img src="images/icon-3.png" alt="" />
                    <h5>For Disabled</h5>
                    <p>
                      Support and specialized services for differently-abled
                      individuals. Our department is dedicated to enhancing
                      accessibility and providing inclusive healthcare
                      solutions.
                    </p>
                  </div>
                </div>
              </li>

              <!-- Ophthalmology -->
              <li class="col-sm-4">
                <div class="in-dert">
                  <img src="images/icon-4.png" alt="" />
                  <h5>Ophthalmology</h5>

                  <!-- Hover Info -->
                  <div class="over-depart">
                    <img src="images/icon-4.png" alt="" />
                    <h5>Ophthalmology</h5>
                    <p>
                      Comprehensive eye care services with a focus on vision
                      health. Our ophthalmology department offers advanced
                      treatments and surgeries for various eye conditions.
                    </p>
                  </div>
                </div>
              </li>

              <!-- Emergency -->
              <li class="col-sm-4">
                <div class="in-dert">
                  <img src="images/icon-5.png" alt="" />
                  <h5>Emergency</h5>

                  <!-- Hover Info -->
                  <div class="over-depart">
                    <img src="images/icon-5.png" alt="" />
                    <h5>Emergency</h5>
                    <p>
                      Rapid response and emergency medical services. Our
                      emergency department is equipped to handle urgent medical
                      situations, providing timely and efficient care.
                    </p>
                  </div>
                </div>
              </li>

              <!-- x-ray -->
              <li class="col-sm-4">
                <div class="in-dert">
                  <img src="images/icon-6.png" alt="" />
                  <h5>X-Ray</h5>

                  <!-- Hover Info -->
                  <div class="over-depart">
                    <img src="images/icon-6.png" alt="" />
                    <h5>X-Ray</h5>
                    <p>
                      Advanced imaging and diagnostic services. Our x-ray
                      department utilizes cutting-edge technology to provide
                      accurate and detailed medical imaging for diagnosis and
                      treatment planning.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <!--======= Contact Info =========-->
        <section class="contact-info">
          <div class="container">
            <!--Address-->
            <ul class="row">
              <li class="col-md-3">
                <i class="ion-ios-location-outline"></i>
                <h5>Address</h5>
                <p>Beirut - Hamra Street</p>
              </li>

              <!-- Hot line -->
              <li class="col-md-3">
                <i class="ion-iphone"></i>
                <h5>Hotline</h5>
                <p>+00-0122-123-0089</p>
              </li>

              <!--Email Contact-->
              <li class="col-md-3">
                <i class="ion-ios-email-outline"></i>
                <h5>Email contact</h5>
                <p>medikal@gmail.com</p>
                <p>contact@medikalclinic.com</p>
              </li>

              <!--Website-->
              <li class="col-md-3">
                <i class="ion-earth"></i>
                <h5>Website</h5>
                <p>www.medikalclinic.com</p>
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
                <img src="images/logo-white.png" alt="" />
                <p>
                  Welcome to Medikal, where your health is our priority. Our
                  dedicated team of professionals is committed to providing
                  quality care using the latest technologies and expertise. Your
                  well-being is at the heart of everything we do.
                </p>
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
