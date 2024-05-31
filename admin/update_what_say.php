<?php
include("../connection/connection.php");
// create table what_say_title(wh_id integer primary key auto_increment,what_say_img text,what_say_title varchar(2000));
extract($_POST);
if($_FILES['what_say_img']['name']!=""){
    $file=mysqli_query($con,"SELECT what_say_img FROM what_say_title");
    $image="../public/upload_image/what_say/".(mysqli_fetch_row($file))[0];
    unlink($image);
    $what_say_img=time().$_FILES['what_say_img']['name'];
    move_uploaded_file($_FILES['what_say_img']['tmp_name'],"../public/upload_image/what_say/$what_say_img");
    $sql="UPDATE what_say_title SET what_say_title='$what_say_title',what_say_img='$what_say_img'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:what_says.php");
    }
    else{
        echo "not update";
    }
}
else{
    $sql="UPDATE what_say_title SET what_say_title='$what_say_title'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:what_says.php");
    }
    else{
        echo "not update";
    }
}
?>