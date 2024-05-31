<!-- create table blog (blog_id integer primary key auto_increment,blog_image text,blog_title varchar(2000),blog_desc varchar(2000),blog_date varchar(2000)); -->

<?php
include("../connection/connection.php");
extract($_POST);
$blog_image=time().$_FILES['blog_image']['name'];
move_uploaded_file($_FILES['blog_image']['tmp_name'],"../public/upload_image/blog_image/$blog_image");
$sql="INSERT INTO blog(blog_image,blog_title,blog_desc,blog_date) VALUES ('$blog_image','$blog_title','$blog_desc','$blog_date')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:blog_information.php");
}
else{
    echo "not inserted";
}
?>