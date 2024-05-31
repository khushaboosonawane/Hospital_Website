<?php
include("../connection/connection.php");
extract($_POST);
// create table blog (blog_id integer primary key auto_increment,blog_image text,blog_title varchar(2000),blog_desc varchar(2000),blog_date varchar(2000));
if($_FILES['blog_image']['name']!=""){
    $file=mysqli_query($con,"SELECT blog_image FROM blog WHERE blog_id='$blog_id'");
    $image="../public/upload_image/blog_image/".(mysqli_fetch_row($file))[0];
    unlink($image);

    $blog_image=time().$_FILES['blog_image']['name'];
    move_uploaded_file($_FILES['blog_image']['tmp_name'],"../public/upload_image/blog_image/$blog_image");

    $sql="UPDATE blog SET blog_title='$blog_title',blog_desc='$blog_desc',blog_date='$blog_date',blog_image='$blog_image' WHERE blog_id='$blog_id'";

    $data=mysqli_query($con,$sql);
    if($data){
       header("location:blog_information.php");
    }
    else{
        echo "data not updated";
    }
}
else{
    $sql="UPDATE blog SET blog_title='$blog_title',blog_desc='$blog_desc',blog_date='$blog_date' WHERE blog_id='$blog_id'";

    $data=mysqli_query($con,$sql);
    if($data){
       header("location:blog_information.php");
    }
    else{
        echo "data not updated";
    }
}

?>