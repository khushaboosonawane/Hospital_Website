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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp;Banner Down Information</h5>
        </div>

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_online_app_information.php" method="post">
                <div class="col-md-12">
                    <h4>Online Appointment Information</h4>
                    <hr>
                </div>
                <!-- create table online_app_info (app_id integer primary key auto_increment,appointement_subtitle varchar(2000),appointment_title varchar(3000),appointment_desc varchar(3000),appointment_number varchar(10)); -->
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM online_app_info";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
            
                ?>
                <div class="row my-3">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Appointment Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Appointment Title" required name="appointment_title" value="<?= $row['appointment_title'] ?>" >
                    </div>

                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Appointment Subtitle</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Appointemnt Subtitle" required name="appointement_subtitle" value="<?= $row['appointement_subtitle'] ?>">
                    </div>
                    
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Appointment Description</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Appointment Description" required name="appointment_desc" value="<?= $row['appointment_desc'] ?>" >
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Appointment Mobile</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Appointment Number" required name="appointment_number" value="<?= $row['appointment_number'] ?>">
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
            <form action="update_emergency_information.php" method="post">
                <div class="col-md-12">
                    <h4>Emergency Cases Information</h4>
                    <hr>
                </div>
                <!-- create table emergency_case (emer_id integer primary key auto_increment,emergency_number varchar(10),emergency_desc varchar(3000),emergency_title varchar(1000)) -->
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM emergency_case";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
            
                ?>
                <div class="row my-3">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Emergency Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Emergency Title" required name="emergency_title" value="<?= $row['emergency_title'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Emergency Number</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Emergency Number" required name="emergency_number" value="<?= $row['emergency_number'] ?>"  >
                    </div>

                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Emergency Description</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Emergency Description" required name="emergency_desc" value="<?= $row['emergency_desc'] ?>">
                    </div>
                    
                </div>
                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Update Information</button>
                    </div>
                </div>
            </form>
        </div>

       
    </div>
</div>



<?php
include("footer.php");
?>