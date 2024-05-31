<?php
include("../connection/connection.php");
// create table suppor_title(sup_id integer  primary key  auto_increment,supp_title varchar(1000),supp_desc varchar(2000));

extract($_POST);

$sql="UPDATE suppor_title SET supp_title='$supp_title',supp_desc='$supp_desc'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:supportive_partners.php");
}
else{
    echo "data not updated";
}
?>