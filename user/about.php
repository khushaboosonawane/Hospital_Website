<?php
include("navbar.php");
?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">About Us</span>
          <h1 class="text-capitalize mb-5 text-lg">About Us</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<?php
			include("../connection/connection.php");
			$data=mysqli_query($con,"SELECT * FROM healthy_living");
			$row=mysqli_fetch_assoc($data);

			?>
			<div class="col-lg-4">
				<h2 class="title-color"><?= $row['healthy_living_title'] ?></h2>
			</div>
			<div class="col-lg-8">
				<p><?= $row['healthy_desc'] ?></p>
				<img src="../public/upload_image/healthy_living/<?= $row['healthy_image'] ?>" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<section class="fetaure-page ">
	<div class="container">
		<div class="row">
			<?php
			include("../connection/connection.php");
			$data=mysqli_query($con,"SELECT * FROM department limit 4");
			if($data->num_rows>0){
				foreach($data as $row){
			?>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="../public/upload_image/department_image/<?= $row['dept_image'] ?>" alt="" class="img-fluid w-100" style="height:250px;width:400px">
					<h4 class="mt-3"><?= $row['dept_name'] ?></h4>
					<p><?= $row['dept_desc'] ?></p>
				</div>
			</div>
			<?php
				}
			}else{
			?>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="../public/images/about/about-1.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Healthcare for Kids</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="../public/images/about/about-2.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Medical Counseling</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="../public/images/about/about-3.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Modern Equipments</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item">
					<img src="../public/images/about/about-4.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Qualified Doctors</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color">Our Doctors achievements </h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<?php
					$data=mysqli_query($con,"SELECT * FROM supportive_partners limit 6");
					if($data->num_rows>0){
						foreach($data as $row){
					?>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="../public/upload_image/support_team/<?= $row['logo'] ?>" alt="" class="img-fluid">
						</div>
					</div>
					<?php
						}
					}else{
					?>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="../public/images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="../public/images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="../public/images/about/1.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="../public/images/about/2.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="../public/images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="../public/images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
					<?php
					}
					?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Meet Our Specialist</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Today’s users expect effortless experiences. Don’t let essential people and processes stay stuck in the past. Speed it up, skip the hassles</p>
				</div>
			</div>
		</div>

		<div class="row my-4 ">
				<?php
				include("../connection/connection.php");
				$sql="SELECT * FROM department,team WHERE department.dept_id=team.dept_id";
				$data=mysqli_query($con,$sql);
				if($data->num_rows>0){
					foreach($data as $row){
				?>
				<div class="col-lg-3 col-md-6 col-sm-6 my-3">
					<div class="team-block mb-5 mb-lg-0">
						<img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" alt="" class="img-fluid w-100" style="height:250px;width:100%">

						<div class="content">
							<h4 class="mt-4 mb-0"><a href="doctor-single.html"><?= $row['member_name'] ?></a></h4>
							<p><?= $row['dept_name'] ?> (<?= $row['education'] ?>) </p>
						</div>
					</div>
				</div>
                <?php
					}
				}else{
				?>
				<div class="col-lg-3 col-md-6 col-sm-6 my-3">
				<div class="team-block mb-5 mb-lg-0">
					<img src="../public/images/team/1.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">John Marshal</a></h4>
						<p>Internist, Emergency Physician</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 my-3">
				<div class="team-block mb-5 mb-lg-0">
					<img src="../public/images/team/2.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Marshal Root</a></h4>
						<p>Surgeon, Сardiologist</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 my-3">
				<div class="team-block mb-5 mb-lg-0">
					<img src="../public/images/team/3.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Siamon john</a></h4>
						<p>Internist, General Practitioner</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 my-3">
				<div class="team-block">
					<img src="../public/images/team/4.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Rishat Ahmed</a></h4>
						<p>Orthopedic Surgeon</p>
					</div>
				</div>
			</div>
				<?php
				}
				?>
			
		</div>
	</div>
</section>

<?php
include("../connection/connection.php");
$data=mysqli_query($con,"SELECT * FROM what_say_title");
$row=mysqli_fetch_assoc($data);
?>

<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4"><?= $row['what_say_title'] ?></h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<?php
				include("../connection/connection.php");
				$data=mysqli_query($con,"SELECT * FROM what_say_slider");
				if($data->num_rows>0){
					foreach($data as $row){
				?>
				<div class="testimonial-block">
					<div class="client-info ">
						<h4><?= $row['title'] ?></h4>
						<span><?= $row['auth_name'] ?></span>
					</div>
					<p>
						<?= $row['desc_data'] ?>
					</p>
					<i class="icofont-quote-right"></i>
				</div>
				<?php
					}
				}else{
				?>
					<div class="testimonial-block">
					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
					
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>
				<?php
				}
				?>
				
			</div>
		</div>
	</div>
</section>
<?php
include("footer.php");
?>