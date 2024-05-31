<?php
include("../connection/connection.php");
$sql="TRUNCATE TABLE contact_info";
$data=mysqli_query($con,$sql);
if($data){
    header("location:contact_info.php");
}
else{
    echo "data not deleted";
}
?>

