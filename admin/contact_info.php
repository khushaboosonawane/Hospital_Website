<?php
include("navbar.php");
include("../connection/connection.php");
?>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col col-md-12 my-4 d-flex justify-content-end">
            <a href="delete_contact_info.php">
                <button class="btn btn-danger btn-sm" style="background:red" onclick="return confirm('Are You Sure To Delete All Record')">
                    Remove All Data
                </button>
            </a>
        </div>
        <div class="col col-md-12">
            <table class="table table-bordered table-sm teable-responsive text-center">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql="SELECT * FROM contact_info";
                    $data=mysqli_query($con,$sql);
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){
                    ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['number'] ?></td>
                        <td><?= $row['message'] ?></td>
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
<br><br><br><br><br><br>

<?php
include("footer.php");
?>