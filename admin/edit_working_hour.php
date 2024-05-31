<?php
include("navbar.php");
?>
<?php
include("../connection/connection.php");
$wor_id=$_GET['wor_id'];
$sql="SELECT * FROM working_hour WHERE wor_id='$wor_id'";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Home Page Working Hours</h5>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_working_hour_info.php" method="post" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Working Hours Information</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <div class="row my-3">
                        <input type="text" name="wor_id" value="<?= $row['wor_id'] ?>" id="">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="from_day" required>
                                <option value="<?= $row['from_day'] ?>"><?= $row['from_day'] ?></option>
                                <option value="sun">Sunday</option>
                                <option value="mon">Monday</option>
                                <option value="tue">Tuesday</option>
                                <option value="wen">Wenesday</option>
                                <option value="thur">Thursday</option>
                                <option value="fri">Friday</option>
                                <option value="sat">Saturday</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="to_day" required>
                                <option value="<?= $row['to_day'] ?>"><?= $row['to_day'] ?></option>
                                <option value="sun">Sunday</option>
                                <option value="mon">Monday</option>
                                <option value="tue">Tuesday</option>
                                <option value="wen">Wenesday</option>
                                <option value="thur">Thursday</option>
                                <option value="fri">Friday</option>
                                <option value="sat">Saturday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Select Time</label>
                        <input type="time" class="form-control" id="inputEmail4" placeholder="Enter Working Time" name="working_time" value="<?= $row['working_time'] ?>">
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