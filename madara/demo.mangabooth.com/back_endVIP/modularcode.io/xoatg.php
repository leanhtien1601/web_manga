<?php 
    include '../../db.php';
    if (isset($_GET['maxoa'])) {
        $maxoa=$_GET['maxoa'];
        $sql="delete from authors where id='$maxoa' ";
        $kq=$conn->prepare($sql);
        if ($kq->execute()) {
            header("Location:items-listtg.php");
        } else{
            echo "Lỗi";
        }
    }

     ?>