<?php
include("navbar.php");
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">All Department</span>
          <h1 class="text-capitalize mb-5 text-lg">Care Department</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<?php
			include("../connection/connection.php");
			$sql="SELECT * FROM award_wining_title";
			$data=mysqli_query($con,$sql);
			$row=mysqli_fetch_assoc($data);

			?>
			<div class="col-lg-7 text-center">
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
			$data=mysqli_query($con,"SELECT * FROM department");
			if($data->num_rows>0){
				foreach($data as $row){
            ?>
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="../public/upload_image/department_image/<?= $row['dept_image'] ?>" alt="" class="img-fluid w-100" style="height:280px;width:100%">
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
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="../public/images/service/service-1.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Opthomology</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
						<a href="department-single.html" class="read-more">Learn More  <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="../public/images/service/service-2.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2  title-color">Cardiology</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
						<a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="../public/images/service/service-3.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Dental Care</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
						<a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-6 ">
				<div class="department-block  mb-5 mb-lg-0">
					<img src="../public/images/service/service-4.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Child Care</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
						<a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="../public/images/service/service-6.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Pulmology</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
						<a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="../public/images/service/service-8.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Gynecology</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
						<a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
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
include("footer.php");
?>