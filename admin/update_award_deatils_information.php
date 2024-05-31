<?php
include("../connection/connection.php");
// $det_id=$_GET['det_id'];
extract($_POST);
if($_FILES['details_image']['name']!=""){

    $filename=mysqli_query($con,"SELECT details_image from award_details");
    $image_name="../public/upload_image/award_details/".(mysqli_fetch_row($filename))[0];
    unlink($image_name);

    $details_image=time().$_FILES['details_image']['name'];

    move_uploaded_file($_FILES['details_image']['tmp_name'],"../public/upload_image/award_details/$details_image");

    $sql="UPDATE award_details SET details_title='$details_title',award_details_description='$award_details_description',details_image='$details_image' WHERE det_id='$det_id'";


    $data=mysqli_query($con,$sql);
    if($data){
        header("location:award_wining_patient.php");
    }
    else{
        echo "data not updated";
    }
}
else{
    $sql="UPDATE award_details SET details_title='$details_title',award_details_description='$award_details_description' WHERE det_id='$det_id'";

    $data=mysqli_query($con,$sql);
    if($data){
        header("location:award_wining_patient.php");
    }
    else{
        echo "data not updated";
    }
}

?>