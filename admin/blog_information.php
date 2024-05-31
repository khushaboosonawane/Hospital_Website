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
            <h5 class="text-white"><i class="ri-file-info-line"></i>&nbsp;&nbsp;Blog Information</h5>
        </div>
        <!-- create table blog (blog_id integer primary key auto_increment,blog_image text,blog_title varchar(2000),blog_desc varchar(2000),blog_date varchar(2000)); -->
        <div class="col-md-11 p-3 mt-5 shadow">
            <form action="save_blog_information.php" enctype="multipart/form-data" method="post" id="socialMediaForm">
                <div class="col-md-12">
                    <h4>Blog Information</h4>
                    <hr>
                </div>
                
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Blog Title" required name="blog_title" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Blog Date</label>
                        <input type="date" class="form-control" id="inputEmail4" placeholder="Enter Blog Date" required name="blog_date" >
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Blog Image</label>
                        <input type="file" class="form-control" id="inputEmail4" required name="blog_image" >
                    </div>
                   
                    <div class="col-md-6 my-3">
                        <label for="inputEmail4" class="form-label">Blog Description</label>
                        <textarea  class="form-control" id="inputEmail4" required placeholder="Enter Blog Description" name="blog_desc"></textarea>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col col-md-12 my-4">
            <table class="table table-sm text-center table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Update</th>
                        <th>Srno</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include("../connection/connection.php");
                $data=mysqli_query($con,"SELECT * FROM blog");
                if($data->num_rows>0){
                    foreach($data as $key=>$row){
                ?>
                <tr>
                    <td class="d-flex">
                        <a href="edit_blog.php?blog_id=<?= $row['blog_id'] ?>">
                            <button class="btn btn-primary btn-sm">
                                <i class="ri-edit-box-fill"></i>
                            </button>
                        </a>&nbsp;&nbsp;&nbsp;
                        <a href="delete_blog.php?blog_id=<?= $row['blog_id'] ?>">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </a>
                    </td>
                    <td><?= $key+1 ?></td>
                    <td><?= $row['blog_title'] ?></td>
                    <td><?= $row['blog_desc'] ?></td>
                    <td><?= $row['blog_date'] ?></td>
                    <td class="p-3">
                        <img src="../public/upload_image/blog_image/<?= $row['blog_image'] ?>" alt="" style="height:150px;width:150px">    
                    </td>
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