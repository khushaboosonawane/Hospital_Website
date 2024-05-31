<?php
include("../connection/connection.php");
// create table personal_information (per_id integer primary key auto_increment,personal_title varchar(1000),personal_desc varchar(2000),first_image text,second_image text,thired_image text)
extract($_POST);

$sql="UPDATE personal_information SET personal_title='$personal_title',personal_desc='$personal_desc'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:personal_care.php");
}else{
    echo "data not Updated";
}

if($_FILES['first_image']['name']!=""){
    $first_image=time().$_FILES['first_image']['name'];
    move_uploaded_file($_FILES['first_image']['tmp_name'],"../public/upload_image/personal_info/$first_image");
    $sql="UPDATE personal_information SET first_image='$first_image'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:personal_care.php");
    }
    else{
        echo "data not updated";
    }
}
if($_FILES['second_image']['name']!=''){
    $second_image=time().$_FILES['second_image']['name'];
    move_uploaded_file($_FILES['second_image']['tmp_name'],"../public/upload_image/personal_info/$second_image");
    $sql="UPDATE personal_information SET second_image='$second_image'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:personal_care.php");
    }else{
        echo "data not updated";
    }
}
if($_FILES['thired_image']['name']!=''){
    $thired_image=time().$_FILES['thired_image']['name'];
    move_uploaded_file($_FILES['thired_image']['tmp_name'],"../public/upload_image/personal_info/$thired_image");
    $sql="UPDATE personal_information SET thired_image='$thired_image'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:personal_care.php");
    }else{
        echo "data not updated";
    }
}
?>