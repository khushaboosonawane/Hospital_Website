<?php
include("navbar.php");
?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our services</span>
          <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row">
			<?php
			include("../connection/connection.php");
			$sql="SELECT * FROM department";
			$data=mysqli_query($con,$sql);
			if($data->num_rows>0){
				foreach($data as $row){
            ?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="../public/upload_image/department_image/<?= $row['dept_image'] ?>" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color"><?= $row['dept_name'] ?></h4>
						<p class="mb-4"><?= $row['dept_desc'] ?></p>
					</div>
				</div>
			</div>

			<?php
				}
			}else{
            ?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="../public/images/service/service-1.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Child care</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="../public/images/service/service-2.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2  title-color">Personal Care</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="../public/images/service/service-3.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">CT scan</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="../public/images/service/service-4.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Joint replacement</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="../public/images/service/service-6.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Examination & Diagnosis</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="../public/images/service/service-8.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Alzheimer's disease</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
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
$sql="SELECT * FROM appointment_banner";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
?>
<section class="section"  style='background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url("../public/upload_image/app_banner/<?= $row['app_image'] ?>") no-repeat;background-size:cover'>
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg text-white"><?= $row['app_title'] ?> 
					<!-- <span class="title-color">chance to have the healthy</span> -->
				</h2>
					<a href="appointment.php" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include("footer.php");
?>