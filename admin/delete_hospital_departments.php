<?php
include("../connection/connection.php");
$dept_id=$_GET['dept_id'];

$file=mysqli_query($con,"SELECT dept_image FROM department WHERE dept_id='$dept_id'");
$image="../public/upload_image/department_image/".(mysqli_fetch_row($file))[0];
unlink($image);

$data=mysqli_query($con,"DELETE FROM department WHERE dept_id='$dept_id'");
if($data){
    header("location:hospital_department.php");
}
else{
    echo "data not deleted";
}
?>