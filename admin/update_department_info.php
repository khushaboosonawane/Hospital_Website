<?php
include("../connection/connection.php");
extract($_POST);

if($_FILES['dept_image']['name']!=""){

    $file=mysqli_query($con,"SELECT dept_image FROM department WHERE dept_id='$dept_id'");
    $image="../public/upload_image/department_image/".(mysqli_fetch_row($file))[0];

    unlink($image);

    $dept_image=time().$_FILES['dept_image']['name'];
    move_uploaded_file($_FILES['dept_image']['tmp_name'],"../public/upload_image/department_image/$dept_image");
    $sql="UPDATE department SET dept_name='$dept_name',dept_image='$dept_image',dept_desc='$dept_desc' WHERE dept_id='$dept_id'";
    $data=mysqli_query($con,$sql);
    if($data){
       header("location:hospital_department.php");
    }
    else{
        echo "data not updated";
    }

}
else{
    $sql="UPDATE department SET dept_name='$dept_name',dept_desc='$dept_desc' WHERE dept_id='$dept_id'";
    $data=mysqli_query($con,$sql);
    if($data){
       header("location:hospital_department.php");
    }
    else{
        echo "data not updated";
    }
   
}

?>