<?php 
	try {
		$conn = new PDO("mysql:host=localhost;dbname=duan1;charset=utf8","root","");
	} catch (PDOException $e) {
		echo "Lỗi";
	}
 ?>