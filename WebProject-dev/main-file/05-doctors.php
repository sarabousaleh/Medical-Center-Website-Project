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
    <title>Medikal - Health Care &amp; Medical HTML5 Template</title>
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

    <!--MAIN STYLE-->
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
              <h3>Doctors</h3>
              <p>Meet our team of highly skilled professionals</p>

              <!--======= Breadcrumbs =========-->
              
            </div>
          </div>
        </section>

        <!--======= FOUNDER =========-->
        <section id="founder">
          <div class="container">
            
              <!--Tittle-->
              
                <div class="tittle">
                  <h2>Our Doctors</h2>
                </div>
                <p>
                  At the heart of our clinic’s pioneering spirit are our doctors, whose vision for comprehensive, empathetic, and advanced healthcare has shaped our services. At Medikal Center, we take pride in our team of dedicated and highly skilled healthcare professionals. Our doctors are committed to providing exceptional and compassionate care to every patient who walks through our doors. With a diverse range of specialties, our medical experts work collaboratively to ensure comprehensive and personalized healthcare services.
                </p>
                <br />
                </div>
            
          
            
          
           
          </div> <!--======= founder sliders =========-->
        </section>


          <!--======= DOCTOR LIST =========-->
          <div class="doctor-list">
            <div class="container">
              <!-- Soctor List Slider -->
              <div class="doct-list-style">
                <div class="item">
                  <a href="#pop-open" class="link popup-vedio video-btn"
                    ><img
                      class="img-responsive"
                      src="images/doc-img-1.jpg"
                      alt=""
                  /></a>
                </div>
                <div class="item">
                  <a href="#pop-open-1" class="link popup-vedio video-btn">
                    <img
                      class="img-responsive"
                      src="images/doc-img-2.jpg"
                      alt=""
                  /></a>
                </div>
                <div class="item">
                  <a href="#pop-open-2" class="link popup-vedio video-btn"
                    ><img
                      class="img-responsive"
                      src="images/doc-img-3.jpg"
                      alt=""
                  /></a>
                </div>
                <div class="item">
                  <a href="#pop-open-3" class="link popup-vedio video-btn"
                    ><img
                      class="img-responsive"
                      src="images/doc-img-4.jpg"
                      alt=""
                  /></a>
                </div>
                <div class="item">
                  <a href="#pop-open-4" class="link popup-vedio video-btn"
                    ><img
                      class="img-responsive"
                      src="images/doc-img-5.jpg"
                      alt=""
                  /></a>
                </div>
                <div class="item">
                  <a href="#pop-open-5" class="link popup-vedio video-btn"
                    ><img
                      class="img-responsive"
                      src="images/doc-img-6.jpg"
                      alt=""
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--======= POPUP DOCTOR =========-->
        <div id="pop-open" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <!-- Doctor Image -->
            <div class="col-sm-6 no-padding">
              <img class="img-responsive" src="images/doctor-1-1.jpg" alt="" />
            </div>
            <div class="col-md-6 no-padding">
              <div class="doctor-in">
                <h4>Dr. Olivia Bennett</h4>
                <span>X-ray</span>
                <!-- Personal Info -->
                <div class="personal-info">
                  <ul>
                    <li class="col-sm-4"><strong>Education </strong></li>
                    <li class="col-sm-8">MD, OB/GYN</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Experience </strong></li>
                    <li class="col-sm-8">2 years</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Office </strong></li>
                    <li class="col-sm-8">Office 12b, Hall A</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Work days </strong></li>
                    <li class="col-sm-8">Monday, Friday, Sunday</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Email </strong></li>
                    <li class="col-sm-8">oliviab@medikalclinic.com</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Training </strong></li>
                    <li class="col-sm-8">
                      Graduated from Harvard Medical School with a specialization in Internal Medicine. 
                    </li>
                  </ul>

                  <!-- Social Icon -->
                  <ul class="margin-t-20">
                    <li class="col-sm-4">
                      <strong class="t-10">Social info </strong>
                    </li>
                    <li class="col-sm-8">
                      <!-- Social Icons -->
                      <ul class="social_icons">
                        <li class="facebook">
                          <a href="#."><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="twitter">
                          <a href="#."><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="linkedin">
                          <a href="#."><i class="fa fa-linkedin"></i> </a>
                        </li>
                        <li class="googleplus">
                          <a href="#."><i class="fa fa-google-plus"></i> </a>
                        </li>
                        <li class="skype">
                          <a href="#."><i class="fa fa-skype"></i> </a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!-- View Table -->
                  <a href="07-timetable.html" class="table-link"
                    >View timetable <i class="fa fa-arrow-circle-o-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--======= POPUP DOCTOR =========-->
        <div id="pop-open-1" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <!-- Doctor Image -->
            <div class="col-sm-6 no-padding">
              <img class="img-responsive" src="images/doctor-2-2.jpg" alt="" />
            </div>
            <div class="col-md-6 no-padding">
              <div class="doctor-in">
                <h4>Dr. Benjamin Harris</h4>
                <span>Cardiology</span>
                <!-- Personal Info -->
                <div class="personal-info">
                  <ul>
                    <li class="col-sm-4"><strong>Education </strong></li>
                    <li class="col-sm-8">MD, OB/GYN</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Experience </strong></li>
                    <li class="col-sm-8">4 years</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Office </strong></li>
                    <li class="col-sm-8">Office 12b, Hall A</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Work days </strong></li>
                    <li class="col-sm-8">Monday, Friday, Sunday</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Email </strong></li>
                    <li class="col-sm-8">benH@medikalclinic.com</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Training </strong></li>
                    <li class="col-sm-8">
                      Completed his residency in Orthopedic Surgery at Cleveland Clinic
                    </li>
                  </ul>

                  <!-- Social Icon -->
                  <ul class="margin-t-20">
                    <li class="col-sm-4">
                      <strong class="t-10">Social info </strong>
                    </li>
                    <li class="col-sm-8">
                      <!-- Social Icons -->
                      <ul class="social_icons">
                        <li class="facebook">
                          <a href="#."><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="twitter">
                          <a href="#."><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="linkedin">
                          <a href="#."><i class="fa fa-linkedin"></i> </a>
                        </li>
                        <li class="googleplus">
                          <a href="#."><i class="fa fa-google-plus"></i> </a>
                        </li>
                        <li class="skype">
                          <a href="#."><i class="fa fa-skype"></i> </a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!-- View Table -->
                  <a href="07-timetable.html" class="table-link"
                  >View timetable <i class="fa fa-arrow-circle-o-right"></i
                ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pop-open-2" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <!-- Doctor Image -->
            <div class="col-sm-6 no-padding">
              <img class="img-responsive" src="images/doc-img-3.jpg" alt="" />
            </div>
            <div class="col-md-6 no-padding">
              <div class="doctor-in">
                <h4>Dr. Alexander Turner</h4>
                <span>Surgeon</span>
                <!-- Personal Info -->
                <div class="personal-info">
                  <ul>
                    <li class="col-sm-4"><strong>Education </strong></li>
                    <li class="col-sm-8">MD, OB/GYN</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Experience </strong></li>
                    <li class="col-sm-8">10 years</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Office </strong></li>
                    <li class="col-sm-8">Office 12b, Hall A</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Work days </strong></li>
                    <li class="col-sm-8">Monday, Friday, Sunday</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Email </strong></li>
                    <li class="col-sm-8">AlexanderTurnerr@medikalclinic.com</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Training </strong></li>
                    <li class="col-sm-8">
                      Graduated from the University of California, San Francisco, specializing in Neurology.
                    </li>
                  </ul>

                  <!-- Social Icon -->
                  <ul class="margin-t-20">
                    <li class="col-sm-4">
                      <strong class="t-10">Social info </strong>
                    </li>
                    <li class="col-sm-8">
                      <!-- Social Icons -->
                      <ul class="social_icons">
                        <li class="facebook">
                          <a href="#."><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="twitter">
                          <a href="#."><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="linkedin">
                          <a href="#."><i class="fa fa-linkedin"></i> </a>
                        </li>
                        <li class="googleplus">
                          <a href="#."><i class="fa fa-google-plus"></i> </a>
                        </li>
                        <li class="skype">
                          <a href="#."><i class="fa fa-skype"></i> </a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!-- View Table -->
                  <a href="07-timetable.html" class="table-link"
                    >View timetable <i class="fa fa-arrow-circle-o-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pop-open-3" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <!-- Doctor Image -->
            <div class="col-sm-6 no-padding">
              <img class="img-responsive" src="images/doc-img-4.jpg" alt="" />
            </div>
            <div class="col-md-6 no-padding">
              <div class="doctor-in">
                <h4>Dr. Emily Foster</h4>
                <span>Pediatrician</span>
                <!-- Personal Info -->
                <div class="personal-info">
                  <ul>
                    <li class="col-sm-4"><strong>Education </strong></li>
                    <li class="col-sm-8">MD, OB/GYN</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Experience </strong></li>
                    <li class="col-sm-8">8 years</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Office </strong></li>
                    <li class="col-sm-8">Office 12b, Hall A</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Work days </strong></li>
                    <li class="col-sm-8">Monday, Friday, Sunday</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Email </strong></li>
                    <li class="col-sm-8">Emilyfoster@medikalclinic.com</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Training </strong></li>
                    <li class="col-sm-8">
                      Completed her medical training at Johns Hopkins University, specializing in Pediatrics.
                    </li>
                  </ul>

                  <!-- Social Icon -->
                  <ul class="margin-t-20">
                    <li class="col-sm-4">
                      <strong class="t-10">Social info </strong>
                    </li>
                    <li class="col-sm-8">
                      <!-- Social Icons -->
                      <ul class="social_icons">
                        <li class="facebook">
                          <a href="#."><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="twitter">
                          <a href="#."><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="linkedin">
                          <a href="#."><i class="fa fa-linkedin"></i> </a>
                        </li>
                        <li class="googleplus">
                          <a href="#."><i class="fa fa-google-plus"></i> </a>
                        </li>
                        <li class="skype">
                          <a href="#."><i class="fa fa-skype"></i> </a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!-- View Table -->
                  <a href="07-timetable.html" class="table-link"
                    >View timetable <i class="fa fa-arrow-circle-o-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pop-open-4" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <!-- Doctor Image -->
            <div class="col-sm-6 no-padding">
              <img class="img-responsive" src="images/doc-img-5.jpg" alt="" />
            </div>
            <div class="col-md-6 no-padding">
              <div class="doctor-in">
                <h4>Dr. Sophia Rodriguez</h4>
                <span>Gynecolgist</span>
                <!-- Personal Info -->
                <div class="personal-info">
                  <ul>
                    <li class="col-sm-4"><strong>Education </strong></li>
                    <li class="col-sm-8">MD, OB/GYN</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Experience </strong></li>
                    <li class="col-sm-8">5 years</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Office </strong></li>
                    <li class="col-sm-8">Office 12b, Hall A</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Work days </strong></li>
                    <li class="col-sm-8">Monday, Friday, Sunday</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Email </strong></li>
                    <li class="col-sm-8">SophiaRodriguez@medikalclinic.com</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Training </strong></li>
                    <li class="col-sm-8">
                      Holds a degree in Obstetrics and Gynecology from Stanford University School of Medicine.
                    </li>
                  </ul>

                  <!-- Social Icon -->
                  <ul class="margin-t-20">
                    <li class="col-sm-4">
                      <strong class="t-10">Social info </strong>
                    </li>
                    <li class="col-sm-8">
                      <!-- Social Icons -->
                      <ul class="social_icons">
                        <li class="facebook">
                          <a href="#."><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="twitter">
                          <a href="#."><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="linkedin">
                          <a href="#."><i class="fa fa-linkedin"></i> </a>
                        </li>
                        <li class="googleplus">
                          <a href="#."><i class="fa fa-google-plus"></i> </a>
                        </li>
                        <li class="skype">
                          <a href="#."><i class="fa fa-skype"></i> </a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!-- View Table -->
                  <a href="07-timetable.html" class="table-link"
                    >View timetable <i class="fa fa-arrow-circle-o-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pop-open-5" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <!-- Doctor Image -->
            <div class="col-sm-6 no-padding">
              <img class="img-responsive" src="images/doc-img-6.jpg" alt="" />
            </div>
            <div class="col-md-6 no-padding">
              <div class="doctor-in">
                <h4>Dr. William Parker</h4>
                <span>Emergency</span>
                <!-- Personal Info -->
                <div class="personal-info">
                  <ul>
                    <li class="col-sm-4"><strong>Education </strong></li>
                    <li class="col-sm-8">MD, OB/GYN</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Experience </strong></li>
                    <li class="col-sm-8">5 years</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Office </strong></li>
                    <li class="col-sm-8">Office 12b, Hall A</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Work days </strong></li>
                    <li class="col-sm-8">Monday, Friday, Sunday</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Email </strong></li>
                    <li class="col-sm-8">WilliamParker@medikalclinic.com</li>
                  </ul>
                  <ul>
                    <li class="col-sm-4"><strong>Training </strong></li>
                    <li class="col-sm-8">
                      Completed his training in Emergency Medicine at New York-Presbyterian Hospital.
                    </li>
                  </ul>

                  <!-- Social Icon -->
                  <ul class="margin-t-20">
                    <li class="col-sm-4">
                      <strong class="t-10">Social info </strong>
                    </li>
                    <li class="col-sm-8">
                      <!-- Social Icons -->
                      <ul class="social_icons">
                        <li class="facebook">
                          <a href="#."><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="twitter">
                          <a href="#."><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="linkedin">
                          <a href="#."><i class="fa fa-linkedin"></i> </a>
                        </li>
                        <li class="googleplus">
                          <a href="#."><i class="fa fa-google-plus"></i> </a>
                        </li>
                        <li class="skype">
                          <a href="#."><i class="fa fa-skype"></i> </a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!-- View Table -->
                  <a href="07-timetable.html" class="table-link"
                    >View timetable <i class="fa fa-arrow-circle-o-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--======= Contact Info =========-->
        <section class="contact-info">
          <div class="container">
            <!--Address-->
            <ul class="row">
              <li class="col-md-3">
                <i class="ion-ios-location-outline"></i>
                <h5>Address</h5>
                <p>1800 Abbot Kinney Blvd. Unit D & E Venice, CA 90291</p>
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
