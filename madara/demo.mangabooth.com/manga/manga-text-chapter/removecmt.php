<?php 
	include '../../db.php';
		if(isset($_GET['idremove'])){
			$idremove=$_GET['idremove'];
			$sqlchon="select * from comments where id='$idremove'";
			$kqchon=$conn->query($sqlchon)->fetch();
			$sqlxoa="delete from comments where id='$idremove'";
			$kqxoa=$conn->prepare($sqlxoa);
			$kqxoa->execute();
			if($kqxoa->execute()){
				header("location:index.php?id_manga=".$kqchon['id_manga']);
			}
			else{
				echo "Không xóa được";
			}
		}
?>