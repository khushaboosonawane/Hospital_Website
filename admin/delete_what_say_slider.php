<?php
include("../connection/connection.php");
$sid=$_GET['sid'];
$sql="DELETE FROM what_say_slider WHERE sid='$sid'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:what_says.php");
}
else{
    echo "not delete";
}
?>
