<?php 

include '../../db.php';
if(isset($_GET['idremove'])){
	$idremove=$_GET['idremove'];
	$sqlxoa="delete from account where id='$idremove'";
	$kqxoa=$conn->prepare($sqlxoa);
	if($kqxoa->execute()){
		header("location:items-listtk.php");
	}
	else{
		echo "Không xóa được";
	}
}
?>