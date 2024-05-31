<?php
include("navbar.php");
?>
<?php
include("../connection/connection.php");
$sql="SELECT * FROM hospital_basic_info";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp; Appoinment Details</h5>
        </div>
        

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_app_basic.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Appointment</h4>
                    <hr>
                </div>
               <!-- create table appoint_basic_details(app_id integer primary key auto_increment,app_title varchar(1000),app_image text,app_description varchar(2000),app_mobile varchar(10)); -->
               <?php
               include("../connection/connection.php");
               $sql="SELECT * FROM appoint_basic_details";
               $data=mysqli_query($con,$sql);
               $row=mysqli_fetch_assoc($data);
               ?>
                <div class="row my-3">
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Appointement Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Appointment Title" required name="app_title" value="<?= $row['app_title'] ?>" >
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Appointement Number</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Appointment Number" required name="app_mobile" value="<?= $row['app_mobile'] ?>" >
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Appointement Image</label>
                        <input type="file" class="form-control" id="inputEmail4" placeholder="Enter Appointment Image" name="app_image" >
                    </div>
                    <div class="col col-md-6">
                        <img src="../public/upload_image/appointment_details/<?= $row['app_image'] ?>" style='height:150px;width:150px' alt="">
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Appointement Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Appointement Description" name="app_description"><?= $row['app_description'] ?></textarea>
                    </div>
                   
                </div>

                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Update Information</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_award_deatils_information.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Award Wining Details</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Select Details Image</label>
                        <input type="file" class="form-control" id="inputEmail4"  required name="details_image"  >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Details Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Award Wining Details Title" required name="details_title"  >
                    </div>
                    <div class="col-md-12 my-3">
                        <label for="inputEmail4" class="form-label">Details Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Award Details Description" name="award_details_description"></textarea>
                    </div>
                   
                </div>

                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>
        </div>
       
    </div>
</div>




<?php
include("footer.php");
?>