<?php
include("navbar.php");
?>

<?php
include("../connection/connection.php");
$sql="SELECT * FROM home_page_banner";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);

?>

<!-- Slider Start -->
<section class="banner" style='background: url("../public/upload_image/hospital_banner_image/<?= $row['banner_image'] ?>") no-repeat;background-size:cover;object-fit:cover'>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing "><?= $row['banner_subtitle'] ?></span>
					<h1 class="mb-3 mt-3"><?= $row['banner_main_title'] ?></h1>
					
					<p class="mb-4 pr-5"><?= $row['home_page_banner_desc'] ?></p>
					<div class="btn-container ">
						<a href="appoinment.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<?php
					include("../connection/connection.php");
					$data=mysqli_query($con,"SELECT * FROM online_app_info ");
					$row=mysqli_fetch_assoc($data);
					?>
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span> <?= $row['appointment_title'] ?> &nbsp; <span>+91 (<?= $row['appointment_number'] ?>)</span></span>
						<h4 class="mb-3"><?= $row['appointement_subtitle'] ?></h4>
						<p class="mb-4"><?= $row['appointment_desc'] ?></p>
						
						<a href="appoinment.php" class="btn btn-main btn-round-full">Make a appoinment</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
						<?php
						include("../connection/connection.php");
						$data=mysqli_query($con,"SELECT * FROM working_hour LIMIT 3");
						foreach($data as $key=>$row){
						?>
						<li class="d-flex justify-content-between"><?= $row['from_day'] ?> - <?= $row['to_day'] ?> : <span><?= $row['working_time'] ?> AM</span></li>
						<?php
						} 
						?>
		                </ul>
					</div>
				<?php
				include("../connection/connection.php");
				$data=mysqli_query($con,"SELECT * FROM emergency_case");
				$row=mysqli_fetch_assoc($data);
				?>
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span><?= $row['emergency_title'] ?></span>
						<h4 class="mb-3">+91 <?= $row['emergency_number'] ?></h4>
						<p><?= $row['emergency_desc'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<?php
			include("../connection/connection.php");
			$sql="SELECT * FROM personal_information";
			$data=mysqli_query($con,$sql);
			$row=mysqli_fetch_assoc($data);
			?>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="../public/upload_image/personal_info/<?= $row['first_image'] ?>" alt="" class="img-fluid">
					<img src="../public/upload_image/personal_info/<?= $row['second_image'] ?>" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="../public/upload_image/personal_info/<?= $row['thired_image'] ?>" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color"><?= $row['personal_title'] ?></h2>
					<p class="mt-4 mb-5"><?= $row['personal_desc'] ?></p>

					<a href="services.php" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<?php
				include("../connection/connection.php");
				$data=mysqli_query($con,"SELECT * FROM count");
				$row=mysqli_fetch_assoc($data);
				?>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3"><?= $row['happy_people'] ?></span>k
						<p>Happy Customer</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3"><?= $row['surgery_complete'] ?></span>+
						<p>Surgery Comepleted</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3"><?= $row['expert_doctors'] ?></span>+
						<p>Expert Doctors</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3"><?= $row['world_wide_branch'] ?></span>
						<p>Worldwide Branch</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<?php
				include("../connection/connection.php");
				$sql="SELECT * FROM award_wining_title";
				$data=mysqli_query($con,$sql);
				$row=mysqli_fetch_assoc($data);
				?>
				<div class="section-title">
					<h2><?= $row['award_title'] ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?= $row['award_description'] ?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
			include("../connection/connection.php");
			$sql="SELECT * FROM award_details";
			$data=mysqli_query($con,$sql);
			foreach($data as $row){
			?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<img src="../public/upload_image/award_details/<?= $row['details_image'] ?>" style="height:90px;width:90px" alt="">
						<h4 class="mt-3 mb-3"><?= $row['details_title'] ?></h4>
					</div>

					<div class="content">
						<p class="mb-4"><?= $row['award_details_description'] ?></p>
					</div>
				</div>
			</div>
			<?php
			} 
			?>

			
		</div>
	</div>
</section>
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<?php
					$data=mysqli_query($con,"SELECT * FROM appoint_basic_details");
					$row=mysqli_fetch_assoc($data);
				?>
				<div class="appoinment-content">
					<img src="../public/upload_image/appointment_details/<?= $row['app_image'] ?>" alt="" class="img-fluid" style="height:600px;width:100%;object-fit:cover">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>
							<?= $row['app_mobile'] ?>
						</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color"><?= $row['app_title'] ?></h2>
					<p class="mb-4"><?= $row['app_description'] ?></p>
					     <form class="appoinment-form" method="post" action="book_appointement.php">
                    <div class="row">
                         <div class="col-lg-6">
							
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" required name="dept_id">
									<option value="">Select Department</option>
									<?php
									$data=mysqli_query($con,"SELECT * FROM department");
									if($data->num_rows>0){
										foreach($data as $row){
									?>
										<option value="<?= $row['dept_id'] ?>"><?= $row['dept_name'] ?></option>
									<?php
										}
									}else{
									?>
									<option value="NA">Data Not Found</option>
									<?php
									}
									?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2" required name="doctor_name">
									<option value="">Select Doctor Name</option>
                                  <option value="ABCD">ABCD</option>
                                  <option value="XYZ">XYZ</option>
                                  <option value="PQRS">PQRS</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="app_date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="app_time" id="time" type="time" class="form-control" placeholder="Time" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="app_name" id="name" type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="app_phone" id="phone" type="Number" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="app_message" id="message" class="form-control" rows="6" placeholder="Your Message" required></textarea>
                    </div>

                    <button class="btn btn-main btn-round-full" type="submit" >Make Appoinment <i class="icofont-simple-right ml-2  "></i></button>
                </form>
            </div>
			</div>
		</div>
	</div>
</section>
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<?php
					$data=mysqli_query($con,"select * from test_title_data");
					$row=mysqli_fetch_assoc($data);
					?>
					<h2><?= $row['test_title'] ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?= $row['title_desc'] ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<?php
				$data=mysqli_query($con,"SELECT * FROM testimonial");
				if($data->num_rows>0){
					foreach($data as $row){
				
				?>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="../public/upload_image/testimonial/<?= $row['cus_image'] ?>" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4><?= $row['cus_name'] ?></h4>
						<span><?= $row['cus_dise'] ?></span>
						<p>
							<?= $row['cus_rev'] ?>
						</p>
					</div>
				</div>
				<?php
				}
				}else{
				?>
				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="../public/images/team/test-thumb2.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="../public/images/team/test-thumb3.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="../public/images/team/test-thumb4.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
						<p class="mt-4">
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="../public/images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<?php
					$data=mysqli_query($con,"SELECT * FROM suppor_title");
					$row=mysqli_fetch_assoc($data);
					?>
					<h2><?= $row['supp_title'] ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?= $row['supp_desc'] ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<?php
			$data=mysqli_query($con,"SELECT * FROM supportive_partners");
			if($data->num_rows>0){
				foreach($data as $row){
			?>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/upload_image/support_team/<?= $row['logo'] ?>" alt="" class="img-fluid">
				</div>
			</div>
			<?php
				}
			}else{
			?>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/1.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/2.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="../public/images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>




<?php
include("footer.php");
?>