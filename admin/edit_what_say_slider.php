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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp;What They Say?..</h5>
        </div>


        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_what_slider.php" method="post">
                <div class="col-md-12">
                    <h4>What Saya Slider Information</h4>
                    <hr>
                </div>
                <!-- create table what_say_slider(sid integer primary key auto_increment,title varchar(2000),auth_name varchar(2000),desc_data varchar(2000)); -->
                <?php
                include("../connection/connection.php");
                $sid=$_GET['sid'];
                $data=mysqli_query($con,"SELECT * FROM what_say_slider WHERE sid='$sid'");
                $row=mysqli_fetch_assoc($data);

                ?>
                <input type="hidden" name="sid" value="<?= $row['sid'] ?>" id="">
                <div class="row my-3">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Title" required name="title" value="<?= $row['title'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Authorizer Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Authorizer Name" required name="auth_name" value="<?= $row['auth_name'] ?>"  >
                    </div>

                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Emergency Description</label>
                        <textarea class="form-control" id="inputEmail4" placeholder="Enter Description" required name="desc_data"><?= $row['desc_data'] ?></textarea>
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