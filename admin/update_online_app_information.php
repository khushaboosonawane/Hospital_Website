<?php
include("../connection/connection.php");

extract($_POST);
$sql="UPDATE online_app_info SET appointment_title='$appointment_title',appointement_subtitle='$appointement_subtitle',appointment_desc='$appointment_desc',appointment_number='$appointment_number'";
$data=mysqli_query($con,$sql);

if($data){
    header("location:banner_down_information.php");
}
else{
    echo "data not updated";
}
?>