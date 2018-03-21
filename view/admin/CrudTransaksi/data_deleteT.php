<?php
include_once("../../../proccess/connect.php");
$id = $_POST['id_transaksi'];
$sql = "DELETE FROM tb_transaksi WHERE id_transaksi = '$id'";
$result = mysqli_query($conn,$sql);
if($result == true){
    header('location:select_Transaksi.php');
}