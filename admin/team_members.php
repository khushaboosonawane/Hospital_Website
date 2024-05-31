<?php
include("navbar.php");
?>

<br><br><br><br>

<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Team Members</h5>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_team_memeber.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Team Member Information</h4>
                    <hr>
                </div>
                <!-- create table team(team_id int primary key AUTO_INCREMENT,member_name varchar(2000),dept_id integer,education varchar(2000),doctor_image text); -->
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Department Name</label>
                            <select class="form-select" aria-label="Default select example" name="dept_id" required>
                            <option value="">Select Department</option>
                                <?php
                                include("../connection/connection.php");
                                $data=mysqli_query($con,"SELECT * FROM department");
                                if($data->num_rows>0){
                                    foreach($data as $row){
                                ?>
                                <option value="<?= $row['dept_id'] ?>"><?= $row['dept_name'] ?></option>
                                <?php
                                    }
                                }else{
                                ?>
                                <option value="NA">No Data Found</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Doctor Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Doctor Name" name="member_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Doctor Image</label>
                            <input type="file" class="form-control" id="inputEmail4" name="doctor_image">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Doctor Education</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Doctor Education" name="education">
                        </div>
                    </div>
                    <div class="col-md-12 text-center my-4">
                        <button class="btn btn-primary">Save Information</button>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="col col-md-12 my-4">
        <table class="table table-bordered table-sm text-center table-responsive">
                <thead>
                    <tr>
                        <th>update</th>
                        <th>Srno</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Education</th>
                    </tr>
                </thead>
                <!-- create table team(team_id int primary key AUTO_INCREMENT,member_name varchar(2000),dept_id integer,education varchar(2000),doctor_image text); -->
                <tbody>
                    <?php
                    include("../connection/connection.php");
                    $data=mysqli_query($con,"SELECT * FROM team,department WHERE team.dept_id=department.dept_id");
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){
                    ?>
                    <tr>
                        <td>
                        <a href="edit_team.php?team_id=<?= $row['team_id'] ?>">
                                <button class="btn btn-primary btn-sm">
                                    <i class="ri-pencil-line"></i>
                                </button>
                            </a>&nbsp;
                            <a href="delete_team.php?team_id=<?= $row['team_id'] ?>">
                                <button class="btn btn-danger btn-sm " style="background-color:red" onclick="return confirm('Are You Sure To Delete Record')" >
                                    <i class="ri-delete-bin-3-line"></i>
                                </button>
                            </a>
                        </td>
                        <td><?= $key+1 ?></td>
                        <td>
                            <img src="../public/upload_image/team/<?= $row['doctor_image'] ?>" style="height:140px;width:140px" alt="">
                        </td>
                        <td><?= $row['member_name'] ?></td>
                        <td><?= $row['dept_name'] ?></td>
                        <td><?= $row['education'] ?></td>
                    </tr>
                    <?php
                    }
                    }else{
                    ?>
                    <td colspan="20">No Data Fount</td>
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