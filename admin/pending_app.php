<?php
include("../connection/connection.php");
$id=$_GET['id'];
$status=$_GET['status'];
$sql="UPDATE book_appointment SET status='$status' WHERE app_id='$id'";
$data=mysqli_query($con,$sql);
if($data){
    location("header:index.php");
}
else{
    echo "not updated";
}

?>