<?php
include("../connection/connection.php");

// create table test_title_data(test_id integer primary key auto_increment,test_title varchar(2000),title_desc varchar(2000));
extract($_POST);
$sql="UPDATE test_title_data set test_title='$test_title',title_desc='$title_desc'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:testimonial.php");
}
else{
    echo "data not updated";
}
?>