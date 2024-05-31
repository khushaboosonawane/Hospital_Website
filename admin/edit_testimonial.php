<?php
include("navbar.php");
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Our Customers</h5>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_testimonial_data.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Testimonies</h4>
                    <hr>
                </div>
                <div class="row">
                    <?php
                    include("../connection/connection.php");
                    $test_id=$_GET['test_id'];
                    $data=mysqli_query($con,"SELECT * FROM testimonial WHERE test_id=$test_id");
                    $row=mysqli_fetch_assoc($data);
                    ?>
                    <input type="hidden" name="test_id" value="<?= $row['test_id'] ?>" id="">
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Customer Name" required name="cus_name" value="<?= $row['cus_name'] ?>">
                </div>
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Customer Disease</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Customer Dieseas" required name="cus_dise" value="<?= $row['cus_dise'] ?>">
                </div>
                <div class="col col-md-6 my-3">
                    <label for="inputEmail4" class="form-label">Customer Review</label>
                    <textarea class="form-control" id="inputEmail4" required name="cus_rev" placeholder="Enter Customer Review"><?= $row['cus_rev'] ?></textarea>
                </div>
                </div>
                <div class="row my-4">
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Customer Image</label>
                    <input type="file" class="form-control" id="inputEmail4"  name="cus_image">
                </div>
                <div class="col col-md-6">
                    <img src="../public/upload_image/testimonial/<?= $row['cus_image'] ?>" style="height:120px;width:120px" alt="">
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