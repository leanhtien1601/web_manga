<?php 
	include '../../db.php';
		if(isset($_GET['idremove'])){
			$idremove=$_GET['idremove'];
			$sqlxoa="delete from manga where id='$idremove'";
			$kqxoa=$conn->prepare($sqlxoa);
			if($kqxoa->execute()){
				header("location:items-list.php");
			}
			else{
				alert('Không xóa được');
			}
		}
?>