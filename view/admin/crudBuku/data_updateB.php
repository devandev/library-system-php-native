<?php
include_once("../../../proccess/connect.php");
$id = $_POST['id_buku'];
$nama = $_POST['nama_buku'];
$jenis = $_POST['jenis_buku'];
$penerbit = $_POST['penerbit'];
$penyusun = $_POST['penyusun'];

$sql = "UPDATE tb_buku SET nama_buku = '$nama', jenis_buku = '$jenis', penerbit = '$penerbit', penyusun = '$penyusun' WHERE id_buku = '$id'";
$result = mysqli_query($conn, $sql);
if($result == true){
    header('location:select_buku.php');
}else{
    echo "cannot update data from tb_buku";
}