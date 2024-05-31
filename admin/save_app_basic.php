<?php
include("../connection/connection.php");

// create table appoint_basic_details(app_id integer primary key auto_increment,app_title varchar(1000),app_image text,app_description varchar(2000),app_mobile varchar(10));
extract($_POST);

if($_FILES['app_image']['name']!=""){
    $file=mysqli_query($con,"SELECT app_image FROM appoint_basic_details");
    $path="../public/upload_image/appointment_details/".(mysqli_fetch_row($file))[0];
    
    unlink($path);

    $app_image=time().$_FILES['app_image']['name'];
    move_uploaded_file($_FILES['app_image']['tmp_name'],"../public/upload_image/appointment_details/$app_image");

    $sql="UPDATE appoint_basic_details SET app_title='$app_title',app_image='$app_image',app_description='$app_description',app_mobile='$app_mobile'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:appointment_details.php"); 
    }
    else{
        echo "data not updated";
    }

}
else{
    $sql="UPDATE appoint_basic_details SET app_title='$app_title',app_description='$app_description',app_mobile='$app_mobile' WHERE app_id='1'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:appointment_details.php");
    }
    else{
        echo "data not updated";
    }     
}
?>