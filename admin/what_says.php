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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;&nbsp;What They Say?..</h5>
        </div>

        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="update_what_say.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <h4>What Says Information</h4>
                    <hr>
                </div>
                <!-- create table what_say_title(wh_id integer primary key auto_increment,what_say_img text,what_say_title varchar(2000)); -->
                <?php
                include("../connection/connection.php");
                $sql="SELECT * FROM what_say_title";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data);
            
                ?>
                <div class="row my-3">
                    <div class="col col-md-3">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Title" required name="what_say_title" value="<?= $row['what_say_title'] ?>" >
                    </div>

                    <div class="col col-md-3">
                        <label for="inputEmail4" class="form-label">What Say Image</label>
                        <input type="file" class="form-control" id="inputEmail4" name="what_say_img" >
                    </div>
                    <div class="col col-md-3">
                        <img src="../public/upload_image/what_say/<?= $row['what_say_img'] ?>" style="height:150px;width:150px" alt="">
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
            <form action="save_what_slider.php" method="post">
                <div class="col-md-12">
                    <h4>What Saya Slider Information</h4>
                    <hr>
                </div>
                <!-- create table what_say_slider(sid integer primary key auto_increment,title varchar(2000),auth_name varchar(2000),desc_data varchar(2000)); -->
                <div class="row my-3">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Title" required name="title" value="">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Authorizer Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Authorizer Name" required name="auth_name" value=""  >
                    </div>

                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Emergency Description</label>
                        <textarea class="form-control" id="inputEmail4" placeholder="Enter Description" required name="desc_data" value=""></textarea>
                    </div>
                    
                </div>
                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col col-md-12 my-3">
            <table class="table table-bordered table-hover table-responsive text-center">
                <thead>
                    <tr>
                        <th>Update</th>
                        <th>Srno</th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../connection/connection.php");
                    $data=mysqli_query($con,"SELECT * FROM what_say_slider");
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){
                    ?>
                    <tr>
                        <td class="d-flex">
                        <a href="edit_what_say_slider.php?sid=<?= $row['sid'] ?>">
                                <button class="btn btn-primary btn-sm">
                                    <i class="ri-pencil-line"></i>
                                </button>
                            </a>&nbsp;&nbsp;
                            <a href="delete_what_say_slider.php?sid=<?= $row['sid'] ?>">
                                <button class="btn btn-danger btn-sm " style="background-color:red" onclick="return confirm('Are You Sure To Delete Record')" >
                                    <i class="ri-delete-bin-3-line"></i>
                                </button>
                            </a>
                        </td>
                        <td><?=  $key+1 ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['auth_name'] ?></td>
                        <td><?= $row['desc_data'] ?></td>
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