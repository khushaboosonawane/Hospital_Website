<?php
include("../connection/connection.php");
$team_id=$_GET['team_id'];
$file=mysqli_query($con,"SELECT doctor_image FROM team WHERE team_id='$team_id'");
$image="../public/upload_image/team/".(mysqli_fetch_row($file))[0];
unlink($image);

$data=mysqli_query($con,"DELETE FROM team WHERE team_id='$team_id'");
if($data){
    header("location:team_members.php");
}
else{
    echo "not okk";
}
?>