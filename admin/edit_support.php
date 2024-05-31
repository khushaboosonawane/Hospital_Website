<?php
include("navbar.php");
?>

<br><br><br><br>
<!-- create table suppor_title(sup_id integer  primary key  auto_increment,supp_title varchar(1000),supp_desc varchar(2000)); -->
<div class="container">
    <div class="row p-3 d-flex justify-content-center">
        <div class="col-md-12 p-2 text-center" style="background: linear-gradient(37deg, rgba(100,140,255,1) 11%, rgba(51,91,207,1) 57%, rgba(255,255,255,1) 95%);border-radius:10px">
            <h5 class="text-white"><i class="ri-flag-line"></i>&nbsp;&nbsp;&nbsp;Supportive Partners </h5>
        </div>
        <!-- create table supportive_partners(sup_id integer primary key auto_increment,logo text); -->
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_supportive_partners_data.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Supportive Partners Logo</h4>
                    <hr>
                </div>
                <div class="row">
                <?php
                include("../connection/connection.php");
                $id=$_GET['sup_id'];
                $data=mysqli_query($con,"SELECT * FROM supportive_partners WHERE sup_id='$id'");
                $row=mysqli_fetch_assoc($data);
                ?>
                <input type="hidden" name="sup_id" value="<?= $row['sup_id'] ?>" id="">
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="inputEmail4" name="logo">
                </div>
                <div class="col col-md-6">
                    <img src="../public/upload_image/support_team/<?= $row['logo'] ?>" alt="" style="height:150px;width:150px">
                </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Updated Information</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<?php
include("footer.php");
?>