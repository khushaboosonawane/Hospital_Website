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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;Admin Information</h5>
        </div>
        <!-- create table admin(admin_id integer primary key auto_increment,admin_name varchar(2000),admin_mobile varchar(10),admin_email varchar(1000),admin_password varchar(10),admin_photo text); -->
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_admin_information.php" enctype="multipart/form-data" method="post" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Admin Information</h4>
                    <hr>
                </div>
                
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Admin Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Admin Name" required name="admin_name" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Admin Mobile</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Admin Mobile" required name="admin_mobile" >
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Admin Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Admin Email" required name="admin_email" >
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Admin Password</label>
                        <input type="password" class="form-control" id="inputEmail4" placeholder="Enter Admin Password" required name="admin_password" >
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Admin Image</label>
                        <input type="file" class="form-control" id="inputEmail4" required name="admin_photo" >
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>
        </div>
      <div class="col col-md-12">
        <table class="table table-bordered table-sm my-4 text-center">
            <thead>
                <tr>
                    <th>Update</th>
                    <th>Srno</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM admin";
                $data=mysqli_query($con,$sql);
                if($data->num_rows>0){
                    foreach($data as $key=>$row){
                ?>
                <tr>
                    <td>
                        <a href="edit_admin.php?admin_id=<?= $row['admin_id'] ?>">
                            <button class="btn btn-primary btn-sm">
                                <i class="ri-pencil-line"></i>
                            </button>
                        </a>&nbsp;
                        <a href="delete_admin.php?admin_id=<?= $row['admin_id'] ?>">
                            <button class="btn btn-danger btn-sm " style="background-color:red" onclick="return confirm('Are You Sure To Delete Record')" >
                                <i class="ri-delete-bin-3-line"></i>
                            </button>
                        </a>
                    </td>
                    <td><?= $key+1 ?></td>
                    <td><?= $row['admin_name'] ?></td>
                    <td><?= $row['admin_mobile'] ?></td>
                    <td><?= $row['admin_email'] ?></td>
                    <td><?= $row['admin_password'] ?></td>
                    <td class="p-4">
                        <img src="../public/upload_image/admin_photo/<?= $row['admin_photo'] ?>" style="height:150px;width:150px" alt="">
                    </td>
                </tr>
                <?php
                    }
                }else{
                    ?>
                    <tr>
                        <td colspan="20" class="text-center">Data Not Found</td>
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