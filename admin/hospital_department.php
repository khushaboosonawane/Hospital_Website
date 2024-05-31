<?php
include("navbar.php");
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Hospital Departments</h5>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_department_info.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Hospital Department Information</h4>
                    <hr>
                </div>
                <div class="row">
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Department Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Department Name" required name="dept_name">
                </div>
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Department Information</label>
                    <textarea class="form-control" id="inputEmail4" required name="dept_desc"></textarea>
                </div>
                </div>
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Department Image</label>
                    <input type="file" class="form-control" id="inputEmail4" required name="dept_image">
                </div>
                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 my-3">
            <table class="table table-bordered table-sm text-center table-responsive">
                <thead>
                    <tr>
                        <th>Update</th>
                        <th>Srno</th>
                        <th>Department Name</th>
                        <th>Department Description</th>
                        <th>Department Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../connection/connection.php");
                    $data=mysqli_query($con,"SELECT * FROM department");
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){

                    ?>

                    <tr>
                        <td>
                         <a href="edit_hospital_department.php?id=<?= $row['dept_id'] ?>">
                                <button class="btn btn-primary btn-sm">
                                    <i class="ri-edit-box-fill"></i>
                                </button>
                            </a>
                            <a href="delete_hospital_departments.php?dept_id=<?= $row['dept_id'] ?>">
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </a>
                        </td>
                        <td><?= $key+1 ?></td>
                        <td><?= $row['dept_name'] ?></td>
                        <td><?= $row['dept_desc'] ?></td>
                        <td>
                            <img src="../public/upload_image/department_image/<?= $row['dept_image'] ?>" style="height:150px;width:150px" alt="">
                        </td>
                    </tr>

                    <?php
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="20">Data Not Found</td>
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