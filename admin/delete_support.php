<?php
include("../connection/connection.php");
$id=$_GET['sup_id'];
$file=mysqli_query($con,"SELECT logo FROM supportive_partners WHERE sup_id='$id'");
$image="../public/upload_image/support_team/".(mysqli_fetch_row($file))[0];
unlink($image);
$data="DELETE FROM supportive_partners WHERE sup_id='$id'";
$row=mysqli_query($con,$data);
if($row){
    header("location:supportive_partners.php");
}
else{
    echo "not okk";
}
?>
