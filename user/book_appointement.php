<?php
include("../connection/connection.php");
extract($_POST);
$sql="INSERT INTO book_appointment (dept_id,doctor_name,app_date,app_time,app_name,app_phone,app_message,status) VALUES ('$dept_id','$doctor_name','$app_date','$app_time','$app_name','$app_phone','$app_message','pending')";
$data=mysqli_query($con,$sql);
if($data){
   header("location:index.php");
}
else{
    echo "data not inserted";
}
?>

<!-- create table book_appointment(app_id integer primary key auto_increment,dept_id integer,doctor_name varchar(1000),app_date varchar(1000),app_time varchar(1000),app_name varchar(1000),app_phone varchar(10),app_message varchar(1000),status); -->