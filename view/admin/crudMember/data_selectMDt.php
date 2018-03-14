<?php
include_once("../../../proccess/connect.php");

if(isset($_POST['id_anggota'])){
    $id = $_POST['id_anggota'];
    $nama = $_POST['nama_anggota'];
    $pass = $_POST['password_anggota'];
    $alamat = $_POST["alamat_anggota"];
    $telp = $_POST["telp_anggota"];

    $sql = "UPDATE tb_anggota SET nama_anggota ='$nama', password_anggota = '$pass', alamat_anggota = '$alamat', telp_anggota = '$telp' WHERE id_anggota = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        header('location:select_Member.php');
    }
}