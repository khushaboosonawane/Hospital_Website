<?php
include("navbar.php");
?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">All Doctors</span>
          <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Doctors</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                </div>
            </div>
        </div>

      <div class="col-12 text-center  mb-5">
	        <div class="btn-group btn-group-toggle " data-toggle="buttons">
	          <label class="btn active ">
	            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Department
	          </label>
	          <label class="btn ">
	            <input type="radio" name="shuffle-filter" value="Cardiology" />Cardiology
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="Dental" />Dental
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="Neurology" />Neurology
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="Pulmology" />Pulmology
	          </label>
	           <label class="btn">
	            <input type="radio" name="shuffle-filter" value="Pediatric" />Pediatric
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="Radiology" />Radiology
	          </label>
	        </div>
      </div>

    <div class="row shuffle-wrapper portfolio-gallery">
		<?php
		include('../connection/connection.php');
		$sql="SELECT * FROM team,department WHERE team.dept_id=department.dept_id and department.dept_name='Cardiology'";
		$data=mysqli_query($con,$sql);
		if($data->num_rows>0){
			foreach($data as $row){
        ?>
		<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Cardiology&quot;]">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html"><?= $row['member_name'] ?>(<?= $row['education'] ?>)</a></h4>
                	<p><?= $row['dept_name'] ?></p>
                </div> 
	      	</div>
      	</div>
		<?php
			}
		}else{
			?>
		<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;]">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="../public/images/team/1.jpg" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
                	<p>Cardiology</p>
                </div> 
	      	</div>
      	</div>
			<?php
		}
		?>

		<?php
		include("../connection/connection.php");
		$sql="SELECT * FROM team,department WHERE team.dept_id=department.dept_id and dept_name='Dental'";
		$data=mysqli_query($con,$sql);
		if($data->num_rows>0){
			foreach($data as $row){
        ?>
		<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Dental&quot;]">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><?= $row['member_name'] ?>(<?= $row['education'] ?>)</h4>
                	<p><?= $row['dept_name'] ?></p>
                </div> 
	      	</div>
      	</div>
		<?php
			}
		}else{
		?>
		<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Dental&quot;]">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="../public/images/team/1.jpg" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
                	<p>Dental</p>
                </div> 
	      	</div>
      	</div>
		<?php
		}
		?>
      	
      <?php
	 include("../connection/connection.php");
	 $sql="SELECT * FROM team,department WHERE team.dept_id=department.dept_id and dept_name='Neurology'";
	 $data=mysqli_query($con,$sql);
	 
	 if($data->num_rows>0){
		foreach($data as $row){
    ?>
	
		<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Neurology&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html"><?= $row['member_name'] ?> (<?= $row['education'] ?>)</a></h4>
                	<p><?= $row['dept_name'] ?></p>
                </div> 
	      	</div>
       </div>
	<?php
		}
	 }else{
	?>
	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Neurology&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/images/team/2.jpg" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html">Harrision Samuel</a></h4>
                	<p>Neurology</p>
                </div> 
	      	</div>
    </div>
	<?php
	 } 
	  ?>

	  <?php
	 include("../connection/connection.php");
	 $sql="SELECT * FROM team,department WHERE team.dept_id=department.dept_id and dept_name='Pulmology'";
	 $data=mysqli_query($con,$sql);
	 if($data->num_rows>0){
       foreach($data as $row){
    ?>
	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Pulmology&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html"><?= $row['member_name'] ?> (<?= $row['education'] ?>)</a></h4>
                	<p><?= $row['dept_name'] ?></p>
                </div> 
	      	</div>
    </div>
	<?php
	   }
	 }else{
     ?>
	 <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Pulmology&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/images/team/3.jpg" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html">Alexandar James</a></h4>
                	<p>Pulmology</p>
                </div> 
	      	</div>
      </div>
	 <?php
	 } 
	  ?>
      
	  <?php
	 include("../connection/connection.php");
	 $sql="SELECT * FROM team,department WHERE team.dept_id=department.dept_id and department.dept_name='Pediatric'";
	 $data=mysqli_query($con,$sql);
	 if($data->num_rows>0){
		foreach($data as $row){
    ?>
	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Pediatric&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html"><?= $row['member_name'] ?> (<?= $row['education'] ?>)</a></h4>
                	<p><?= $row['dept_name'] ?></p>
                </div> 
	      	</div>
    </div>

	<?php
		}
	 }else{
	?>
	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Pediatric&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/images/team/4.jpg" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html">Edward john</a></h4>
                	<p>Pediatry</p>
                </div> 
	      	</div>
    </div>

    <?php
	 } 
	  ?>

    <?php
	include("../connection/connection.php");
	$sql="SELECT * FROM team,department WHERE team.dept_id=department.dept_id and dept_name='Radiology'";
	$data=mysqli_query($con,$sql);
	if($data->num_rows>0){
		foreach($data as $row){
    ?>
	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Radiology&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html"><?= $row['member_name'] ?> (<?= $row['education'] ?>) </a></h4>
                	<p><?= $row['dept_name'] ?></p>
                </div> 
	      	</div>
    </div>
	<?php
		}
	}else{
	?>
		<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;Radiology&quot;]">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="../public/images/team/1.jpg" alt="doctor-image" class="img-fluid w-100" style="height:200px;width:100%">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
                	<p>Neurology</p>
                </div> 
	      	</div>
      	</div>
    <?php
	}
	?>
      
      	

      
  </div>
</section>
<!-- /portfolio -->
<?php
include("../connection/connection.php");
$sql="SELECT * FROM appointment_banner";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
?>
<section class="section"  style='background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url("../public/upload_image/app_banner/<?= $row['app_image'] ?>") no-repeat;background-size:cover'>
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