<?php
include("../connection/connection.php");
// create table healthy_living(hid int primary key auto_increment,healthy_living_title varchar(2000),healthy_image text,healthy_desc text)
extract($_POST);
if($_FILES['healthy_image']['name']!=""){
   $file=mysqli_query($con,"SELECT healthy_image FROM healthy_living");
   $image="../public/upload_image/healthy_living/".(mysqli_fetch_row($file))[0];
   unlink($image);


    $healthy_image=time().$_FILES['healthy_image']['name'];
    move_uploaded_file($_FILES['healthy_image']['tmp_name'],"../public/upload_image/healthy_living/$healthy_image");

    $sql="UPDATE healthy_living SET healthy_living_title='$healthy_living_title',healthy_image='$healthy_image',healthy_desc='$healthy_desc'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:healthy_living_title.php");
    }
    else{
        echo "not okk";
    }
}
else{
    $sql="UPDATE healthy_living SET healthy_living_title='$healthy_living_title',healthy_desc='$healthy_desc'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:healthy_living_title.php");
    }
    else{
        echo "not okk";
    }
}
?>