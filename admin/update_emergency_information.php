<?php

// create table emergency_case (emer_id integer primary key auto_increment,emergency_number varchar(10),emergency_desc varchar(3000),emergency_title varchar(1000))
echo "<pre>";
print_r($_POST);
echo "</pre>";
extract($_POST);
include("../connection/connection.php");
$sql="UPDATE emergency_case SET emergency_number='$emergency_number',emergency_desc='$emergency_desc',emergency_title='$emergency_title'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:banner_down_information.php");
}
else{
    echo "data not updated";
}
?>