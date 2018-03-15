<?php
include_once("../../../proccess/connect.php");
if(isset($_POST['id_anggota'])){
    $id = $_POST['id_anggota'];
    echo $id;
    $sql = "DELETE FROM tb_anggota WHERE id_anggota = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("location:select_Member.php");
    }
}