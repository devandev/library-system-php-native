<?php
 include_once("../../../proccess/connect.php");

$namaM = $_POST["nama_anggota"];
$password = $_POST["password_anggota"];
$alamat = $_POST["alamat_anggota"];
$telp = $_POST["telp_anggota"];

$sql = "INSERT INTO tb_anggota VALUES(null,'$namaM','$password','$alamat','$telp')";
$result = mysqli_query($conn,$sql);

if($result == true){
    header("location:select_Member.php");
}else{
    echo "cannot adding new data to table member !";
}
