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
  
  <!--======= BANNER =========-->
  <div id="banner" class="full-screen">
    <div class="main-bnr">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 no-padding"> 
            
            <!--======= BANNER TEXT =========-->
            <div class="main-bnr-text">
              <h5>Hello, We are Medikal!!</h5>
              <h1>We Care About Your Health</h1>
              <p> Welcome to Medikal - Your Wellness, Our Mission. At Medikal, we believe that good health is the foundation of vibrant lives, thriving communities, and forward progress. That’s why we have dedicated ourselves to the care of our patients and the betterment of their health. Our team of dedicated professionals is ready to listen to your concerns and work with you to ensure the best outcomes for your health and wellbeing. Let’s take the first step together towards a healthier you. Book your appointment with us today and experience healthcare that’s personal, accessible, and tailored to your needs. </p>
              <!--======= BUTTON =========--> 
              <a href="#." class="btn btn-1">Make an appoitment</a> </div>
          </div>
          
          <!--======= BANNER BACKGROUND IMAGE =========-->
          <div class="col-md-6 no-padding main-bnr-bg" data-stellar-background-ratio="0.5"> </div>
        </div>
      </div>
      <div class="go-down scroll"> <a href="#why-choose"><i class="ion-ios-arrow-down"></i></a> </div>
    </div>
  </div>
  
  <!--======= CONTENT =========-->
  <div class="content"> 
    
    <!--======= WHY CHOOSE US =========-->
    <div id="why-choose">
      <div class="container">
        <div class="row"> 
          
          <!--Tittle-->
          <div class="col-lg-3">
            <div class="tittle">
              <h2>Why Choose Us</h2>
            </div>
          </div>
          
          <!-- Services Row -->
          <div class="col-lg-9">
            <ul class="row">
              
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Medical Counseling</h6>
                <p>Receive personalized and compassionate medical counseling from our experienced team of healthcare professionals. We prioritize understanding your unique needs, providing guidance, and ensuring you make informed decisions about your health. </p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Professional services</h6>
                <p>Our commitment to excellence is reflected in the professional services we offer. From cutting-edge treatments to a seamless patient experience, our dedicated staff maintains the highest standards to deliver quality healthcare with a focus on your well-being. </p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>24 Hours service</h6>
                <p>Health concerns don't adhere to regular business hours, and neither do we. Our medical center operates around the clock to provide you with 24-hour service, ensuring you have access to care whenever you need it, day or night. </p>
              </li>
            </ul>
            <ul class="row">
              
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Qualified medical facilities</h6>
                <p>Trust in our state-of-the-art medical facilities equipped with advanced technology and a comprehensive range of services. We are dedicated to maintaining the highest standards of hygiene, safety, and quality in all our facilities to support your health journey.</p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Top level doctors</h6>
                <p>Benefit from the expertise of our top-level doctors, renowned in their respective fields. Our medical professionals bring a wealth of experience, innovation, and a commitment to excellence, ensuring you receive the best possible care tailored to your specific health needs. </p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Dedicated patient care</h6>
                <p>Experience a patient-centric approach with our dedicated team committed to your well-being. From the moment you step through our doors, expect personalized attention, clear communication, and compassionate care that puts you at the center of your health journey. </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Image Responsive -->
      <div class="text-center"> <img class="img-responsive" src="images/why-choose-img.jpg" alt=""> </div>
    </div>
    
    <!--======= SERVICES =========-->
    <section id="services">
      <div class="container-fluid">
        <ul class="row">
          <li class="col-md-3"> <i class="fa fa-heartbeat"></i>
            <h5 >Heart  Rate Monitoring</h5>
            <p style="font-size: 16px;">Prioritize your cardiovascular health with our cutting-edge heart rate monitoring services. Our advanced technology allows for precise and real-time tracking of your heart rate, enabling our healthcare professionals to provide personalized insights and recommendations for your well-being.</p>
          </li>
          <li class="col-md-3"> <i class="fa fa-stethoscope"></i>
            <h5 >Patient Education Programs</h5>
            <p >Knowledge is key to maintaining good health. Engage in our patient education programs designed to empower you with valuable information about your health and wellness. We believe informed patients make healthier choices, and our programs aim to enhance your understanding of preventive measures and lifestyle choices.</p>
          </li>
          <li class="col-md-3"> <i class="fa fa-user-md"></i>
            <h5 >Telemedicine Services</h5>
            <p style="font-size: 15px;">Access healthcare from the comfort of your home with our telemedicine services. Consult with our qualified medical professionals virtually, allowing for prompt medical advice, prescription refills, and follow-ups without the need for a physical visit. Experience the convenience of healthcare at your fingertips.</p>
          </li>
          <li class="col-md-3"> <i class="fa fa-ambulance"></i>
            <h5>Emergency Services</h5>
            <p style="font-size: 15px;">Your safety is always our top priority, so our medical center is equipped to handle emergencies efficiently with a responsive emergency team. Whether it's a sudden illness, injury, or any urgent medical situation, rest assured that our dedicated professionals are ready 24/7 to provide immediate care.</p>
          </li>
        </ul>
      </div>
    </section>
    
    <!--======= FOUNDER =========-->
    <br/><br/><br/><br/>
    <br/><br/><br/><br/>
    
    <!--======= Department =========-->
    <section class="department"> 
      
      <!-- Tab Panel -->
      <div role="tabpanel">
        <div class="dep-sec-nav ab-cnter"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#depart" aria-controls="home" role="tab" data-toggle="tab">OverView</a></li>
            <li role="presentation"><a href="#dental" aria-controls="home" role="tab" data-toggle="tab">Dental</a></li>
            <li role="presentation"><a href="#cardiology" aria-controls="profile" role="tab" data-toggle="tab">Cardiology </a></li>
            <li role="presentation"><a href="#for-disabled" aria-controls="messages" role="tab" data-toggle="tab">For disabled </a></li>
            <li role="presentation"><a href="#ophthalmology" aria-controls="settings" role="tab" data-toggle="tab">Ophthalmology </a></li>
            <li role="presentation"><a href="#emergency" aria-controls="settings" role="tab" data-toggle="tab"> Emergency </a></li>
            <li role="presentation"><a href="#x-ray" aria-controls="settings" role="tab" data-toggle="tab"> X-ray</a></li>
          </ul>
        </div>
        
        <!-- Tab Content -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="depart"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="depart-bg-over"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt text-left">
              <div class="tittle">
                <h2>Our Departments</h2>
              </div>
              <p>Welcome to Medikal, where a comprehensive array of specialized departments converges to provide top-tier healthcare solutions. Our diverse departments are meticulously crafted to address a spectrum of medical needs, ensuring that every aspect of your health journey is met with expertise and care. From diagnostics and treatment to rehabilitation and ongoing wellness, each department at [Medical Center's Name] plays a vital role in our commitment to holistic healthcare.</p>
              <br>
              <p>At Medikal, we take pride in our seamlessly integrated departments that work collaboratively to offer a multidisciplinary approach to healthcare. Whether you're seeking the latest in medical technology, personalized patient care, or a focus on preventive measures, our departments stand ready to exceed your expectations. Explore the breadth of our specialized services designed to cater to the unique requirements of every individual, embodying our dedication to fostering a healthier community.</p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="services-1.html" class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="12-contact.html" class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- Dental Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="dental"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="dentel-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Dental</h2>
              </div>
             
              <p>Discover unparalleled dental care at Medikal. Our dynamic team of young professionals is fueled by a shared passion for transforming smiles. We operate in a friendly and efficient environment, utilizing the latest technologies to make precise diagnoses and implement cutting-edge therapies. Your oral health is our priority, and we strive to create a warm atmosphere where expertise meets personalized care.</p>
              <br>
              <p>Our commitment extends beyond routine procedures – we focus on fostering a comfortable experience for our patients, embracing innovative approaches for diagnosis and treatment. </p>
              <!-- Small Facts -->
              <ul class="fact row">
              <br>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Qualified Dental Professionals</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Comfortable and Homely Services</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Dental Care</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Efficient Services Saving Time and Money</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Ongoing Dental Research Initiatives</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Comprehensive Dental Care</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Expert Medical Consulting for Dental Concerns</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Dedicated Dental Blood Bank Services</p>
                </li>
            </ul>
              <!-- BTN --> 
              <a href="services-1.html" class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="12-contact.html" class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- Cardiology Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="cardiology"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="cardio-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Cardiology</h2>
              </div>
              
              <p>Embark on a journey to heart health with our renowned Cardiology Department at Medikal. Our team of dedicated professionals, equipped with the latest advancements in cardiovascular care, passionately strives to safeguard your heart's well-being. In a setting that prioritizes warmth and efficiency, we utilize cutting-edge technologies to diagnose and implement advanced therapies, ensuring comprehensive cardiac care for every patient.</p>
              <br>
              <p>Going beyond routine cardiac services, we focus on creating a compassionate experience for our patients. Our commitment to excellence in diagnosis and treatment reflects in our approach to cardiology. </p>
              <ul class="fact row">
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Skilled Cardiologists and Specialists</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Comfortable and Supportive Cardiac Services</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Cardiac Care</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Efficient Services Saving Time and Ensuring Precision</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Active Participation in Cardiac Research</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Comprehensive Cardiac Care</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Expert Medical Consulting for Cardiac Concerns</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Dedicated Cardiac Blood Bank Services</p>
                </li>
            </ul>
              <!-- BTN --> 
              <a href="services-1.html" class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="12-contact.html" class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- For-Disabled Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="for-disabled"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="for-dis-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>For Disabled</h2>
              </div>
              <p>Experience compassionate care at Medikal's Rehabilitation Services department, dedicated to empowering individuals with disabilities on their journey to recovery and enhanced well-being. Our team of experts, passionate about making a positive impact, employs a patient-centric approach, utilizing advanced therapies and adaptive technologies to tailor rehabilitation programs for each unique individual.</p>
              <br>
              <p>Our commitment extends beyond traditional rehabilitation services. We create an inclusive and supportive environment where individuals with disabilities receive personalized attention. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
    <!-- Small Facts -->
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Experienced Rehabilitation Specialists</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Adaptive and Inclusive Services</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>24x7 Support for Individuals with Special Needs</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Efficient and Personalized Rehabilitation Programs</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Engagement in Research for Enhanced Services</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Comprehensive Disability Care</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Expert Medical Consulting for Special Needs</p>
                </li>
                <li class="col-sm-6">
                    <p><i class="ion-erlenmeyer-flask"></i>Dedicated Support Services</p>
                </li>
            </ul>
              <!-- BTN --> 
              <a href="services-1.html" class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="12-contact.html" class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- Ophthalmology Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="ophthalmology"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="opth-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Ophthalmology</h2>
              </div>
              <p>Step into clarity and precision with the Ophthalmology Department at Medikal. Our team of dedicated eye care specialists is committed to preserving and enhancing your vision. In a setting that blends expertise with compassion, we employ cutting-edge technologies for accurate diagnoses and advanced treatments. Your vision health is our priority, and we strive to create an environment where precision meets personalized care.</p>
              <br>
              <p>Going beyond routine eye care, we focus on providing a comprehensive range of services to address diverse ophthalmic needs.</p>
    <!-- Small Facts -->
    <ul class="fact row">
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Expert Ophthalmologists and Specialists</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>State-of-the-Art Diagnostic Services</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Eye Care</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Efficient Services Saving Time and Ensuring Precision</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Active Participation in Ophthalmic Research</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Comprehensive Eye Care Services</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Expert Medical Consulting for Ophthalmic Concerns</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Dedicated Eye Bank Services</p>
        </li>
    </ul>
              <!-- BTN --> 
              <a href="services-1.html" class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="12-contact.html" class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
      
          </div>
          
          <!-- Emergency Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="emergency"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="emer-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Emergency</h2>
              </div>
              <p>At Medikal, our Emergency Medicine Department stands as a beacon of immediate care and life-saving interventions. Our dedicated team of emergency medical professionals works around the clock, providing swift and decisive care when seconds count. Equipped with state-of-the-art facilities, we ensure rapid diagnosis and efficient treatment in critical situations, delivering the highest standard of emergency medical services.</p>
      <p>Our commitment extends beyond the urgent. We prioritize compassion and empathy, creating a reassuring environment for patients and their families during moments of crisis.</p>
    <!-- Small Facts -->
    <ul class="fact row">
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Expert Emergency Physicians and Specialists</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Medical Care</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Rapid Diagnostics and Critical Interventions</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Compassionate and Reassuring Patient Care</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Active Participation in Emergency Medical Research</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Coordination with Specialized Medical Services</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Efficient Emergency Response Team</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Collaboration with Emergency Medical Services</p>
        </li>
    </ul>
              <!-- BTN --> 
              <a href="services-1.html" class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="12-contact.html" class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- X Ray Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="x-ray"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- X RAY BACKGROUND IMAGE -->
              <div class="x-ray-bg"></div>
            </div>
            
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>X Ray</h2>
              </div>
              <p>Discover unparalleled precision in diagnostics at Medikal with our Radiology and X-Ray Services. Our dedicated team of radiologists utilizes state-of-the-art imaging technologies to provide detailed and accurate diagnostic information. Whether it's routine screenings or in-depth medical imaging, we prioritize delivering timely and comprehensive results to aid in your healthcare journey.</p>
              <br>
              <p>Our commitment extends beyond imaging. We focus on creating a comfortable environment for patients undergoing radiological procedures, ensuring a seamless experience.</p>
    <!-- Small Facts -->
    <ul class="fact row">
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Expert Radiologists and Imaging Specialists</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>State-of-the-Art X-Ray and Imaging Equipment</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Timely and Detailed Diagnostic Reports</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Comfortable Environment for Radiological Procedures</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Active Participation in Radiological Research</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Collaboration with Medical Imaging Specialists</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Efficient and Streamlined Imaging Services</p>
        </li>
        <li class="col-sm-6">
            <p><i class="ion-erlenmeyer-flask"></i>Comprehensive Radiological Consultations</p>
        </li>
    </ul>
              <!-- BTN --> 
              <a href="services-1.html" class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="12-contact.html" class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!--======= INTRO =========-->
    <section class="intro">
      <div class="container">
          <div class="intro-in"> 
              <!--Title-->
              <div class="title">
                  <h3>We are a team of dedicated professionals passionate about our work.</h3>
              </div>
              
              <!--Text Section-->
              <ul class="row">
                  <li class="col-md-6">
                      <p>Experience excellence with our team, where commitment to your well-being is our top priority. We strive to provide compassionate and comprehensive care, ensuring your journey with us is marked by comfort and confidence.</p>
                  </li>
                  <li class="col-md-6">
                      <p>Our approach is rooted in transparency and expertise. We believe in addressing your concerns with clarity and precision, embracing a philosophy that places your health at the forefront of everything we do.</p>
                  </li>
              </ul>
              
              <!--Action Buttons-->
              <a href="appointment.html" class="btn">Make an Appointment</a>
              <a href="07-timetable.html" class="btn btn-1">View Timetable</a>
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
            <p>Beirut - Hamra Street</p>
          </li>
          
          <!--Hot line-->
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
  <!-- Footer -->
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