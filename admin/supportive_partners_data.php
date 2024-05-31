<?php
include("../connection/connection.php");
// create table supportive_partners(sup_id integer primary key auto_increment,logo text);
$logo=time().$_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],"../public/upload_image/support_team/$logo");
$sql="INSERT INTO supportive_partners (logo) VALUES ('$logo')";
$data=mysqli_query($con,$sql);
if($data){
    header("location:supportive_partners.php");
}
else{
    echo "not insert";
}
?>