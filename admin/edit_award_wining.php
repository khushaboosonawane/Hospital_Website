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

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_award_deatils_information.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Award Wining Details</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <?php
                    $det_id=$_GET['id'];
                    $sql="SELECT * FROM award_details where det_id='$det_id'";
                    $data=mysqli_query($con,$sql);
                    $row=mysqli_fetch_assoc($data);
                    ?>
                    <input type="hidden" name="det_id" value="<?= $row['det_id'] ?>" id="">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Select Details Image</label>
                        <input type="file" class="form-control" id="inputEmail4" name="details_image"  >
                    </div>
                    <div class="col-md-6">
                        <img src="../public/upload_image/award_details/<?= $row['details_image'] ?>" alt="Award Wining Image" style="height:100px;width:100px">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Details Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Award Wining Details Title" required name="details_title" value=<?= $row['details_title'] ?> >
                    </div>
                    <div class="col-md-12 my-3">
                        <label for="inputEmail4" class="form-label">Details Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Award Details Description" name="award_details_description"><?= $row['award_details_description'] ?></textarea>
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