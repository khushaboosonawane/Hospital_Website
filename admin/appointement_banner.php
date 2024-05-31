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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp;Award Wining Patient Information</h5>
        </div>
        <!-- create table appointment_banner(app_id integer primary key auto_increment,app_image text,app_title varchar(2000)); -->
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_app_banner.php" enctype="multipart/form-data" method="post" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Award Wining Title</h4>
                    <hr>
                </div>
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM appointment_banner";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
                ?>
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Award Wining Title" required name="app_title" value="<?= $row['app_title'] ?>" >
                    </div>
                   
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Background Image</label>
                        <input type="file" class="form-control" id="inputEmail4" required name="app_image">
                    </div>
                    <div class="col col-md-3">
                        <img src="../public/upload_image/app_banner/<?= $row['app_image'] ?>" style="height:100px;width:100px" alt="">
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