<?php
include("navbar.php");
?>

<div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 p-5 shadow">

        <table class="table table-bordered table-hover table-sm text-center table-striped">
          <thead>
            <tr>
              <th>Report</th>
              <th>Srno</th>
              <th>Patient Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Doctor Name</th>
              <th>Department</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("../connection/connection.php");
            $today_date=date("Y-m-d");
            $sql="SELECT * FROM book_appointment,department where book_appointment.dept_id=department.dept_id and book_appointment.app_date='$today_date'";
            $data=mysqli_query($con,$sql);
            if($data->num_rows>0){
              foreach($data as $key=>$row){
            ?>
            <tr>
              <td>
                <?php
                if($row['status']=="pending"){
                ?>
                <a href="cofirm_app.php?id=<?= $row['app_id'] ?>&status=confirm">
                <button class="btn btn-primary btn-sm">Confirm</button>
                </a>
                <a href="pending_app.php?id=<?= $row['app_id'] ?>&status=pending_app">
                <button class="btn btn-danger btn-sm">Pending</button>
                </a>
                <?php
                }
                ?>
                <?php
                if($row['status']=='confirm'){
                ?>
                <button class="btn btn-success btn-sm">
                <i class="ri-check-double-line"></i>
                </button>
                <?php
                }
                ?>
                <?php
                if($row['status']=='pending_app'){
                ?>
                <button class="btn btn-danger btn-sm">
                  Cancel
                </button>
                <?php
                }
                ?>
              </td>
              <td><?= $key+1 ?></td>
              <td><?= $row['app_name'] ?></td>
              <td><?= $row['app_date'] ?></td>
              <td><?=
               $row['app_time'] 
               ?></td>
              <td><?= $row['doctor_name'] ?></td>
              <td><?= $row['dept_name'] ?></td>
            </tr>
            <?php
              }
            }else{
              ?>
              <tr>
                <td colspan="20">No Appointement Found</td>
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