<?php
include_once("../../../proccess/connect.php");
//if(isset($_POST['btn_sumbit'])){
    $idTransaksi = $_POST['id_transaksi'];
    $idAdmin = $_POST['id_admin'];
    $idAnggota = $_POST['id_anggota'];
    $idBuku = $_POST['id_buku'];
    $wtpinjam = $_POST['waktu_pinjam'];
    $wtkembali = $_POST['waktu_kembali'];
    // var_dump($idTransaksi);
    // var_dump($idAdmin);
    // var_dump($idAnggota);
    // var_dump($wtpinjam);
    $sql = "INSERT INTO tb_transaksi VALUES('$idTransaksi','$idAdmin','$idAnggota','$idBuku','$wtpinjam','$wtkembali')";
    $result= mysqli_query($conn, $sql);
    var_dump($result);
    if($result == true){
        header('location:select_Transaksi.php');
    }
//}else{
//    echo "data tidak masuk!";
//}