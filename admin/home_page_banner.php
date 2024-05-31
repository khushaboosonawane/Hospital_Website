<?php
include("navbar.php");
?>
<?php
include("../connection/connection.php");
$sql="SELECT * FROM home_page_banner";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Home Page Banner</h5>
        </div>
        <!-- create table home_page_banner(home_id integer primary key auto_increment, text,banner_subtitle varchar(1000),banner_main_title varchar(1000),home_page_banner_desc text) -->

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_home_page_banner.php" method="post" enctype="multipart/form-data" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Banner Information</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Banner Image</label>
                            <input type="file" class="form-control" id="inputEmail4"  name="banner_image">
                        </div>
                        <div class="col-md-6">
                            <img src="../public/upload_image/hospital_banner_image/<?= $row['banner_image'] ?>" style="height:200px;width:200px" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Banner Main Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Banner Main Title" name="banner_main_title" value="<?= $row['banner_main_title'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Banner Sub Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Banner Sub Title" value="<?= $row['banner_subtitle'] ?>" name="banner_subtitle">
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Banner Description</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Banner description" value="<?= $row['home_page_banner_desc'] ?>" name="home_page_banner_desc">
                    </div>
                   
                </div>
              
                <br><br>
                
                

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