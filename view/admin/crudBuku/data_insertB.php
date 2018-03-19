<?php
include_once("../../../proccess/connect.php");
    $nama = $_POST['nama_buku'];
    $jenis = $_POST['jenis_buku'];
    $penerbit = $_POST['penerbit'];
    $penyusun = $_POST['penyusun'];

    $sql = "INSERT INTO tb_buku VALUES(null,'$nama','$jenis','$penerbit','$penyusun')";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("location:select_buku.php");
    }else{
        echo "error while insert data !";
    }