<?php
include("navbar.php");
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Update Hospital Departments</h5>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_department_info.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Hospital Department Information</h4>
                    <hr>
                </div>
                <?php
                include("../connection/connection.php");
                $id=$_GET['id'];
                $data=mysqli_query($con,"SELECT * FROM department WHERE dept_id='$id'");
                $row=mysqli_fetch_assoc($data);
                ?>
                <input type="hidden" name="dept_id" value="<?= $row['dept_id'] ?>" id="">
                <div class="col col-md-8">
                    <label for="inputEmail4" class="form-label">Department Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Department Name" required value="<?= $row['dept_name'] ?>" name="dept_name">
                </div>
                <div class="row my-4">
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Department Image</label>
                    <input type="file" class="form-control" id="inputEmail4"  name="dept_image">
                </div>
                <div class="col col-md-6">
                    <img src="../public/upload_image/department_image/<?= $row['dept_image'] ?>" style="height:150px;width:150px" alt="">
                </div>
                <div class="col col-md-12">
                    <label for="inputEmail4" class="form-label">Department Information</label>
                    <textarea class="form-control" id="inputEmail4" value="<?= $row['dept_desc'] ?>" name="dept_desc"><?= $row['dept_desc'] ?></textarea>
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