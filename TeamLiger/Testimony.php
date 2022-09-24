<?php
  include "frontend-logic/conn.php";
  $testmonies=array();
  $query = mysqli_query($conn,"Select * from testimony"); 
  while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    array_push($testmonies,$result);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Our Success Stories</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700">
  <link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
  	color: #333;
  	text-align: center;
  	text-transform: uppercase;
/*   	font-family: "Roboto", sans-serif; */
  	font-weight: bold;
  	position: relative;
  	margin: 25px 0 50px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #ffdc12;
	left: 0;
	right: 0;
	bottom: -10px;
}
.carousel {
	width: 650px;
	margin: 0 auto;
	padding-bottom: 50px;
}
.carousel .carousel-item {
	color: #999;
	font-size: 14px;
	text-align: center;
	overflow: hidden;
	min-height: 340px;
}
.carousel .carousel-item a {
	color: #eb7245;
}
.carousel .img-box {
	width: 145px;
	height: 145px;
	margin: 0 auto;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {	
	padding: 30px 0 10px;
}
.carousel .overview {	
	text-align: center;
	padding-bottom: 5px;
}
.carousel .overview b {
	color: #333;
	font-size: 15px;
	text-transform: uppercase;
	display: block;	
	padding-bottom: 5px;
}
.carousel .star-rating i {
	font-size: 18px;
	color: #ffdc12;
}
.carousel-control-prev, .carousel-control-next {
	width: 30px;
	height: 30px;
	border-radius: 50%;
	background: #999;
	text-shadow: none;
	top: 4px;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 20px;
	margin-right: 2px;
}
.carousel-control-prev {
	left: auto;
	right: 40px;
}
.carousel-control-next i {
	margin-right: -2px;
}
.carousel .carousel-indicators {
	bottom: 15px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 11px;
	height: 11px;
	margin: 1px 5px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #e2e2e2;
	border: none;
}
.carousel-indicators li.active {		
	background: #888;		
}
</style>
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
  </header><!-- End Header -->
<h2 style="margin-top:5em;">Our Success Stories</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Carousel indicators -->
	<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>   
	<!-- Wrapper for carousel items -->
	<div class="carousel-inner">		
		<div class="carousel-item active">
			<div class="img-box"><img src=<?php echo "https://robohash.org/".$result['t_id'] ?>alt=""></div>
			<p class="testimonial">The MJ Tutorials was the first place I would go to, whenever I had any doubts in any concept. It was an integral part of my JEE preparation. The daily practice problems helped me revise and strengthen my concepts along with increasing my speed and accuracy.</p>
			<p class="overview"><b>Lana</b>JEE Advance topper</p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
     <?php foreach ($testmonies as $testimony):?>
		<div class="carousel-item">
			<div class="img-box"><img src=<?php echo "https://robohash.org/".$testimony['t_id'];?> alt=""></div>
			<p class="testimonial"><?php echo $testimony['Story'] ?></p>
			<p class="overview"><b><?php echo $testimony['Name'] ?></b><?php echo $testimony['Achievement'] ?></p>
			<div class="star-rating">
				<ul class="list-inline">
          <?php
          for($i=0;$i<$testimony['Review'];$i++){
            echo "<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>";  
          }
          for($i=0;$i<5-$testimony['Review'];$i++){
            echo "<li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>";  
          }
          ?>
				</ul>
			</div>
		</div>
    <?php endforeach ?>
	</div>
	<!-- Carousel controls -->
	<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a>
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
    </div>
  </footer><!-- End Footer -->
</body>
</html>