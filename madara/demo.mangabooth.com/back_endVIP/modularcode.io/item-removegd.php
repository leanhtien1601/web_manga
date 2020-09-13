<?php 
	include '../../db.php';
		if(isset($_GET['idremove'])){
			$idremove=$_GET['idremove'];
			$sqlxoa="delete from themes where id='$idremove'";
			$kqxoa=$conn->prepare($sqlxoa);
			if($kqxoa->execute()){
				header("location:cards.php");
			}
			else{
				echo "Không xóa được";
			}
		}
?>