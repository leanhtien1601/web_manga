<?php 
session_start();
require_once "db.php";
$user=isset($_SESSION['user'])? $_SESSION['user']:null;
$id = $_GET['id'];
$sqlQuery = "select * from manga where id = $id";
// $product = $conn->prepare($sqlQuery);
$result = $conn->query($sqlQuery);
$manga = $result->fetch(PDO::FETCH_ASSOC);

if(!isset($_SESSION[WATCH]) || $_SESSION[WATCH] == null){
	$_SESSION[WATCH] = [];
	$_SESSION[WATCH][] = [
		'id' => $manga['id'],
		'name' => $manga['name'],
		'content' => $manga['content'],
		'images' => $manga['images'],
		'id_cate' => $manga['id_cate'],
		'id_kind' => $manga['id_kind'],
		'id_author' => $manga['id_author'],
		'view' => $manga['view'],
		'date' => $manga['date'],
		'view' => $manga['status'],
		'quantity' => 1
	];
}else{
	$watch = $_SESSION[WATCH];
	$existed = -1;
	foreach ($watch as $index => $item) {
		if($item['id'] == $manga['id']){
			$existed = $index;
			break;
		}
	}

	if($existed == -1){
		$watch[] = [
			'id' => $manga['id'],
			'name' => $manga['name'],
			'content' => $manga['content'],
			'images' => $manga['images'],
			'id_cate' => $manga['id_cate'],
			'id_kind' => $manga['id_kind'],
			'id_author' => $manga['id_author'],
			'view' => $manga['view'],
			'date' => $manga['date'],
			'view' => $manga['status'],
			'quantity' => 1
		];
	}else{
		$watch[$existed]['quantity']++;
	}
	$_SESSION[WATCH] = $watch;

}

header('location: index.php');

?>