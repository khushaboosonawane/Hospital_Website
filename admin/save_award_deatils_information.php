<?php
include("../connection/connection.php");
// create table award_details (det_id integer primary key auto_increment,details_title varchar(1000),award_details_description varchar(2000),details_image text);
extract($_POST);

$details_image=time().$_FILES['details_image']['name'];
move_uploaded_file($_FILES['details_image']['tmp_name'],"../public/upload_image/award_details/$details_image");
$sql="INSERT INTO award_details (details_title,award_details_description,details_image) VALUES ('$details_title','$award_details_description','$details_image')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:award_wining_patient.php");
}
else{
    echo "data not inserted";
}
?>