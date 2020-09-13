<?php 
include 'db.php';
  if(isset($_GET['id_doipass'])){
    $id_doipass=$_GET['id_doipass'];
    $sql="select * from account where id='$id_doipass'";
    $kq=$conn->query($sql)->fetch();
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Đổi mật khẩu </title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<style type="text/css">
    .ab {
     margin-left: -160px;
     margin-top: 20px;
     margin-bottom: 20px;
   }
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
  <form method="POST" enctype="multipart/form-data">
    <div class="login">
      <div class="login-header">
        <h3>Đổi mật khẩu</h3>
      </div>
      <div class="login-form">
        <h3>Tên tài khoản:</h3>
        <input type="text" placeholder="Tài khoản"  name="user" required="">
        <br>
        <h3>Mật khẩu:</h3>
        <input type="password" name="password" required="">
        <br>
        <h3>Nhập mật khẩu mới:</h3>
        <input type="password"  name="pass" required="">
        <br> 
        <input type="submit" value="Thực hiện" class="login-button" name="ok">


        <br>
        <a class="sign-up" href="login.php">Đăng nhập!</a>
        <br>
         <a class="sign-up" href="dangki.php">Đăng kí!</a>
      </div>
    </div>
  </form>
  <?php 
  include 'db.php';
  if (isset($_POST['ok'])) {
    $password=sha1($_POST['password']);
    $pass=sha1($_POST['pass']);
    $sql1="select * from account where id='$id_doipass' ";
    $kq1=$conn->query($sql1)->fetch();
    if ($kq1['password'] != $password) {
      echo "Bạn nhập sai tên tài khoản / mật khẩu";
    } else{
      
      $sqlm="update account set password='$pass' where id='$id_doipass'";
      $kqm=$conn->prepare($sqlm);
      if ($kqm->execute()) {
        echo "Thành công";
      } 
    }



  } 
  ?>
</body>
</html>