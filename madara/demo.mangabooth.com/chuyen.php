<?php 
session_start();
include 'db.php';
if ($_SESSION['authorize']!='Admin') {
	$_SESSION['user']=$user;
	header("Location:index.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lựa chọn</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding:0;
		box-sizing: border-box;
	}
	.vip{
		width: 980px;
		height: 400px;
		background-image: url(images/1.jpg);
		text-align: center;
		margin-left: 300px;
	}
	.vip a{
		text-decoration: none;
		color: #000;
		font-family: tahoma;
		
	}
	.vip h1{
		padding-bottom: 40px;
		font-size: 40pt;
		padding-top: 20px;
		font-family: tahoma;
	}
	.vip1 {
		padding-left: 20px;
	}
	.vip a:hover{
		color: #fff
	}
</style>
<body>
	<div class="vip">
		<h1>Lựa chọn</h1>
		<a href="index.php">Trang Chủ</a>
		<a href="back_endVIP/modularcode.io/index-2.php" class="vip1">Quản trị</a>
	</div>
</body>
</html>