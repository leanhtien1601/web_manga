<?php 
session_start();
include '../../db.php';
if ($_SESSION['authorize']!='Admin') {
    $_SESSION['user'] = $kq['user'];
    $_SESSION['authorize'] = $kq['authorize'];
    header("location:../../index.php");
} 
?>          
        <?php 
    include '../../db.php';
    if (isset($_GET['masua'])) {
       $masua=$_GET['masua'];
       $sql="select * from sliders where id = '$masua'";
       $kq=$conn->query($sql)->fetch();
    }


        ?>
 <?php 
        if (isset($_POST['luu'])) {
            $title=$_POST['title'];
            $status=$_POST['status'];
            $order=$_POST['order'];
           
            if (empty($_FILES['image']['name'])) {
                $sql="update sliders set title='$title' ,status='$status',sort_order='$order' where id='$masua' ";

            } else{
                $nameA = $_FILES['image']['name'];
                $tmpA = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmpA, "../../images/".$nameA);
                $sql="update sliders set title='$title', status='$status', sort_order='$order',image='$nameA' where id='$masua' ";

            } 
            // var_dump($sql);die;
            try{

                $kq=$conn->prepare($sql);
                $kq->execute();
               header("Location:items-listsl.php");
            }catch(Exception $ex){
                var_dump($ex->getMessage());
            }
        }


                     ?>
<!doctype html>
<html class="no-js" lang="en">
  <link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" type="text/css" href="css/vendor.css">  
<!-- Mirrored from modularcode.io/modular-admin-html/item-editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2019 16:07:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sửa slide</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
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
                    <!--  -->
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
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&amp;s=40')">
                                    </div>
                                    <span class="name"> John Doe </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <!-- <a class="dropdown-item" href="#">
                                        <i class="fa fa-user icon"></i> Profile </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-bell icon"></i> Notifications </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-gear icon"></i> Settings </a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.php">
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
                                        <li>
                                            <a href="item-editortl1.php"> Cập nhật  thể loại </a>
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
                                        <li>
                                            <a href="item-editorgd.php"> Cập nhật giao diện</a>
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
                                        <!-- <li>
                                            <a href="items-list.html"> Phân quyền tài khoản  </a>
                                        </li> -->
                                        
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
                    
                </aside>
        <?php 
    include '../../db.php';
    if (isset($_GET['masua'])) {
       $masua=$_GET['masua'];
       $sql="select * from sliders where id = '$masua'";
       $kq=$conn->query($sql)->fetch();
    }


        ?>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Cập nhật slider <span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item" method="POST" enctype="multipart/form-data">
                        <div class="card card-block">
                            <div class="form-group row">
                                <!-- <label class="col-sm-2 form-control-label text-xs-right"> Tiêu đề : </label> -->
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tiêu đề : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" value="<?php echo $kq['title'] ?>"   name="title">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Số thứ tự: </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control boxed" placeholder="" min="0" value="<?php echo $kq['sort_order'] ?>" 
                                     name="order">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Trạng thái : </label>
                                <div class="col-sm-10">
                                   
                                        <?php 
                                            if ($kq['status']=='On') {
                                         ?>
                                            <input type="radio" name="status" checked="" value="On" >ON
                                            <input type="radio" name="status" value="Off" style="margin-left: 50px;">Off
                                        <?php 
                                            }elseif($kq['status']=='Off'){
                                        ?> 
                                        <input type="radio" name="status"  value="On" >ON
                                        <input type="radio" name="status" checked=""  value="Off" style="margin-left: 50px;">Off
                                        <?php
                                         }
                                        ?>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Ảnh truyện: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                        <div class="image-container">

                                            <div class="image" style="background-image:url('../../images/<?php echo $kq['image'] ?>')"></div>

                                        </div> <input type="file" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary" name="luu"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
        if (isset($_POST['luu'])) {
            $title=$_POST['title'];
            $status=$_POST['status'];
            $order=$_POST['order'];
           
            if (empty($_FILES['image']['name'])) {
                $sql="update sliders set title='$title' ,status='$status',sort_order='$order' where id='$masua' ";

            } else{
                $nameA = $_FILES['image']['name'];
                $tmpA = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmpA, "../../images/".$nameA);
                $sql="update sliders set title='$title', status='$status', sort_order='$order',image='$nameA' where id='$masua' ";

            } 
            // var_dump($sql);die;
            try{

                $kq=$conn->prepare($sql);
                $kq->execute();
                echo "Thành công";
            }catch(Exception $ex){
                var_dump($ex->getMessage());
            }
        }


                     ?>
                </article>
                <!-- <footer class="footer">
                    <div class="footer-block buttons">
                        <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&amp;repo=modular-admin-html&amp;type=star&amp;count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe>
                    </div>
                    <div class="footer-block author">
                        <ul>
                            <li> created by <a href="https://github.com/modularcode">ModularCode</a>
                            </li>
                            <li>
                                <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a>
                            </li>
                        </ul>
                    </div>
                </footer> -->
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
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="image-container">
                                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                    </div>
                                                </div>
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

<!-- Mirrored from modularcode.io/modular-admin-html/item-editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2019 16:07:45 GMT -->
</html>