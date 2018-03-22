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
        <form class="add-form" action="data_insertM.php" method="post">
            <h2>Tambah Anggota</h2>
            <button class="btn_close">x</button>
            <input type="number" name="id_anggota" placeholder="Id Anggota :" disabled>
            <input type="text" name="nama_anggota" placeholder="Nama Anggota :" required>
            <input type="password" name="password_anggota" placeholder="Password Anggota :" required>
            <input type="text" name="alamat_anggota" placeholder="Alamat Anggota :" required>
            <input type="telp" name="telp_anggota" placeholder="Telp" required>
            <input type="submit" id="btn_submit" name="btn_submit" value="Tambah">
        </form>
    </div>

    <div class="background-form-up">
        <form class="update-form" action="data_selectMDt.php" method="post">
            <h2>Edit Anggota</h2>
            <button class="btn_close">x</button>
            <input type="number" name="id_anggota" id="id_anggota" hidden>
            <input type="text" name="nama_anggota" id="nama_anggota" placeholder="Nama Anggota :">
            <input type="text" name="password_anggota" id="password_anggota" placeholder="Password Anggota :">
            <input type="text" name="alamat_anggota" id="alamat_anggota" placeholder="Alamat Anggota :">
            <input type="telp" name="telp_anggota" id="telp_anggota" placeholder="Telp"git >
            <input type="submit" name="btn_update" id="btn_update" value="Update">
        </form>
    </div>

    
    <div>
        <a href="../admin_home.php">< back To Home</a>
    </div>    
    <div class="container">
    </div>

    <script src="../../../js/jquery-3.1.1.js"></script>
    <script src="../../../js/script.js"></script>
    <script src="../../../js/member.js"></script>
    <?php include_once("../../footer.php") ?>
</body>
</html>