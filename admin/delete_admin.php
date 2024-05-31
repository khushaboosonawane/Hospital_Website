<?php
include("../connection/connection.php");
$admin_id=$_GET['admin_id'];

$file=mysqli_query($con,"SELECT admin_photo FROM admin WHERE admin_id='$admin_id'");
$image="../public/upload_image/admin_photo/".(mysqli_fetch_row($file))[0];
unlink($image);
$sql="DELETE FROM admin WHERE admin_id='$admin_id'";
$data=mysqli_query($con,$sql);
if($data){
   header("location:admin_details.php");
}
else{
    echo "not deleted";
}
?>