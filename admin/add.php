<?php
// Koneksi ke database
include '../config/fungsi.php'; // Pastikan koneksi Anda benar

// Periksa jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $pekerjaan = $_POST['pekerjaan'];
    $nim = $_POST['nim'];
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $nomorTelepon = $_POST['nomorTelepon'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $asal_kampus = $_POST['asal_kampus'];
    $alamat = $_POST['alamat'];

    // Escape string untuk mencegah SQL Injection
    $pekerjaan = mysqli_real_escape_string($db, $pekerjaan);
    $nim = mysqli_real_escape_string($db, $nim);
    $nama_depan = mysqli_real_escape_string($db, $nama_depan);
    $nama_belakang = mysqli_real_escape_string($db, $nama_belakang);
    $tgl_lahir = mysqli_real_escape_string($db, $tgl_lahir);
    $nomorTelepon = mysqli_real_escape_string($db, $nomorTelepon);
    $tahun_masuk = mysqli_real_escape_string($db, $tahun_masuk);
    $asal_kampus = mysqli_real_escape_string($db, $asal_kampus);
    $alamat = mysqli_real_escape_string($db, $alamat);

    // Query untuk memasukkan data ke dalam database
    $sql = "INSERT INTO dataseminar (pekerjaan, nim, nama_depan, nama_belakang, tgl_lahir, nomorTelepon, tahun_masuk, asal_kampus, alamat)
            VALUES ('$pekerjaan', '$nim', '$nama_depan', '$nama_belakang', '$tgl_lahir', '$nomorTelepon', '$tahun_masuk', '$asal_kampus', '$alamat')";

    // Eksekusi query dan cek jika berhasil
    if (mysqli_query($db, $sql)) {
        echo "Data berhasil ditambahkan!";
        // Bisa juga arahkan ke halaman lain setelah berhasil (misal: daftar-seminar.php)
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($db);
    }

    // Tutup koneksi
    mysqli_close($db);
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/all.css" rel="stylesheet" type="text/css" />
    <link href="css/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material_style.css">
    <!-- Theme Styles -->
    <link href="css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>
<!-- END HEAD -->
<style>
    @media (max-width: 767px) {
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }

    th,
    td {
        text-align: center;
        padding: 10px;
        white-space: nowrap;
    }

    td {
        word-wrap: break-word;
    }
</style>

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">

                <!-- start mobile menu -->
                <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start language menu -->
                        <li class="dropdown language-switch">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
                                    src="img/flags/gb.png" class="position-left" alt=""> English
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="german"><img src="img/flags/de.png" alt=""> German</a>
                                </li>
                                <li>
                                    <a class="french"><img src="img/flags/fr.png" alt=""> French</a>
                                </li>
                                <li>
                                    <a class="english"><img src="img/flags/gb.png" alt=""> English</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i data-feather="bell"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span>
                                                    Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
                                                    <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
                                                    <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle pink"><i
                                                            class="fa fa-heart"></i></span>
                                                    <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                    <span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i data-feather="mail"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="img/doc/doc2.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Sarah Smith </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="img/doc/doc3.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> John Deo </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain
                                                    Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="img/doc/doc1.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Rajesh </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="img/doc/doc8.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Lina Smith </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="img/doc/doc5.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Jacob Ryan </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="img-circle " src="../assets/img/logokedai.png">
                                <span class="username username-hide-on-mobile">KeDaI
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="quick-setting slimscroll-style">
                        <ul id="themecolors">
                            <li>
                                <p class="sidebarSettingTitle">Sidebar Color</p>
                            </li>
                            <li class="complete">
                                <div class="theme-color sidebar-theme">
                                    <a href="#" data-theme="white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header Brand color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color logo-theme">
                                    <a href="#" data-theme="logo-white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color header-theme">
                                    <a href="#" data-theme="header-white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="sidebar-user">
                                    <div class="sidebar-user-picture">
                                        <img alt="image" src="../assets/img/logokedai.png">
                                    </div>
                                    <div class="sidebar-user-details">
                                        <div class="user-name">Kedai Admin</div>
                                        <div class="user-role">Administrator</div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item start active open">
                                <a href="#" class="nav-link nav-toggle">
                                    <i data-feather="airplay"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item active open  ">
                                        <a href="index.html" class="nav-link ">
                                            <span class="title">Dashboard 1</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i data-feather="mail"></i>
                                    <span class="title">Email</span>
                                    <span class="arrow"></span>
                                    <span class="label label-rouded label-menu deepPink-bgcolor">3</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="email_inbox.html" class="nav-link ">
                                            <span class="title">Inbox</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="email_view.html" class="nav-link ">
                                            <span class="title">View Mail</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="email_compose.html" class="nav-link ">
                                            <span class="title">Compose Mail</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="calendar.html" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
                                    <span class="title">Calendar</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"><i data-feather="book"></i>
                                    <span class="title">Appointment</span><span class="arrow"></span></a>
                                <ul class="sub-menu">

                                    <li class="nav-item  ">
                                        <a href="book_appointment.html" class="nav-link "> <span class="title">Book
                                                Appointment</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="book_appointment_material.html" class="nav-link "> <span
                                                class="title">Book Appointment Material</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="edit_appointment.html" class="nav-link "> <span class="title">Edit
                                                Appointment</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="view_appointment.html" class="nav-link "> <span class="title">View All
                                                Appointment</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
                                    <span class="title">Doctors</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="all_doctors.html" class="nav-link "> <span class="title">All
                                                Doctor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_doctor.html" class="nav-link "> <span class="title">Add
                                                Doctor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_doctor_material.html" class="nav-link "> <span class="title">Add
                                                Doctor Material</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="edit_doctor.html" class="nav-link "> <span class="title">Edit
                                                Doctor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="doctor_profile.html" class="nav-link "> <span class="title">About
                                                Doctor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i data-feather="users"></i>
                                    <span class="title">Other Staff</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="all_staffs.html" class="nav-link "> <span class="title">All
                                                Staff</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_staff.html" class="nav-link "> <span class="title">Add Staff</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_staff_material.html" class="nav-link "> <span class="title">Add
                                                Staff Material</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="edit_staff.html" class="nav-link "> <span class="title">Edit
                                                Staff</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="staff_profile.html" class="nav-link "> <span class="title">Staff
                                                Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i data-feather="smile"></i>
                                    <span class="title">Patients</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="all_patients.html" class="nav-link "> <span class="title">All
                                                Patients</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_patient.html" class="nav-link "> <span class="title">Add
                                                Patient</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_patient_material.html" class="nav-link "> <span class="title">Add
                                                Patient Material</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="edit_patient.html" class="nav-link "> <span class="title">Edit
                                                Patient</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="patient_profile.html" class="nav-link "> <span class="title">Patient
                                                Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i data-feather="file-plus"></i>
                                    <span class="title">Room Allotment</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="room_allotment.html" class="nav-link "> <span class="title">Alloted
                                                Rooms</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_room_allotment.html" class="nav-link "> <span class="title">New
                                                Allotment</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_room_allotment_material.html" class="nav-link "> <span
                                                class="title">New Allotment Material</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="edit_room_allotment.html" class="nav-link "> <span class="title">Edit
                                                Allotment</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i data-feather="dollar-sign"></i>
                                    <span class="title">Payments</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="payments.html" class="nav-link "> <span class="title">Payments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="add_payment.html" class="nav-link "> <span class="title">Add
                                                Payments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="invoice_payment.html" class="nav-link "> <span class="title">Patient
                                                Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="widget.html" class="nav-link nav-toggle"> <i data-feather="gift"></i>
                                    <span class="title">Widget</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle">
                                    <i data-feather="copy"></i>
                                    <span class="title">UI Elements</span>
                                    <span class="label label-rouded label-menu">10</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="ui_buttons.html" class="nav-link ">
                                            <span class="title">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                            <span class="title">Tabs &amp; Accordions</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="sweet_alert.html" class="nav-link ">
                                            <span class="title">Alert</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_typography.html" class="nav-link ">
                                            <span class="title">Typography</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="notifications.html" class="nav-link ">
                                            <span class="title">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_icons.html" class="nav-link ">
                                            <span class="title">Icons</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_modal.html" class="nav-link ">
                                            <span class="title">Modals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_panels.html" class="nav-link ">
                                            <span class="title">Panels</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_grid.html" class="nav-link ">
                                            <span class="title">Grids</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_tree.html" class="nav-link ">
                                            <span class="title">Tree View</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_carousel.html" class="nav-link ">
                                            <span class="title">Carousel</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle">
                                    <i data-feather="layers"></i>
                                    <span class="title">Material Elements</span>
                                    <span class="label label-rouded label-menu deepPink-bgcolor">14</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="material_button.html" class="nav-link ">
                                            <span class="title">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_tab.html" class="nav-link ">
                                            <span class="title">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_chips.html" class="nav-link ">
                                            <span class="title">Chips</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_grid.html" class="nav-link ">
                                            <span class="title">Grid</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_icons.html" class="nav-link ">
                                            <span class="title">Icon</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_form.html" class="nav-link ">
                                            <span class="title">Form</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_datepicker.html" class="nav-link ">
                                            <span class="title">DatePicker</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_select.html" class="nav-link ">
                                            <span class="title">Select Item</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_loading.html" class="nav-link ">
                                            <span class="title">Loading</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_menu.html" class="nav-link ">
                                            <span class="title">Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_slider.html" class="nav-link ">
                                            <span class="title">Slider</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_tables.html" class="nav-link ">
                                            <span class="title">Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_toggle.html" class="nav-link ">
                                            <span class="title">Toggle</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="material_badges.html" class="nav-link ">
                                            <span class="title">Badges</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i data-feather="server"></i>
                                    <span class="title">Forms </span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="layouts_form.html" class="nav-link ">
                                            <span class="title">Form Layout</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="advance_form.html" class="nav-link ">
                                            <span class="title">Advance Component</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="wizard_form.html" class="nav-link ">
                                            <span class="title">Form Wizard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="validation_form.html" class="nav-link ">
                                            <span class="title">Form Validation</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="editable_form.html" class="nav-link ">
                                            <span class="title">Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i data-feather="grid"></i>
                                    <span class="title">Data Tables</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="basic_table.html" class="nav-link ">
                                            <span class="title">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="advanced_table.html" class="nav-link ">
                                            <span class="title">Advance Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="export_table.html" class="nav-link ">
                                            <span class="title">Export Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="child_row_table.html" class="nav-link ">
                                            <span class="title">Child Row Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="group_table.html" class="nav-link ">
                                            <span class="title">Grouping</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="tableData.html" class="nav-link ">
                                            <span class="title">Tables With Sourced Data</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i data-feather="pie-chart"></i>
                                    <span class="title">Charts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="charts_apexchart.html" class="nav-link ">
                                            <span class="title">Apex chart</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts_amchart.html" class="nav-link ">
                                            <span class="title">amChart</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts_plotly.html" class="nav-link ">
                                            <span class="title">Plotly Charts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_echarts.html" class="nav-link ">
                                            <span class="title">eCharts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_morris.html" class="nav-link ">
                                            <span class="title">Morris Charts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_chartjs.html" class="nav-link ">
                                            <span class="title">Chartjs</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i data-feather="map-pin"></i>
                                    <span class="title">Maps</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="google_maps.html" class="nav-link ">
                                            <span class="title">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="vector_maps.html" class="nav-link ">
                                            <span class="title">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle"><i data-feather="anchor"></i>
                                    <span class="title">Extra pages</span>
                                    <span class="label label-rouded label-menu purple-bgcolor">7</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="login.html" class="nav-link "> <span class="title">Login</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="sign_up.html" class="nav-link "> <span class="title">Sign Up</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="forgot_password.html" class="nav-link "> <span class="title">Forgot
                                                Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  "><a href="user_profile.html" class="nav-link "><span
                                                class="title">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="contact.html" class="nav-link "> <span class="title">Contact Us</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="lock_screen.html" class="nav-link "> <span class="title">Lock
                                                Screen</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="blank_page.html" class="nav-link "> <span class="title">Blank
                                                Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i data-feather="chevrons-down"></i>
                                    <span class="title">Multi Level Menu</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <i data-feather="alert-octagon"></i> Item 1
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="javascript:;" class="nav-link nav-toggle">
                                                    <i data-feather="aperture"></i> Arrow Toggle
                                                    <span class="arrow "></span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li class="nav-item">
                                                        <a href="javascript:;" class="nav-link">
                                                            <i data-feather="battery"></i> Sample Link 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i data-feather="award"></i> Sample Link 2</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i data-feather="box"></i> Sample Link 3</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i data-feather="clock"></i> Sample Link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i data-feather="database"></i> Sample Link 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i data-feather="edit"></i> Sample Link 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <i data-feather="folder"></i> Arrow Toggle
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i data-feather="film"></i> Sample Link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i data-feather="file"></i> Sample Link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i data-feather="heart"></i> Sample Link 1
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i data-feather="lock"></i> Item 3 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- start widget -->
                    <div class="state-overview">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-blue">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Mahasiswa</span>
                                        <span class="info-box-number">450</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 45%"></div>
                                        </div>
                                        <span class="progress-description">
                                            45% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-orange">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Pekerja</span>
                                        <span class="info-box-number">155</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 40%"></div>
                                        </div>
                                        <span class="progress-description">
                                            40% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-purple">
                                    <span class="info-box-icon push-bottom"><i
                                            class="material-icons">content_cut</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Operations</span>
                                        <span class="info-box-number">52</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%"></div>
                                        </div>
                                        <span class="progress-description">
                                            85% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-success">
                                    <span class="info-box-icon push-bottom"><i
                                            class="material-icons">monetization_on</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Hospital Earning</span>
                                        <span class="info-box-number">13,921</span><span>$</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 50%"></div>
                                        </div>
                                        <span class="progress-description">
                                            50% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- end widget -->
                    <!-- chart start -->
                    <!-- <div class="row">
						<div class="col-md-8">
							<div class="card card-box">
								<div class="card-head">
									<header>HOSPITAL SURVEY</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="recent-report__chart">
										<div id="chart1"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-box">
								<div class="card-head">
									<header>HOSPITAL SURVEY</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="recent-report__chart">
										<div id="chart2"></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
                    <!-- Chart end -->
                    <div class="row">
                        <!--  -->
                        <!-- <div class="col-md-4 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>DOCTORS LIST</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<ul class="docListWindow">
											<li>
												<div class="prog-avatar">
													<img src="img/doc/doc1.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Dr.Rajesh</a> -(MBBS,MD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="img/doc/doc2.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="img/doc/doc3.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Dr.John Deo</a> - (BDS,MDS)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="img/doc/doc4.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Dr.Jay Soni</a> - (BHMS)
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="img/doc/doc5.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="img/doc/doc6.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
										</ul>
										<div class="text-center full-width">
											<a href="#">View all</a>
										</div>
									</div>
								</div>
							</div>
						</div> -->
                    </div>
                    <!-- start admited patient list -->
                    <!-- Form Pencarian -->
                    <!-- Start Form Tambah Data -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Tambah Data Seminar</header>
                                </div>
                                <div class="card-body">
                                    <!-- Form Tambah Data -->
                                    <form action="tambah.php" method="POST">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" name="pekerjaan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nim">NIM</label>
                                            <input type="text" name="nim" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_depan">Nama Depan</label>
                                            <input type="text" name="nama_depan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_belakang">Nama Belakang</label>
                                            <input type="text" name="nama_belakang" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomorTelepon">Nomor Telepon</label>
                                            <input type="text" name="nomorTelepon" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_masuk">Tahun Masuk</label>
                                            <input type="number" name="tahun_masuk" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="asal_kampus">Asal Kampus</label>
                                            <input type="text" name="asal_kampus" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" class="form-control" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        <!-- Tombol Kembali -->
                                        <a href="index.php">
                                            <button type="button" class="btn btn-dark">Kembali</button>
                                        </a>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Tambah Data -->

                    <!-- end admited patient list -->
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
                                    class="material-icons">chat</i>Chat
                                <span class="badge badge-danger">4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
                                    class="material-icons">settings</i>
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start Doctor Chat -->
                        <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                            id="quick_sidebar_tab_1">
                            <div class="chat-sidebar-list">
                                <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                    data-wrapper-class="chat-sidebar-list">
                                    <div class="chat-header">
                                        <h5 class="list-heading">Online</h5>
                                    </div>
                                    <ul class="media-list list-items">
                                        <li class="media"><img class="media-object" src="img/doc/doc3.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">John Deo</h5>
                                                <div class="media-heading-sub">Spine Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">5</span>
                                            </div> <img class="media-object" src="img/doc/doc1.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Rajesh</h5>
                                                <div class="media-heading-sub">Director</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="img/doc/doc5.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="away dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jacob Ryan</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">8</span>
                                            </div> <img class="media-object" src="img/doc/doc4.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Kehn Anderson</h5>
                                                <div class="media-heading-sub">CEO</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="img/doc/doc2.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Sarah Smith</h5>
                                                <div class="media-heading-sub">Anaesthetics</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="img/doc/doc7.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Vlad Cardella</h5>
                                                <div class="media-heading-sub">Cardiologist</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Offline</h5>
                                    </div>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">4</span>
                                            </div> <img class="media-object" src="img/doc/doc6.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jennifer Maklen</h5>
                                                <div class="media-heading-sub">Nurse</div>
                                                <div class="media-heading-small">Last seen 01:20 AM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="img/doc/doc8.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Lina Smith</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                                <div class="media-heading-small">Last seen 11:14 PM</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">9</span>
                                            </div> <img class="media-object" src="img/doc/doc9.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jeff Adam</h5>
                                                <div class="media-heading-sub">Compounder</div>
                                                <div class="media-heading-small">Last seen 3:31 PM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="img/doc/doc10.jpg" width="35"
                                                height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Anjelina Cardella</h5>
                                                <div class="media-heading-sub">Physiotherapist</div>
                                                <div class="media-heading-small">Last seen 7:45 PM</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Doctor Chat -->
                        <!-- Start Setting Panel -->
                        <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                            <div class="chat-sidebar-settings-list slimscroll-style">
                                <div class="chat-header">
                                    <h5 class="list-heading">Layout Settings</h5>
                                </div>
                                <div class="chatpane inner-content ">
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Position</div>
                                            <div class="setting-set">
                                                <select
                                                    class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Header</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Footer</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Account Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Notifications</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-1">
                                                        <input type="checkbox" id="switch-1" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Show Online</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-7">
                                                        <input type="checkbox" id="switch-7" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Status</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-2">
                                                        <input type="checkbox" id="switch-2" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">2 Steps Verification</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-3">
                                                        <input type="checkbox" id="switch-3" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">General Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Location</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-4">
                                                        <input type="checkbox" id="switch-4" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Save Histry</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-5">
                                                        <input type="checkbox" id="switch-5" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Auto Updates</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-6">
                                                        <input type="checkbox" id="switch-6" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->

        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="js/jquery.min.js"></script>
    <!-- Tambahkan jQuery dan AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function searchData() {
            var query = document.getElementById('search-query').value; // Ambil nilai query dari input pencarian

            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'search.php?query=' + encodeURIComponent(query), true); // Kirim query pencarian ke server
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('table-body').innerHTML = xhr.responseText; // Update hasil pencarian di tabel
                }
            };
            xhr.send();
        }
    </script>


    <script src="js/popper.js"></script>
    <script src="js/jquery.blockui.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/feather.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-switch.min.js"></script>
    <!-- counterup -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Common js-->
    <script src="js/app.js"></script>
    <script src="js/layout.js"></script>
    <script src="js/theme-color.js"></script>
    <!-- material -->
    <script src="js/material.min.js"></script>
    <!-- chart js -->
    <script src="js/Chart.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/apexcharts.min.js"></script>
    <script src="js/apex-home.js"></script>
    <!-- end js include path -->
</body>

</html>