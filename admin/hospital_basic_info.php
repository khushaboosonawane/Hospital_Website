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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp;Hospital Basic Information</h5>
        </div>

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_basic_information.php" method="post" enctype="multipart/form-data" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Basic information</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Hospital Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Hospital Name" required name="hospital_name" value="<?= $row['hospital_name'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Hospital Mobile</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Hospital Mobile" required name="hospital_mobile" value="<?= $row['hospital_mobile'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Hospital Emergency Mobile</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Hospital Emergency Mobile" required name="hospital_emergency_number" value="<?= $row['hospital_emergency_number'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Hospital Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Hospital Email" required name="hospital_email" value="<?= $row['hospital_email'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4">
                        <label for="inputEmail4" class="form-label">Hospital Address</label>
                        <textarea name="hospital_address" id="" class="form-control" placeholder="Enter Hospital Address" name="hospital_address"><?= $row['hospital_address'] ?></textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Hospital Logo</label>
                        <input type="file" class="form-control" id="inputEmail4" placeholder="Enter Hospital Email"  name="hospital_logo">
                    </div>
                    <div class="col col-md-3">
                        <a href="../public/upload_image/hospital_logo/<?= $row['hospital_logo'] ?>">
                            <img src="../public/upload_image/hospital_logo/<?= $row['hospital_logo'] ?>" alt="img not found" title="hospital logo" style="height:100px;width:100px;">
                        </a>
                    </div>
                </div>
                <br><br>
                <div class="col-md-12">
                    <h4>Social Media Linking</h4>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><span class="lead"><i class="ri-facebook-circle-fill"></i> &nbsp;&nbsp;</span>Facebook Link</label>
                            <input type="text" class="form-control" placeholder="Enter Facebook Link"   title="please Enter Valid https: link" name="facebook_link" value="<?= $row['facebook_link'] ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><span class="lead">
                            <i class="ri-twitter-fill"></i> &nbsp;&nbsp;</span>Twitter Link
                            </label>
                            <input type="text" class="form-control" placeholder="Enter Twitter Link"   title="please Enter Valid https: link" name="twitter_link" value="<?= $row['twitter_link'] ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><span class="lead">
                            <i class="ri-linkedin-box-fill"></i> &nbsp;&nbsp;</span>Linkdin Link
                            </label>
                            <input type="text" class="form-control" placeholder="Enter Linkdin Link"   title="please Enter Valid https: link" name="linkdin_link" value="<?= $row['linkdin_link'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="col-md-12">
                        <span class="lead text-dark"><i class="ri-map-pin-2-fill"></i></span> &nbsp;&nbsp;
                        <label for="inputEmail4" class="form-label">Hospital Map Link</label>
                        <textarea class="form-control" id="inputEmail4" placeholder="Enter Hospital Map Link" required name="hospital_map_link"><?= $row['hospital_map_link'] ?></textarea>
                    </div>
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