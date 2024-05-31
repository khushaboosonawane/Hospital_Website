<?php
include("navbar.php");
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Home Page Working Hours</h5>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_working_hour_info.php" method="post" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Working Hours Information</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <div class="row my-3">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="from_day" required>
                                <option value="">Select Day</option>
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
                                <option value="">Select Day</option>
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
                        <input type="time" class="form-control" id="inputEmail4" placeholder="Enter Working Time" name="working_time">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered text-center table-sm table-responsive ">
                <thead>
                    <tr>
                        <th>
                            update Data
                        </th>
                        <th>srno</th>
                        <th>From Day</th>
                        <th>To Day</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../connection/connection.php");
                    $data=mysqli_query($con,"SELECT * FROM working_hour");
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){
                    ?>
                    <tr>
                        <td>
                            <a href="edit_working_hour.php?wor_id=<?= $row['wor_id'] ?>">
                                <button class="btn btn-primary btn-sm">
                                    <i class="ri-pencil-line"></i>
                                </button>
                            </a>
                            <a href="delete_working_info.php?wor_id=<?= $row['wor_id'] ?>">
                                <button class="btn btn-danger btn-sm " style="background-color:red" onclick="return confirm('Are You Sure To Delete Record')" >
                                    <i class="ri-delete-bin-3-line"></i>
                                </button>
                            </a>
                        </td>
                        <td><?= $key+1 ?></td>
                        <td><?= $row['from_day'] ?></td>
                        <td><?= $row['to_day'] ?></td>
                        <td><?= $row['working_time'] ?></td>
                    </tr>
                    <?php
                     }
                    }else{
                    ?>
                    <tr>
                        <td colspan="5" class="text-center">Data Not Found</td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php
include("footer.php");
?>