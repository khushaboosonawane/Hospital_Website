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
        <!-- create table blog (blog_id integer primary key auto_increment,blog_image text,blog_title varchar(2000),blog_desc varchar(2000),blog_date varchar(2000)); -->
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_blog_information.php" enctype="multipart/form-data" method="post" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Blog Information</h4>
                    <hr>
                </div>
                <?php
                include("../connection/connection.php");
                $blog_id=$_GET['blog_id'];
                $sql="SELECT * FROM blog WHERE blog_id='$blog_id'";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
                ?>
                <input type="hidden" name="blog_id" value="<?= $row['blog_id'] ?>" id="">
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Blog Title" required name="blog_title" value="<?= $row['blog_title'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Blog Date</label>
                        <input type="date" class="form-control" id="inputEmail4" placeholder="Enter Blog Date" required name="blog_date" value="<?= $row['blog_date'] ?>" >
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Blog Image</label>
                        <input type="file" class="form-control" id="inputEmail4"  name="blog_image" >
                    </div>
                    <div class="col-md-6 my-3">
                        <img src="../public/upload_image/blog_image/<?= $row['blog_image'] ?>" alt="" style="height:150px;width:150px">
                    </div>
                   
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Blog Description</label>
                        <textarea  class="form-control" id="inputEmail4" required placeholder="Enter Blog Description" name="blog_desc"><?= $row['blog_desc'] ?></textarea>
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