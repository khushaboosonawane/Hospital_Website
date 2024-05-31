<?php

// create table home_page_banner(home_id integer primary key auto_increment, banner_image text,banner_subtitle varchar(1000),banner_main_title varchar(1000)) 
extract($_POST);
include("../connection/connection.php");

if($_FILES['banner_image']['name']!=""){
    $filename=mysqli_query($con,"SELECT banner_image from home_page_banner");
    $image_name="../public/upload_image/hospital_banner_image/".(mysqli_fetch_row($filename))[0];
    unlink($image_name);
    
    
    $banner_image=time().$_FILES['banner_image']['name'];
    move_uploaded_file($_FILES['banner_image']['tmp_name'],"../public/upload_image/hospital_banner_image/$banner_image");

    $sql="UPDATE home_page_banner SET banner_image='$banner_image',banner_subtitle='$banner_subtitle',banner_main_title='$banner_main_title',home_page_banner_desc='$home_page_banner_desc'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:home_page_banner.php");
        // echo "data updated successfully";
    }
    else{
        echo "data not updated";
    }

}
else{
    $sql="UPDATE home_page_banner SET banner_subtitle='$banner_subtitle',banner_main_title='$banner_main_title',home_page_banner_desc='$home_page_banner_desc'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:home_page_banner.php");
        // echo "data updated successfully";
    }
    else{
        echo "data not updated";
    }
}
?>