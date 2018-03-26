<?php
    session_start();
    if($_SESSION["id"] == ""){
        header("location:../../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Liblary Member</title>
</head>
<body>
    <?php include_once("../../header.php") ?>
    <div class="background-form">
        <form class="add-form" method="post">
            <h2>Tambah Buku</h2>
            <button class="btn_close">x</button>
            <input type="number" name="id_buku" id="id_buku" placeholder="Id Buku :" disabled>
            <input type="text" name="nama_buku" id="nama_buku" placeholder="Nama Buku :" required>
            <input type="text" name="jenis_buku" id="jenis_buku" placeholder="Jenis Buku :" required>
            <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit :" required>
            <input type="telp" name="penyusun" id="penyusun" placeholder="Penyusun :" required>
            <input type="submit" id="btn_submit" name="btn_submit" value="Tambah">
        </form>
    </div>

    <div class="background-form-up">
        <form class="update-form" method="post" action="data_updateB.php">
            <h2>Edit Buku</h2>
            <button class="btn_close">x</button>
            <input type="number" name="id_buku" id="id_buku_up" placeholder="Id Buku :" hidden>
            <input type="text" name="nama_buku" id="nama_buku_up" placeholder="Nama Buku :" required>
            <input type="text" name="jenis_buku" id="jenis_buku_up" placeholder="Jenis Buku :" required>
            <input type="text" name="penerbit" id="penerbit_up" placeholder="Penerbit :" required>
            <input type="telp" name="penyusun" id="penyusun_up" placeholder="Penyusun :" required>
            <input type="submit" id="btn_submit_up" name="btn_update" value="Tambah">
        </form>
    </div>

    
    <div class="btn-back">
        <a href="../admin_home.php">&laquo; back</a>
    </div>     
    <div class="container">
    </div>

    <script src="../../../js/jquery-3.1.1.js"></script>
    <script src="../../../js/script.js"></script>
    <script src="../../../js/book.js"></script>
    <?php include_once("../../footer.php") ?>
</body>
</html>