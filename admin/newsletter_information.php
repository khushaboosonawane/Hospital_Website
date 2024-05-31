<?php
include("navbar.php");
include("../connection/connection.php");
?>
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <table class="table table-sm table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Email Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data=mysqli_query($con,"SELECT * FROM news_latter");
                    if($data->num_rows>0){
                        foreach($data as $key=>$row){
                    ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $row['email_address'] ?></td>
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
<br><br><br><br><br><br><br><br>
<?php
include("footer.php")
?>