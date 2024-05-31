<?php
include("../connection/connection.php");
// create table team(team_id int primary key AUTO_INCREMENT,member_name varchar(2000),dept_id integer,education varchar(2000),doctor_image text);
extract($_POST);

$doctor_image=time().$_FILES['doctor_image']['name'];
move_uploaded_file($_FILES['doctor_image']['tmp_name'],"../public/upload_image/team/$doctor_image");

$sql="INSERT INTO team(member_name,dept_id,education,doctor_image) values ('$member_name','$dept_id','$education','$doctor_image')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:team_members.php");
}else{
    echo "not okk";
}
?>