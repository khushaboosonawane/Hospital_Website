<?php
// create table award_wining_title (award_id integer primary key auto_increment,award_title varchar(2000),award_description varchar(2000));
include("../connection/connection.php");
extract($_POST);
$sql="UPDATE award_wining_title SET award_title='$award_title',award_description='$award_description'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:award_wining_patient.php");
}
else{
    echo "data not updated";
}
?>