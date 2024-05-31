<?php
include("../connection/connection.php");
// create table news_latter(news_id integer primary key auto_increment,email_address varchar(2000));
extract($_POST);
$sql="INSERT INTO news_latter(email_address) VALUES ('$email_address')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:index.php");
}
else{
    echo "not ok";
}
?>