<?php
include("../connection/connection.php");
// create table admin(admin_id integer primary key auto_increment,admin_name varchar(2000),admin_mobile varchar(10),admin_email varchar(1000),admin_password varchar(10),admin_photo text);
extract($_POST);
$admin_photo=time().$_FILES['admin_photo']['name'];
move_uploaded_file($_FILES['admin_photo']['tmp_name'],"../public/upload_image/admin_photo/$admin_photo");
$sql="INSERT INTO admin(admin_name,admin_mobile,admin_email,admin_password,admin_photo) VALUES ('$admin_name','$admin_mobile','$admin_email','$admin_password','$admin_photo')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:admin_details.php");
}
else{
    echo "not insert";
}
?>