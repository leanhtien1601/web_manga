<?php 
    include '../../db.php';
    if (isset($_GET['maxoa'])) {
        $maxoa=$_GET['maxoa'];
        $sql="delete from categories where id='$maxoa' ";
        $kq=$conn->prepare($sql);
        if ($kq->execute()) {
            header("Location:items-listqc.php");
        } else{
            echo "Lỗi";
        }
    }

     ?>