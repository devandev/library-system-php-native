<?php
include_once('connect.php');
if(isset($_POST['btn_daftar'])){
    $nama = $_POST["nama_anggota"];
    $alamat = $_POST["alamat_anggota"];
    $password = $_POST["password_anggota"];
    $telp = $_POST["telp_anggota"];

    $sql = "INSERT INTO tb_anggota VALUES(null,'$nama','$password','$alamat','$telp')";

    $result = mysqli_query($conn,$sql);
    var_dump($result);
    if($result == true){
        header("location:../index.php");
    }else{
        echo "tidak dapat menambahkan anggota !";
    }
}