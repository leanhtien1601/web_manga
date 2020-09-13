<?php 
session_start();
include '../../db.php';
if ($_SESSION['authorize']!='Admin') {
    $_SESSION['user'] = $kq['user'];
    $_SESSION['authorize'] = $kq['authorize'];
    header("location:../../index.php");
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
        <title>Thêm truyện</title>
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
        <script type="text/javascript" src="js/nicEdit.js"></script>
    <script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    
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
                    
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Thêm truyện mới <span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item" method="POST" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tên truyện: </label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control boxed" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Nội dung: </label>
                                <div class="col-sm-10">
                                    <div class="wyswyg">
                                       
                                        <textarea name="content" style="width: 100%;height: 300px;display:all ;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Thể loại: </label>
                                <div class="col-sm-10">
                                    <select name="kind" class="c-select form-control boxed">
                                        <option selected>Chọn thể loại</option>
                                        <?php 
                                            include '../../db.php';
                                            $sql="select * from kind";
                                            $kq=$conn->query($sql);
                                            foreach ($kq as $key => $value) {
                                                ?>
                                                    
                                                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
                                                <?php
                                            }
                                         ?>
                                       <!--  <option selected>Chọn thể loại</option>
                                        
                                        <option value="2">Hành động</option>
                                        <option value="3">Bạo lực</option> -->
                                    </select>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Danh mục: </label>
                                <div class="col-sm-10">
                                    <select name="cate" class="c-select form-control boxed">
                                        <option selected>Chọn danh mục</option>
                                        <?php 
                                            include '../../db.php';
                                            $sql1="select * from categories";
                                            $kq1=$conn->query($sql1);
                                            foreach ($kq1 as $key => $value1) {
                                                ?>
                                                    
                                                    <option value="<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></option>
                                                <?php
                                            }
                                         ?>
                                        
                                        <!-- <option value="2">Hành động</option>
                                        <option value="3">Bạo lực</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tác giả: </label>
                                <div class="col-sm-10">
                                    <select name="authors" class="c-select form-control boxed">
                                    <option selected>Chọn authors</option>
                                        <?php 
                                            include '../../db.php';
                                            $sql1="select * from authors";
                                            $kq1=$conn->query($sql1);
                                            foreach ($kq1 as $key => $value1) {
                                                ?>
                                                    
                                                    <option value="<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></option>
                                                <?php
                                            }
                                         ?>
                                        
                                        <!-- <option value="2">Hành động</option>
                                        <option value="3">Bạo lực</option> -->
                                    </select>
                                </div>
                            </div>
                           
                            <!-- <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tác giả: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Ảnh truyện: </label>
                                <div class="col-sm-10">
                                        
                                        <a href="#" class="add-image">
                                            <div class="image-container new">
                                                <div class="image">
                                                    <input type="file" name="images">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" name="sb" class="btn btn-primary"> Xác nhận </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
                        if(isset($_POST['sb'])){
                            $name=$_POST['name'];
                            $content=$_POST['content'];
                            $kind=$_POST['kind'];
                            $cate=$_POST['cate'];
                            $date=date("y/m/d");
                            $authors=$_POST['authors'];
                            $nameA=$_FILES['images']['name'];
                            $tmpA=$_FILES['images']['tmp_name'];
                            $typeA=$_FILES['images']['type'];
                            if($typeA != "image/jpeg" && $typeA != "image/jpg" && $typeA != "image/png"){
                                echo "Đây không phải là ảnh";
                            }
                            else if($_FILES['images']['size']>2000000){
                                echo "Hãy chọn ảnh <=2MB";
                            }
                            else{
                                $nameA=$_FILES['images']['name'];
                                $tmpA=$_FILES['images']['tmp_name'];
                                move_uploaded_file($tmpA, "../../images/".$nameA);
                                $sql2="insert into manga values('','$name','$content','$nameA','$cate','$kind','$authors','','$date')";
                                $kq2=$conn->exec($sql2);
                                if($kq2==1){
                                    // header("Location:"items-list.php);
                                  echo "Thêm thành công";
                               
                                  
                                }
                                else{
                                    echo "Không thêm được";

                                }
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