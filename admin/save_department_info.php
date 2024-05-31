<?php
// create table department(dept_id integer primary key auto_increment,dept_name varchar(2000));
include("../connection/connection.php");
extract($_POST);
$dept_image=time().$_FILES['dept_image']['name'];
move_uploaded_file($_FILES['dept_image']['tmp_name'],"../public/upload_image/department_image/$dept_image");
$sql="INSERT INTO department(dept_name,dept_image,dept_desc) VALUES ('$dept_name','$dept_image','$dept_desc')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:hospital_department.php");
}
else{
    echo "data not inserted";
}
?>