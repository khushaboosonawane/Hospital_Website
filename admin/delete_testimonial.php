<?php
include("../connection/connection.php");
$test_id=$_GET['test_id'];
$file=mysqli_query($con,"SELECT cus_image FROM testimonial WHERE test_id='$test_id'");
$image="../public/upload_image/testimonial/".(mysqli_fetch_row($file))[0];
unlink($image);
$data=mysqli_query($con,"DELETE FROM testimonial WHERE test_id='$test_id'");

if($data){
    header("location:testimonial.php");
}
else{
    echo "data not deleted";
}
?>