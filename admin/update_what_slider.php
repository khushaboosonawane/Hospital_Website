<?php
include("../connection/connection.php");
extract($_POST);
// create table what_say_slider(sid integer primary key auto_increment,title varchar(2000),auth_name varchar(2000),desc varchar(2000));
$sql="UPDATE what_say_slider SET title='$title',auth_name='$auth_name',desc_data='$desc_data' WHERE sid='$sid'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:what_says.php");
}
else{
    echo "not update";
}
?>