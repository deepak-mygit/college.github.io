<?php include 'components/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Classico</title>

	<!-- bootstrap file -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.min.css">

	<!-- awesome font file -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

	<!-- css file -->
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css">
</head>
<body>
	<header>
		<h1>CMS</h1>
		<nav class="navbar">
			<div class="btn">
				<i class="bi bi-x close-btn"></i>
			</div>
			<a href="home-page.php">Home</a>
			<a href="about.php">About Us</a>
			<a href="blog.php">Blog</a>
			<a href="login.php" class="btn-login">Login</a>	
		</nav>
		<div class="btn">
			<i class="bi bi-list menu-btn"></i>
		</div>
	</header>

	<section>
		<div class="home">
			<div class="content">
				<h1>College Management System</h1>
				<p>CIMAGE Group consist of 3 Colleges Under Patliputra University, and 1 College under Aryabhatta Knowledge University.</p>
				<button class="start-btn">Get Started</button>
			</div>
			<div class="enq-form">
				<h2>Enquiry Now</h2>
				<form method="post" action="datamanage.php">
				    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="Enter your full name" name="name" required>
                    </div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" required>
                    </div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="Enter your email id" name="email" required>
                    </div>
                    <div class="col-lg-12">
                        <select class="form-select" name="course" required>
                        	<option disabled selected>Please select course</option>
                        	<option>BCA</option>
                        	<option>BBA</option>
                        	<option>BSc-IT</option>
                        	<option>BBM</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                    	<button class="btn btn-primary w-100" name="enq-btn">Submit</button>
                    </div>
				</form>
			</div>
		</div>
	</section>

	<div class="info">
		<div class="info-card">
			<img src="assets/img/college.png">
			<p>CIMAGE Group of institutions is considered to the synonyms of ‘Quality Education, Innovation in Education, Academic Rigor, Unique Teaching Pedagogy, Best Result, Job Oriented Skills Development and Placements’ in Bihar. No wonder, It is considered to be the <span>Best IT & Management College</span> in Patna, Bihar</p>
		</div>
	</div>

	<div class="company">
		<h1>12000+ Students Are Placed In 210+ Companies</h1>
		<div class="img">
			<img src="assets/img/wipro.png">
			<img src="assets/img/tcs.jpg">
			<img src="assets/img/cap.png">
			<img src="assets/img/accen.png">
		</div>
	</div>

	
	<footer>
		<div class="about">
			<img src="assets/img/logo1.jpg"/>
			<p>Best BCA College in Patna Bihar offering an outstanding Job Placement. It is recognized as No.1 College in Patna Bihar for IT & Management Courses such as BCA, BBA, BBM, BSc.IT etc. Over the years It has an excellent campus placement record.  CIMAGE is affiliated to Aaryabhatta Knowledge University (AKU) & Patliputra University (PPU). Popularly known as best BBA college. It Achieved best B-School of East India award by ASSOCHAM. CIMAGE is the only remote center of IIT Bombay in Bihar.</p>
		</div>
		<div class="course">
			<h1>Course</h1>
			<p><a>BCA</a></p>
			<p><a>BSc-IT</a></p>
			<p><a>BBA</a></p>
			<p><a>BBM</a></p>
			<p><a>B.Com</a></p>
			<p><a>PGDM</a></p>
		</div>
		<div class="quick-link">
			<h1>Quick Links</h1>
			<p><a href="#">Career</a></p>
			<p><a href="#">Blog</a></p>
			<p><a href="#">Downloads</a></p>
			<p><a href="#">Admission Process</a></p>
			<p><a href="#">Privacy Policy</a></p>
		</div>
		<div class="reach">
			<h1>Reach Us</h1>
			<p><i class="bi bi-telephone-plus"></i> 91-7250767676</p>
			<p><i class="bi bi-telephone-plus"></i> 91-7250767676</p>
			<p><i class="bi bi-envelope"></i>info@cimage.in</p>
		</div>
	</footer>

	<div class="bottom">
		<div>
			<h5>© Copyright collegeAdmin. All Rights Reserved</h5>
		    <p>Designed by Deepak Kr.</p>
		</div>
		<div class="icon">
			<a href="https://www.facebook.com/cimage"><i class="bi bi-youtube"></i></a>
			<a href="https://www.instagram.com/cimagecollege"><i class="bi bi-instagram"></i></a>
			<a href="https://www.in.linkedin.com/company/cimage"><i class="bi bi-linkedin"></i></a>
			<a href="https://wwwhttps://www.youtube.com/@cimagepatna"><i class="bi bi-facebook"></i></a>
		</div>
	</div>


  <!-- Template Main JS File -->
  <script src="assets/js/home-page.js"></script>
</body>
</html>
