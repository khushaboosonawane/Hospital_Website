<?php
include("../connection/connection.php");
$blog_id=$_GET['blog_id'];
$file=mysqli_query($con,"SELECT blog_image FROM blog WHERE blog_id='$blog_id'");
$image="../public/upload_image/blog_image/".(mysqli_fetch_row($file))[0];
unlink($image);
$sql="DELETE FROM blog WHERE blog_id='$blog_id'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:blog_information.php");
}
else{
    echo "not";
}
?>