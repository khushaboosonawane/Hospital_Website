<?php
// create table testimonial(test_id int primary key auto_increment,cus_name varchar(2000),cus_rev varchar(3000),cus_dise varchar(3000),cus_image text)

include("../connection/connection.php");
extract($_POST);
$cus_image=$_FILES['cus_image']['name'];
move_uploaded_file($_FILES['cus_image']['tmp_name'],"../public/upload_image/testimonial/$cus_image");
$sql="INSERT INTO testimonial (cus_name,cus_rev,cus_dise,cus_image) VALUES ('$cus_name','$cus_rev','$cus_dise','$cus_image')";
$data=mysqli_query($con,$sql);
if($data){
   header("location:testimonial.php");
}
else{
    echo "data not inserted";
}
?>