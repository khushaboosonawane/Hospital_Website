<?php
include("../connection/connection.php");
extract($_POST);
// create table team(team_id int primary key AUTO_INCREMENT,member_name varchar(2000),dept_id integer,education varchar(2000),doctor_image text);
if($_FILES['doctor_image']['name']!=""){
    $file=mysqli_query($con,"SELECT doctor_image FROM team WHERE team_id='$team_id'");
    $image="../public/upload_image/team/".(mysqli_fetch_row($file))[0];
    unlink($image);

    $doctor_image=time().$_FILES['doctor_image']['name'];
    move_uploaded_file($_FILES['doctor_image']['tmp_name'],"../public/upload_image/team/$doctor_image");

    $sql="UPDATE team SET member_name='$member_name',dept_id='$dept_id',education='$education',doctor_image='$doctor_image' WHERE team_id='$team_id'";
    $data=mysqli_query($con,$sql);
    if($data){
        
        header("location:team_members.php");
    }
    else{
        echo "data not updated";
    }
}else{
    $sql="UPDATE team SET member_name='$member_name',dept_id='$dept_id',education='$education' WHERE team_id='$team_id'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:team_members.php");
    }
    else{
        echo "data not updated";
    }
}
?>