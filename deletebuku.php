<?php
    require ("db.php");
    $kodebrg=$_GET['kode'];
    $sql="delete from buku where kode='$kodebrg' ";
    $hasil=mysqli_query($conn,$sql);
    if($hasil) {
        header('Location: index.php');
    }
?>