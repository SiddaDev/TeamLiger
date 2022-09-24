<?php
  include "frontend-logic/conn.php";
  $student=array();
  $query = mysqli_query($conn,"Select * from student"); 
  while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    array_push($student,$result);
  }
  $attendence=array();
  $query1 = mysqli_query($conn,"Select * from student_attendence"); 
  while($result = mysqli_fetch_array($query1,MYSQLI_ASSOC)){
    array_push($attendence,$result);
  }

  $performance=array();
  $query2 = mysqli_query($conn,"Select * from student_performance"); 
  while($result = mysqli_fetch_array($query2,MYSQLI_ASSOC)){
    array_push($attendence,$result);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.8.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">MJ Tutorials</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li ><a href="Testimony.php">Success Stories </a></li>
        </li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="Signin.html" class="get-started-btn">Sign-in/Register</a>

    </div>
  </header>

 <?php foreach ($student as $students):?>
  <div class="container" style="margin-top: 5%;">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $students['Name'];?></h4>
                      <p class="text-secondary mb-1">Student</p>
                      <p class="text-muted font-size-sm"><?php echo $students['Branch'];?></p>
                      <button class="btn btn-primary"><?php echo $students['s_perk'];?></button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $students['Name'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $students['Email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $students['Phone'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $students['Adress'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="edit-profile.html">Edit</a>
                       <a class="btn btn-info " href="#" style="margin-left: 75% ; background-color: red;color:white;border:none">Delete Profile</a> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Attendance Status</h6>
                      <small>Physics Attendance</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style= <?php echo "width:".$attendance['Physics'] ?> aria-valuenow= <?php echo "width:".$attendance['Physics'] ?>aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Chemistry Attendance</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$attendance['Chemistry'] ?> aria-valuenow=<?php echo "width:".$attendance['Chemistry'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Biology Attendance</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$attendance['Biology'] ?> aria-valuenow=<?php echo "width:".$attendance['Biology'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Maths Attendance</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$attendance['Maths'] ?> aria-valuenow=<?php echo "width:".$attendance['Maths'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Overall Attendence</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$attendance['Overall'] ?> aria-valuenow=<?php echo "width:".$attendance['Overall'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Assesment Status</h6>
                      <small>Physics</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$performance['Physics'] ?> aria-valuenow=<?php echo "width:".$performance['Physics'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Chemistry</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$performance['Chemistry'] ?> aria-valuenow=<?php echo "width:".$performance['Chemistry'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Biology</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$performance['Biology'] ?> aria-valuenow=<?php echo "width:".$performance['Biology'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Maths</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$performance['Maths'] ?> aria-valuenow=<?php echo "width:".$performance['Maths'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Overall</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$performance['Overall'] ?> aria-valuenow=<?php echo "width:".$performance['Overall'] ?> aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php endforeach ?>
        </div>
    </div>
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MJ Tutorials</h3>
            <p>
              Rajaji nagar <br>
              Bangalore,560010<br>
              India <br><br>
              <strong>Phone:</strong> +91 99999 99999<br>
              <strong>Email:</strong> mjtuts@email.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.html">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pricing.html">Pricing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Courses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.html">JEE mains</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.html">JEE advance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.html">KCET</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.html">NEET</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Get Latest Curriculum Info on e-mail Daily</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MJ Tutorials</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
