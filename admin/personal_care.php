<?php
include("navbar.php");
?>
<?php
include("../connection/connection.php");
$sql="SELECT * FROM personal_information";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Home Page Banner</h5>
        </div>
        
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_personal_service_info.php" method="post" enctype="multipart/form-data" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Personal Service Information</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Personal Information Title</label>
                            <input type="text" class="form-control" id="inputEmail4"  name="personal_title" placeholder="Enter Personal Information Title" value="<?= $row['personal_title'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Personal Information Description</label>
                            <input type="text" class="form-control" id="inputEmail4"  name="personal_desc" placeholder="Enter Personal Information Description" value="<?= $row['personal_desc'] ?>">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Image</label>
                            <input type="file" class="form-control" id="inputEmail4" name="first_image">
                        </div>
                        <div class="col-md-6">
                            <img src="../public/upload_image/personal_info/<?= $row['first_image'] ?>" alt="" style="height:150px;width:150px">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Second Image</label>
                            <input type="file" class="form-control" id="inputEmail4" name="second_image">
                        </div>
                        <div class="col-md-6">
                            <img src="../public/upload_image/personal_info/<?= $row['second_image'] ?>" alt="" style="height:150px;width:150px">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Thired Image</label>
                            <input type="file" class="form-control" id="inputEmail4" name="thired_image">  
                        </div>
                        <div class="col-md-6">
                            <img src="../public/upload_image/personal_info/<?= $row['thired_image'] ?>" alt="" style="height:150px;width:150px">
                        </div>
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