<?php
include_once("../../../proccess/connect.php");
$id = $_POST['id_buku'];

$sql = "DELETE FROM tb_buku WHERE id_buku = '$id'";
$result = mysqli_query($conn,$sql);
if($result == true){
    header('location:select_buku.php');
}else{
    echo "error while delete some data";
}