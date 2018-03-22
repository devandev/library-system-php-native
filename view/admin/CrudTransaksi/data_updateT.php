<?php
include_once("../../../proccess/connect.php");
$idT = $_POST['id_transaksi'];
$idAd = $_POST['id_admin'];
$idAn = $_POST['id_anggota'];
$idB = $_POST['id_buku'];
$wtP = $_POST['waktu_pinjam'];
$wtK = $_POST['waktu_kembali'];

$sql = "UPDATE tb_transaksi SET id_admin = '$idAd', id_anggota = '$idAn', id_buku = '$idB', waktu_pinjam = '$wtP', waktu_kembali = '$wtK' WHERE id_transaksi = '$idT'";
$result = mysqli_query($conn,$sql);
if($result == true){
    header('location:select_Transaksi.php');
}else{
    echo "Error while Updating tb_transaksi";
}