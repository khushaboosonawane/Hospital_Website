<?php
include("../connection/connection.php");
// create table testimonial(test_id int primary key auto_increment,cus_name varchar(2000),cus_rev varchar(3000),cus_dise varchar(3000),cus_image text)
extract($_POST);
if($_FILES['cus_image']['name']!=""){
    $file=mysqli_query($con,"SELECT cus_image FROM testimonial WHERE test_id='$test_id'");
    $image="../public/upload_image/testimonial/".(mysqli_fetch_row($file))[0];
    
    unlink($image);

    $cus_image=$_FILES['cus_image']['name'];
    move_uploaded_file($_FILES['cus_image']['tmp_name'],"../public/upload_image/testimonial/$cus_image");
    $sql="UPDATE testimonial SET cus_name='$cus_name',cus_rev='$cus_rev',cus_dise='$cus_dise',cus_image='$cus_image' WHERE test_id='$test_id'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:testimonial.php");
    }
    else{
        echo "not updated";
    }


}
else{
    $sql="UPDATE testimonial SET cus_name='$cus_name',cus_rev='$cus_rev',cus_dise='$cus_dise' WHERE test_id='$test_id'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:testimonial.php");
    }
    else{
        echo "not updated";
    }
}
?>