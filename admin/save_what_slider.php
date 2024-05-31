<?php
include("../connection/connection.php");
// create table what_say_slider(sid integer primary key auto_increment,title varchar(2000),auth_name varchar(2000),desc_data varchar(2000));
extract($_POST);
$sql="INSERT INTO what_say_slider(title,auth_name,desc_data) VALUES ('$title','$auth_name','$desc_data')";
$data=mysqli_query($con,$sql);
if($data){
   header("location:what_says.php");
}
else{
    echo "data not";
}
?>