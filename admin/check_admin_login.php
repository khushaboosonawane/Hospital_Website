<?php
session_start();
include("../connection/connection.php");
extract($_POST);
$sql="SELECT * FROM admin WHERE admin_email='$admin_email' and admin_password='$admin_password'";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
if(isset($row['admin_id'])){
    $_SESSION['admin_id']=$row['admin_id'];
    header("location:index.php");
}
else{
    ?>
    <script>
        alert("Invalid Login");
        window.location.href="login.php"
    </script>
    <?php
}
?>