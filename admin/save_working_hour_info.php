<?php
include("../connection/connection.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";
// create table working_hour (wor_id integer primary key auto_increment,from_day varchar(1000),to_day varchar(2000),working_time varchar(2000));
extract($_POST);
$sql="INSERT INTO working_hour (from_day,to_day,working_time) VALUES ('$from_day','$to_day','$working_time')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:working_hours_information.php");
}
else{
    echo "data not inseerted";
}
?>