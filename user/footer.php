<?php
 	include("../connection/connection.php");
 	$data=mysqli_query($con,"SELECT * FROM hospital_basic_info");
 	$row=mysqli_fetch_assoc($data);
  ?>
<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<!-- create table news_latter(news_id integer primary key auto_increment,email_address varchar(2000)); -->
		<div class="row d-flex justify-content-center mb-4">
			<div class="col-lg-9">
				<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
					<form action="save_newslatter_info.php" class="subscribe" method="post">
						<input type="email" class="form-control" placeholder="Your Email address" name="email_address" required>
						<button href="#" class="btn btn-main-2 btn-round-full">Subscribe</button>
					</form>
				</div>
			</div>
			<div class="col-lg-4 mr-auto col-sm-6 my-4">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="../public/upload_image/hospital_logo/<?= $row['hospital_logo'] ?>" style="width:150px" alt="" class="img-fluid">
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item">
							<a href="<?= $row['facebook_link'] ?>"><i class="icofont-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="<?= $row['twitter_link'] ?>"><i class="icofont-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="<?= $row['linkdin_link'] ?>"><i class="icofont-linkedin"></i></a>
						</li>
						
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6 my-4">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Surgery </a></li>
						<li><a href="#">Wome's Health</a></li>
						<li><a href="#">Radiology</a></li>
						<li><a href="#">Cardioc</a></li>
						<li><a href="#">Medicine</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6 my-4">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="#">Company Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 my-4">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="mailto:<?= $row['hospital_email'] ?>"><?= $row['hospital_email'] ?></a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+91 <?= $row['hospital_mobile'] ?></a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright 2024  &nbsp;&nbsp; All Rights Reserved By <a href="https://a2zithub.org/" target="_blank">A2Z Infotech</a>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="../public/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="../public/plugins/bootstrap/js/popper.js"></script>
    <script src="../public/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="../public/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="../public/plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="../public/plugins/shuffle/shuffle.min.js"></script>
    <script src="../public/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="../public/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="../public/js/script.js"></script>
    <script src="../public/js/contact.js"></script>

  </body>
  </html>
   