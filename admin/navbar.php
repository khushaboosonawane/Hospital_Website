


<?php
session_start();
if(!isset($_SESSION['admin_id'])){
  header("location:login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yahova Admin Panel</title>
  <link rel="shortcut icon" type="image/png" href="../public/assets/images/logos/hospital_log_2.png" />
  <link rel="stylesheet" href="../public/assets/css/styles.min.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <!-- <img src="../public/assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
            <img src="../public/assets/images/logos/hospital_log_2.png" width="150" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                <i class="ri-stethoscope-line " style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Appointement Details</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="contact_info.php" aria-expanded="false">
                <span>
                <i class="ri-stethoscope-line " style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Contact Details</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="newsletter_information.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">NewsLetter Information</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="hospital_basic_info.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Hospital Basic Information</span>
              </a>
            </li>
            <li class="sidebar-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle lead" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border:none">
                <span class="lead">
                <i class="ri-home-2-line"></i>
                Home Page 
                </span>
                
              </button>
              <ul class="dropdown-menu" style="box-shadow:none">
                <li><a class="dropdown-item" href="home_page_banner.php">Home Page Banner</a></li>
                <li><a class="dropdown-item" href="banner_down_information.php">Banner Down Information</a></li>
                <li><a class="dropdown-item" href="working_hours_information.php">Working Hours Information</a></li>
                <li><a class="dropdown-item" href="personal_care.php">Personal Care</a></li>
                <li><a class="dropdown-item" href="count.php">Count</a></li>
                <li><a class="dropdown-item" href="award_wining_patient.php">Award Wining Patient</a></li>
                <li>
                  <a class="dropdown-item" href="appointment_details.php">Appoinment Details</a>
                </li>
                <li>
                  <a class="dropdown-item" href="hospital_department.php">Hospital Departments</a>
                </li>
                <li>
                  <a class="dropdown-item" href="testimonial.php">Testimonial</a>
                </li>
                <li>
                  <a class="dropdown-item" href="supportive_partners.php">Supportive Partners</a>
                </li>
              </ul>
            </div>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="supportive_partners.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Supportive Partners</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="team_members.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Team Members</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="healthy_living_title.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Healthy Living Title</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="what_says.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">What Says</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="appointement_banner.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Appointment Banner</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="blog_information.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Blog Information</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="admin_details.php" aria-expanded="false">
                <span>
                  <i class="ri-file-info-line" style="font-size:20px"></i>
                </span>
                <span class="hide-menu">Admin</span>
              </a>
            </li>
            
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->


    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0 navbar-dark bg-dark text-white" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php
                  include("../connection/connection.php");
                  $admin_id=$_SESSION['admin_id'];
                  $sql="SELECT * FROM admin WHERE admin_id='$admin_id'";
                  $data=mysqli_query($con,$sql);
                  $row=mysqli_fetch_assoc($data);
                  ?>
                  <h5 class="text-white"><?= $row['admin_name'] ?></h5> &nbsp;&nbsp;<br>
          
                  <img src="../public/upload_image/admin_photo/<?= $row['admin_photo'] ?>" alt="" width="35" height="35" class="rounded-circle"> <br>
                  
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
