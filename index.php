<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="img-container">
        <div class="background-form">
            <form id="daftar" action="proccess/daftar.php" method="post">
                <h3>Form Pendaftaran Anggota :</h3>
                <button type="button" class="btn_close">&#120;</button>
                <input type="text" name="id_anggota" placeholder="Id Anggota :" disabled>
                <input type="text" name="nama_anggota" placeholder="Nama Anggota :">
                <input type="password" name="password_anggota" placeholder="Password Anggota :">
                <input type="text" name="alamat_anggota" placeholder="Alamat Anggota :">
                <input type="tel" name="telp_anggota" placeholder="Telp Anggota :">
                <input type="submit" value="daftar" name="btn_daftar">
            </form>
        </div>
       <form id="login" action="proccess/validate.php" method="POST">
       <img src="img/logologin.svg" alt="gambar logo login" id="logo-login">
            <input type="text" name="username" id="username" placeholder="Username :" required>
            <select name="jabatan" id="jabatan">
                <option value="anggota">Anggota</option>
                <option value="admin">Admin</option>
            </select>
            <input type="password" name="password" id="password" placeholder="password :" required>
            <input type="submit" name="btn_login" value="Login">
            <a id ="btn-daftar" href="#">buat akun ? Register</a>
        </form>
    </div>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/script.js"></script>
</body>
</html>