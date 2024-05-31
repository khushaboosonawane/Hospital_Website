<?php
// create table hospital_basic_info (hos_id integer primary key auto_increment,hospital_name varchar(2000),hospital_mobile varchar(10),hospital_emergency_number varchar(10),hospital_email varchar(2000),hospital_address varchar(3000),facebook_link text,twitter_link text,linkdin_link text,hospital_map_link text,hospital_logo text);
include("../connection/connection.php");


extract($_POST);

if($_FILES['hospital_logo']['name']!=""){
    // $sql="INSERT INTO hospital_basic_info (hospital_name,hospital_mobile,hospital_emergency_number,hospital_email,hospital_address,facebook_link,twitter_link,linkdin_link,hospital_map_link,hospital_logo) VALUES ('$hospital_name','$hospital_mobile','$hospital_emergency_number','$hospital_email','$hospital_address','$facebook_link','$twitter_link','$linkdin_link','$hospital_map_link','$hospital_logo')";
    $file_data=mysqli_query($con,"SELECT hospital_logo FROM hospital_basic_info");
    $file_row="../public/upload_image/hospital_logo/".(mysqli_fetch_assoc($file_data))['hospital_logo'];
    echo "<pre>";
    print_r($file_row);
    echo "</pre>";

    if(unlink($file_row)){
        echo "file remove successfully";
    }else{
        echo "file is not remove";
    }

    $hospital_logo=time().$_FILES['hospital_logo']['name'];
    move_uploaded_file($_FILES['hospital_logo']['tmp_name'],"../public/upload_image/hospital_logo/$hospital_logo");

    $sql="UPDATE hospital_basic_info SET hospital_name='$hospital_name',hospital_mobile='$hospital_mobile',hospital_emergency_number='$hospital_emergency_number',hospital_email='$hospital_email',hospital_address='$hospital_address',facebook_link='$facebook_link',twitter_link='$twitter_link',linkdin_link='$linkdin_link',hospital_map_link='$hospital_map_link',hospital_logo='$hospital_logo'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:hospital_basic_info.php");
        // echo "data send";
    } 
    else{
        echo "data not saved";
    }
}
else{
    // $sql="INSERT INTO hospital_basic_info (hospital_name,hospital_mobile,hospital_emergency_number,hospital_email,hospital_address,facebook_link,twitter_link,linkdin_link,hospital_map_link) VALUES ('$hospital_name','$hospital_mobile','$hospital_emergency_number','$hospital_email','$hospital_address','$facebook_link','$twitter_link','$linkdin_link','$hospital_map_link')";
    $sql="UPDATE hospital_basic_info SET hospital_name='$hospital_name',hospital_mobile='$hospital_mobile',hospital_emergency_number='$hospital_emergency_number',hospital_email='$hospital_email',hospital_address='$hospital_address',facebook_link='$facebook_link',twitter_link='$twitter_link',linkdin_link='$linkdin_link',hospital_map_link='$hospital_map_link'";
    $data=mysqli_query($con,$sql);
    if($data){
        header("location:hospital_basic_info.php");
        // echo "data send";
    } 
    else{
        echo "data not saved";
    }
}

?>