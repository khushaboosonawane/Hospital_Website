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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp;Healthy Living Information</h5>
        </div>
        <!-- create table healthy_living(hid int primary key auto_increment,healthy_living_title varchar(2000),healthy_image text,healthy_desc text) -->
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_living_info.php" method="post" enctype="multipart/form-data" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Living Information</h4>
                    <hr>
                </div>
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM healthy_living";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
                ?>
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Title" required name="healthy_living_title" value="<?= $row['healthy_living_title'] ?>" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Image</label>
                        <input type="file" class="form-control" id="inputEmail4" name="healthy_image" value="" >
                    </div>
                    <div class="col col-md-6 my-3">
                        <img src="../public/upload_image/healthy_living/<?= $row['healthy_image'] ?>" style="height:150px;width:150px" alt="">
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Description" name="healthy_desc"><?= $row['healthy_desc'] ?></textarea>
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