<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG NHẬP</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<style type="text/css">
   .login-form input[type="submit"] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
} 
  </style>
</head>
<body> 
  <form method="POST">
	<div class="login">
                  <div class="login-header">
                            <h1>Đăng nhập</h1>
                  </div>
                  <div class="login-form">
                            <h3>Tên tài khoản:</h3>
                            <input type="text" placeholder="Tên đăng nhập"/ name="user"><br>
                            <h3>Mật khẩu:</h3>
                            <input type="password" placeholder="Mật khẩu"/ name="password">
                            <br>
                            <input type="submit" value="Đăng nhập" class="login-button"/ name="luu">
                            <br>
                            <a class="sign-up" href="dangki.php">Đăng kí!</a>
                            <br><br>
                            <!-- <a class="sign-up" style="margin-left: -310px;padding-top: 20px;" href="doipass.php" >Đổi mật khẩu!</a> -->
                  </div>
                   <?php
                  include 'db.php';
                  if (isset($_POST['luu'])) {
                     $user=$_POST['user'];
                     $password=sha1($_POST['password']);
                     $sql = "select * from account where user = '$user'";
                     $kq=$conn->query($sql)->fetch();
                     if ($kq['user']!= $user ) {
                      echo "Bạn nhập sai tên tài khoản / mật khẩu";
                    } elseif ($kq['password'] != $password) {
                      echo "Bạn nhập sai tên tài khoản / mật khẩu";
                    }
                      elseif($kq['authorize']=='Admin'){
                      $_SESSION['user'] = $kq['user'];
                      $_SESSION['authorize'] = $kq['authorize'];
                      $_SESSION['id']=$kq['id'];
                      header("Location:chuyen.php");
                    } else{
                      
                      $_SESSION['user'] = $kq['user'];
                      $_SESSION['id']=$kq['id'];
                      $_SESSION['authorize'] = $kq['authorize'];
                      header("Location:index.php");
                    }
                  }



                     ?>
</div>
</form>
</body>
</html>