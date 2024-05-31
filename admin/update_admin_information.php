<?php
include("../connection/connection.php");
extract($_POST);
if($_FILES['admin_photo']['name']!=""){
    $file=mysqli_query($con,"SELECT admin_photo FROM admin WHERE admin_id='$admin_id'");
    $image="../public/upload_image/admin_photo/".(mysqli_fetch_row($file))[0];
    unlink($image);
    $admin_photo=time().$_FILES['admin_photo']['name'];
    move_uploaded_file($_FILES['admin_photo']['tmp_name'],"../public/upload_image/admin_photo/$admin_photo");
    $sql="UPDATE admin SET admin_name='$admin_name',admin_mobile='$admin_mobile',admin_email='$admin_email',admin_password='$admin_password',admin_photo='$admin_photo' WHERE admin_id='$admin_id'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:admin_details.php");
    }
    else{
        echo "not okk";
    }

}
else{
    $sql="UPDATE admin SET admin_name='$admin_name',admin_mobile='$admin_mobile',admin_email='$admin_email',admin_password='$admin_password' WHERE admin_id='$admin_id'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:admin_details.php");
    }
    else{
        echo "not okk";
    } 
}
?>