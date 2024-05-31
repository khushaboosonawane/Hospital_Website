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
        <!-- create table award_wining_title (award_id integer primary key auto_increment,award_title varchar(2000),award_description varchar(2000)); -->

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_award_title_information.php" method="post" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Award Wining Title</h4>
                    <hr>
                </div>
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM award_wining_title";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
                ?>
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Award Wining Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Award Wining Title" required name="award_title" value="<?= $row['award_title'] ?>" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Award Wining Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Award Wining Description" name="award_description"><?= $row['award_description'] ?></textarea>
                    </div>
                   
                </div>

                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Update Information</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_award_deatils_information.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Award Wining Details</h4>
                    <hr>
                </div>
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Select Details Image</label>
                        <input type="file" class="form-control" id="inputEmail4"  required name="details_image"  >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Details Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Award Wining Details Title" required name="details_title"  >
                    </div>
                    <div class="col-md-12 my-3">
                        <label for="inputEmail4" class="form-label">Details Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Award Details Description" name="award_details_description"></textarea>
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
            <table class="table table-bordered table-striped table-hover table-sm my-5 text-center table-responsive">
                <thead>
                    <tr>
                        <th>
                            Update Data
                        </th>
                        <th>srno</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../connection/connection.php");
                    $sql="SELECT * FROM award_details";
                    $data=mysqli_query($con,$sql);
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){
                    ?>
                    <tr>
                        <td>
                            <a href="edit_award_wining.php?id=<?= $row['det_id'] ?>">
                                <button class="btn btn-primary btn-sm">
                                    <i class="ri-edit-box-fill"></i>
                                </button>
                            </a>
                            <a href="delete_award_wining_details.php?det_id=<?= $row['det_id'] ?>">
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </a>
                        </td>
                        <td><?= $key+1 ?></td>
                        <td>
                            <a href="../public/upload_image/award_details/<?= $row['details_image'] ?>" target="_blank">
                                <img src="../public/upload_image/award_details/<?= $row['details_image'] ?>" alt="award_image" title="award image" style="height:80px;width:80px;border-radius:50%" class="img-fluid">
                            </a>
                        </td>
                        <td><?= $row['details_title'] ?></td>
                        <td><?= $row['award_details_description'] ?></td>
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