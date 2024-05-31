<?php
include("../connection/connection.php");
$id=$_GET['id'];
$confirm=$_GET['status'];
// echo $id.$confirm;
$sql="UPDATE book_appointment SET status='$confirm' WHERE app_id=$id";
$data=mysqli_query($con,$sql);
if($data){
    header("location:imdex.php");
}
else{
    echo "not update";
}

?>