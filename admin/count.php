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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp;Hospital Employee Count Information</h5>
        </div>

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_count_information.php" method="post"  id="socialMediaForm">
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM count";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
                ?>
                <div class="row my-3">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Happy Customer</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Happy People Count" required name="happy_people" value="<?= $row['happy_people'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Surgery Completed</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Surgery Completed Count" required name="surgery_complete" value="<?= $row['surgery_complete'] ?>" >
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Experts Doctor</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Experts Doctor Count" required name="expert_doctors" value="<?= $row['expert_doctors'] ?>" >
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">World Wide Branch</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter World Wide Branch Count" required name="world_wide_branch" value="<?= $row['world_wide_branch'] ?>" >
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