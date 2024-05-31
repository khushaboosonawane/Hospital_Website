<?php
$det_id=$_GET['det_id'];
include("../connection/connection.php");
$image=mysqli_query($con,"select details_image from award_details where det_id='$det_id'");
$file="../public/upload_image/award_details/".(mysqli_fetch_row($image))[0];
if(unlink($file)){
    echo "image deleted successfully";
}
else{
    echo "image not deleted";
}


$data=mysqli_query($con,"DELETE FROM award_details WHERE det_id='$det_id'");
if($data){
    header("location:award_wining_patient.php");
}
else{
    echo "data not deleted";
}

?>