<?php
include("../connection/connection.php");
extract($_POST);
// create table supportive_partners(sup_id integer primary key auto_increment,logo text);
if($_FILES['logo']['name']!=""){
    $file=mysqli_query($con,"SELECT logo FROM supportive_partners WHERE sup_id='$sup_id'");
    $image="../public/upload_image/support_team/".(mysqli_fetch_row($file))[0];
    unlink($image);
    $logo=time().$_FILES['logo']['name'];
    move_uploaded_file($_FILES['logo']['tmp_name'],"../public/upload_image/support_team/$logo");
    $sql="UPDATE supportive_partners SET logo='$logo' WHERE sup_id='$sup_id'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:supportive_partners.php");
    }
    else{
        echo "not okk";
    }
}
?>