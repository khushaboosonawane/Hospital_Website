<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <?php
 	include("../connection/connection.php");
 	$data=mysqli_query($con,"SELECT * FROM hospital_basic_info");
 	$row=mysqli_fetch_assoc($data);
  ?>
  <title><?= $row['hospital_name'] ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../public/images/hospital_log_2.png" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../public/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="../public/plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="../public/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../public/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../public/css/style.css">

  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:<?= $row['hospital_email'] ?>"><i class="icofont-support-faq mr-2"></i><?= $row['hospital_email'] ?></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?= $row['hospital_address'] ?></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+91 <?= $row['hospital_mobile'] ?>" >
							<span>Call Now : </span>
							<span class="h4">+91 <?= $row['hospital_mobile'] ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="../public/upload_image/hospital_logo/<?= $row['hospital_logo'] ?>" alt="" class="img-fluid" style="width:90px" >
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto d-flex align-items-center">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="department.php">Departments</a></li>
                <li class="nav-item"><a class="nav-link" href="doctors.php">Doctors</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

			    <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="department.php">Departments</a></li>
						<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
					</ul>
			  	</li> -->

			  	<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
						<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
					</ul>
			  	</li> -->

			   <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li> -->
			   <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			   <li class="nav-item">
				<a class="nav-link" href="appointment.php">
					<button class="btn btn-primary btn-sm m-0 p-0 p-2">Appoinment</button>
				</a>
			</li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	

