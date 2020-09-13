<?php 
session_start();
include '../../db.php';
if ($_SESSION['authorize']!='Admin') {
    $_SESSION['user'] = $kq['user'];
    $_SESSION['authorize'] = $kq['authorize'];
    header("location:../../index.php");
} 
?><!doctype html>
<html class="no-js" lang="en">
 <link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" type="text/css" href="css/vendor.css">   
<!-- Mirrored from modularcode.io/modular-admin-html/items-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2019 16:07:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Danh sách truyện </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.php">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>
    <style>
        .no-overflow{

        }
    </style>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-block header-block-search">
                        <form role="search">
                            <div class="input-container">
                                <i class="fa fa-search"></i>
                                <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="header-block header-block-buttons">
                        <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-sm header-btn">
                            <i class="fa fa-github-alt"></i>
                            <span>View on GitHub</span>
                        </a>
                        <a href="https://github.com/modularcode/modular-admin-html/stargazers" class="btn btn-sm header-btn">
                            <i class="fa fa-star"></i>
                            <span>Star Us</span>
                        </a>
                        <a href="https://github.com/modularcode/modular-admin-html/releases" class="btn btn-sm header-btn">
                            <i class="fa fa-cloud-download"></i>
                            <span>Download .zip</span>
                        </a>
                    </div> -->
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="notifications new">
                                <!-- <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <sup>
                                        <span class="counter">8</span>
                                    </sup>
                                </a> -->
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="#" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li>
                                                <a href="#"> View All </a>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>
                            <li class="profile dropdown">

                                    <?php 
                                    include '../../db.php';
                                    if(isset($_SESSION['user'])){
                                        $user=$_SESSION['user'];
                                        $sql="select * from account where user='$user'";
                                        $kq=$conn->query($sql);
                                        foreach ($kq as $key => $row) {
                                         ?>
                                         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                                            <div class="img" style="background-image: url('../../images/<?php echo $row['avatar'] ?>')">
                                                </div> <?php
                                            }
                                            ?>
                                            <span class="name"> 
                                             <?php
                                             echo "Chào"." ".$_SESSION['user'];
                                             ?>

                                             <?php
                                         }
                                         else{
                                            ?>
                                            <a href="../../login.php">Đăng nhập</a>
                                            <?php
                                        }
                                        ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                  
                                       
                                        <a class="dropdown-item" href="../../logout.php">
                                            <i class="fa fa-power-off icon"></i> Logout </a>
                                        </div>  
                                    </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                    <span class="l l1"></span>
                                    <span class="l l2"></span>
                                    <span class="l l3"></span>
                                    <span class="l l4"></span>
                                    <span class="l l5"></span>
                                </div> Quản trị viên
                            </div>
                        </div>
                       <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                    <li class="active">
                                        <a href="index-2.php">
                                            <i class="fa fa-home"></i> Trang chủ </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-th-large"></i> Quản lý truyện<i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="items-list.php"> Danh sách truyện </a>
                                                </li>
                                                <li>
                                                    <a href="item-editor.php"> Thêm bộ truyện </a>
                                                </li>
                                                
                                                <li>
                                                    <a href="item-editor12.php"> Thêm chương mới </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-th-large"></i> Quản lý danh mục<i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="items-listqc.php"> Danh mục </a>
                                                </li>
                                                <li>
                                                    <a href="item-editorqc.php"> Thêm danh mục </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-th-large"></i> Quản lý trình chiếu<i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="items-listsl.php"> Danh sách chiếu </a>
                                                </li>
                                                <li>
                                                    <a href="item-editorsl.php"> Thêm truyện cần show </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-th-large"></i> Quản lý thể loại<i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="items-listtl.php"> Danh sách thể loại  </a>
                                                </li>
                                                <li>
                                                    <a href="item-editortl.php"> Thêm thể loại </a>
                                                </li>
                                                
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-th-large"></i> Quản lý tác giả<i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="items-listtg.php"> Danh sách tác giả </a>
                                                </li>
                                                <li>
                                                    <a href="item-editortg.php"> Thêm tác giả </a>
                                                </li>
                                                
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-area-chart"></i> Quản lí giao diện <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="cards.php"> Show giao diện </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-area-chart"></i> Quản lí liên hệ <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="items-listlh.php"> Show liên hệ </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-th-large"></i> Quản lý tài khoản<i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="items-listtk.php"> Danh sách tài khoản  </a>
                                                </li>
                                       
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-th-large"></i> Quản lý bình luận<i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="items-listbl.php"> Danh sách bình luận  </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="sidebar-menu metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-4">
                                                    <label class="title">fixed</label>
                                                </div>
                                                <div class="col-4">
                                                    <label class="title">static</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Sidebar:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Header:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Footer:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li>
                                                    <span class="color-item color-red" data-theme="red"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-orange" data-theme="orange"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-green active" data-theme=""></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-blue" data-theme="blue"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-purple" data-theme="purple"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content items-list-page">
                    <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Truyện <a href="item-editor.php" class="btn btn-primary btn-sm rounded-s"> Thêm mới</a>
                                        <!--
				 -->
                                        
                                    </h3>
                                    <!-- <p class="title-description"> List of sample items - e.g. books, movies, events, etc... </p> -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">
                                    
                                    <div class="item-col item-col-header fixed item-col-img md">
                                        <div>
                                            <span>Ảnh</span>
                                        </div>
                                    </div>
                                    <div style="text-align: center;" class="item-col item-col-header item-col-title">
                                        <div>
                                            <span >Tên truyện</span>
                                        </div>
                                    </div>
                                    <div style="text-align: left" class="item-col item-col-header item-col-sales">
                                        <div>
                                            <span>View</span>
                                        </div>
                                    </div>
                                    
                                    <div class="item-col item-col-header item-col-category">
                                        <div class="no-overflow">
                                            <span>Tác giả</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-author">
                                        <div style="margin-left:45px" class="no-overflow">
                                            <span>Thể loại</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-date">
                                        <div>
                                            <span>Ngày đăng</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown">
                                    </div>
                                </div>
                            </li>
                            <?php 
                                        include '../../db.php';
                                        $sql="select * from manga";
                                        $kq=$conn->query($sql);
                                        foreach ($kq as $key => $row) {
                                           ?>
                            <li class="item">

                                <div class="item-row">
                                    
                                    
                                    <div class="item-col fixed item-col-img md">
                                        
                                            <div class="item-img rounded" style="background-image: url(../../images/<?php echo $row['images']; ?>);"></div>
                                        
                                    </div>
                                    <div style="text-align: center;" class="item-col fixed pull-left item-col-title">
                                            <div>
                                                
                                               
                                            
                                                <h4  class="item-title"> <?php echo $row['name']; ?> </h4>
                                            
                                            </div>
                                            
                                        </div>
                                    
                                    <div style="text-align: left;" class="item-col item-col-sales">
                                       
                                        <div> <?php echo $row['view']; ?> </div>
                                    </div>
                                    <div class="item-col item-col-author"><div class="no-overflow">
                                        <?php 
                                            $sql1="select * from authors";
                                            $kq1=$conn->query($sql1);
                                            foreach ($kq1 as $key => $value) {
                                                ?>
                                                    
                                                        <div value="<?php echo $value['id'] ?>"><?php if($value['id']==$row['id_author']){
                                        echo $value['name'];
                                    } ?></div>
                                                    
                                                <?php
                                            }
                                         ?>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-category no-overflow"><div class="no-overflow">
                                       <?php 
                                        $sql2="select * from categories";
                                        $kq2=$conn->query($sql2);
                                        foreach ($kq2 as $key => $value) {
                                            ?>
                                            
                                            <div value="<?php echo $value['id'] ?>"><?php if($value['id']==$row['id_cate']){
                                        echo $value['name'];
                                    } ?></div>
                                                
                                            <?php
                                        }
                                        ?>
                                        </div>
                                    </div>
                                   
                                    <div class="item-col item-col-date">
                                       
                                        <div class="no-overflow"> <?php echo $row['date']; ?> </div>
                                    </div>
                                           
                                    
                                    
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="remove" onclick="confirm('Bạn có chắc muốn xóa không?')" href="item-remove.php?idremove=<?php echo $row['id']; ?>">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="item-editor1.php?idedit=<?php echo $row['id']; ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                     ?>
                                </div>
                            </li>
                            <!-- <li class="item">
                                <div class="item-row">
                                    
                                    <div class="item-col fixed item-col-img md">
                                        <a href="item-editor.php">
                                            <div class="item-img rounded" style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Name</div>
                                        <div>
                                            <a href="item-editor.php" class="">
                                                <h4 class="item-title"> 50% of things doesn&#x27;t really belongs to you </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 4567 </div>
                                    </div>
                                    
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Category</div>
                                        <div class="no-overflow">
                                            <a href="#">Hardware</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">Author</div>
                                        <div class="no-overflow">
                                            <a href="#">Alexander Sargssyan</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div class="no-overflow"> 21 SEP 10:45 </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="item-editor.php">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    
                                    <div class="item-col fixed item-col-img md">
                                        <a href="item-editor.php">
                                            <div class="item-img rounded" style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Name</div>
                                        <div>
                                            <a href="item-editor.php" class="">
                                                <h4 class="item-title"> Vestibulum tincidunt amet laoreet mauris sit sem aliquam cras maecenas vel aliquam. </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 854 </div>
                                    </div>
                                    
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Category</div>
                                        <div class="no-overflow">
                                            <a href="#">Anywhere</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">Author</div>
                                        <div class="no-overflow">
                                            <a href="#">Some Long Author Name</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div class="no-overflow"> 21 SEP 10:45 </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="item-editor.php">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    
                                    <div class="item-col fixed item-col-img md">
                                        <a href="item-editor.php">
                                            <div class="item-img rounded" style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/why_this/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Name</div>
                                        <div>
                                            <a href="item-editor.php" class="">
                                                <h4 class="item-title"> Lorem Ipsum is not simply random text </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 1861 </div>
                                    </div>
                                    
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Category</div>
                                        <div class="no-overflow">
                                            <a href="#">Something</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">Author</div>
                                        <div class="no-overflow">
                                            <a href="#">Willard Bennett</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div class="no-overflow"> 21 SEP 10:45 </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="item-editor.php">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    
                                    <div class="item-col fixed item-col-img md">
                                        <a href="item-editor.php">
                                            <div class="item-img rounded" style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/w7download/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Name</div>
                                        <div>
                                            <a href="item-editor.php" class="">
                                                <h4 class="item-title"> Ut dui quis amet curabitur vestibulum </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 7891 </div>
                                    </div>
                                    
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Category</div>
                                        <div class="no-overflow">
                                            <a href="#">Something Else</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">Author</div>
                                        <div class="no-overflow">
                                            <a href="#">Ivy Lorrie</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div class="no-overflow"> 21 SEP 10:45 </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="item-editor.php">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    
                                    <div class="item-col fixed item-col-img md">
                                        <a href="item-editor.php">
                                            <div class="item-img rounded" style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/pankogut/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Name</div>
                                        <div>
                                            <a href="item-editor.php" class="">
                                                <h4 class="item-title"> Mus sociosqu etiam autem rutrum at molestie elit pulvinar </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 95150 </div>
                                    </div>
                                    
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Category</div>
                                        <div class="no-overflow">
                                            <a href="#">Other</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">Author</div>
                                        <div class="no-overflow">
                                            <a href="#">Evander Archie</a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div class="no-overflow"> 21 SEP 10:45 </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="item-editor.php">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                   
                </article>
                
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Media Library</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                                    </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="https://modularcode.io/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Insert Selected</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Xóa</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Bạn có chắc chắn muốn xóa không?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>

<!-- Mirrored from modularcode.io/modular-admin-html/items-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2019 16:07:45 GMT -->
</html>