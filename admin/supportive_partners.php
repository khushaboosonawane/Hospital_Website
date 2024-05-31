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
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_support_title.php" method="post" id="socialMediaForm" >
                <div class="col-md-12">
                    <h4>Title Information</h4>
                    <hr>
                </div>
                <?php
                include("../connection/connection.php");
                $data=mysqli_query($con,"SELECT * FROM suppor_title");
                $row=mysqli_fetch_assoc($data);
                ?>
                <div class="row">
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Title Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Title" required name="supp_title" value="<?= $row['supp_title'] ?>" >
                </div>
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Title Description</label>
                    <textarea class="form-control" id="inputEmail4" required name="supp_desc" placeholder="Enter Title Description"><?= $row['supp_desc'] ?></textarea>
                </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">update Information</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- create table supportive_partners(sup_id integer primary key auto_increment,logo text); -->
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="supportive_partners_data.php" method="post" id="socialMediaForm" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>Supportive Partners Logo</h4>
                    <hr>
                </div>
                <div class="row">
                
                <div class="col col-md-6">
                    <label for="inputEmail4" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="inputEmail4" required name="logo">
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

    <div class="row">
        <div class="col col-md-12 my-3">
            <table class="table table-bordered table-sm text-center table-responsive">
                <thead>
                    <tr>
                        <th>Update</th>
                        <th>Srno</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../connection/connection.php");
                    $data=mysqli_query($con,"SELECT * FROM supportive_partners");
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){
                    ?>
                    <tr>
                        <td >
                        <a href="edit_support.php?sup_id=<?= $row['sup_id'] ?>">
                                <button class="btn btn-primary btn-sm">
                                    <i class="ri-pencil-line"></i>
                                </button>
                            </a>&nbsp;
                            <a href="delete_support.php?sup_id=<?= $row['sup_id'] ?>">
                                <button class="btn btn-danger btn-sm " style="background-color:red" onclick="return confirm('Are You Sure To Delete Record')" >
                                    <i class="ri-delete-bin-3-line"></i>
                                </button>
                            </a>
                        </td>
                        <td><?= $key+1 ?></td>
                        <td class="p-3">
                            <img src="../public/upload_image/support_team/<?= $row['logo'] ?>" style="height:150px;width:150px" alt="">
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