<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG KÍ</title>
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
        <h1>Đăng kí</h1>
      </div>
      <div class="login-form">
        <h3>Tên tài khoản:</h3>
        <input type="text" placeholder="Tài khoản" name="user">
        <h3>Họ và tên:</h3>
        <input type="text" placeholder="Họ tên" name="name">
        <br>
        <h3>Mật khẩu:</h3>
        <input type="password" placeholder="Mật khẩu" name="password">
        <br>
        <h3>Email :</h3>
        <input type="email" placeholder="123@gmail.com" name="email">
        <br> 
        <input type="file" name="avatar" class="ab">
        <br>
        <input type="submit" value="Đăng kí" class="login-button" name="luu">


        <br>
        <a class="sign-up" href="login.php">Đăng nhập!</a>
        <br>

      </div>
    </div>
  </form>
  <?php 
  include 'db.php';
  if (isset($_POST['luu'])) {
    $user=$_POST['user'];
    $name=$_POST['name'];
    $password=sha1($_POST['password']);
    $email=$_POST['email'];
    $nameA=$_FILES['avatar']['name'];
    $tmpA=$_FILES['avatar']['tmp_name'];
    $typeA = $_FILES['avatar']['type'];
    $sqlu="select * from account";
    $kqu=$conn->query($sqlu);
    foreach ($kqu as $kqu) {
       if($user==$kqu['user']){
      echo "Đã tồn tại tài khoản";
      die;
      }
    }
   
    if($typeA != "image/jpeg" && $typeA != "image/jpg" && $typeA != "image/png"){
      echo "Vui lòng chọn file jpeg/png/jpg";
    }else if($_FILES['avatar']['size'] > 2000000){
      echo "Vui lòng chọn ảnh nhỏ hơn 2MB";
    } else{
      move_uploaded_file($tmpA, "images/".$nameA);
      $sql="insert into account values('','$user','$name','$nameA','$password','$email','Thành viên')"; 
      $kq=$conn->exec($sql);
      if ($kq==1) {
       header("location:login.php");
     } else {
      echo "Lỗi";
    }

  }

}



?>

</body>
</html>