<?php
include("../connection/connection.php");
extract($_POST);
// create table appointment_banner(app_id integer primary key auto_increment,app_image text,app_title varchar(2000));

if($_FILES['app_image']['name']!=""){
    $app_image=time().$_FILES['app_image']['name'];
    move_uploaded_file($_FILES['app_image']['tmp_name'],"../public/upload_image/app_banner/$app_image");
    $sql="UPDATE appointment_banner SET app_image='$app_image',app_title='$app_title'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:appointement_banner.php");
    }
    else{
        echo "not updated";
    }
}
else{
    $sql="UPDATE appointment_banner SET app_title='$app_title'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:appointement_banner.php");
    }
    else{
        echo "not updated";
    }
}
?>