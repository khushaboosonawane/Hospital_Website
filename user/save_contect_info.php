<?php
include("../connection/connection.php");
// create table contact_info (contact_id integer primary key auto_increment,name varchar(2000),email varchar(2000),subject varchar(2000),number varchar(10),message text)
extract($_POST);
$sql="INSERT INTO contact_info(name,email,subject,number,message) VALUES ('$name','$email','$subject','$number','$message')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:contact.php");
}
else{
    echo "not ok";
}
?>