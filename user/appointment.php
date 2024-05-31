<?php
include("navbar.php");
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul>
        </div>
      </div>
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
					<img src="../public/upload_image/appointment_details/<?= $row['app_image'] ?>" alt="" class="img-fluid">
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


<?php
include("footer.php");
?>