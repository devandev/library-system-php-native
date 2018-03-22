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
        <form class="add-form" action="data_insertT.php" method="post">
            <h2>Tambah Transaksi</h2>
            <button class="btn_close">x</button>
            <input type="number" name="id_transaksi" placeholder="Id Transaksi :" required>
            
            <select name="id_admin" id="id_admin" required>
            <option disabled selected>Pilih Id Admin</option>
            <?php
                 include("../../../proccess/connect.php");
                 $sql ="SELECT id_admin, nama_admin FROM tb_admin";
                 $result = mysqli_query($conn,$sql);
                 if($result == true){
                     while($row = mysqli_fetch_array($result)){ ?>
                        <option><?php echo $row[0]?> -> ( <?php echo $row[1]?> )</option>
                <?php }
                 }
            ?>  
            </select>

             <select name="id_anggota" id="id_anggota" required>
            <option disabled selected>Pilih Id Anggota</option>
            <?php
                 $sql ="SELECT id_anggota, nama_anggota FROM tb_anggota";
                 $result = mysqli_query($conn,$sql);
                 if($result == true){
                     while($row = mysqli_fetch_array($result)){ ?>
                        <option><?php echo $row[0]?> -> ( <?php echo $row[1]?> )</option>
                <?php }
                 }
            ?>  
            </select>

             <select name="id_buku" id="id_buku" required>
            <option disabled selected>Pilih Id Buku</option>
            <?php
                 $sql ="SELECT id_buku, nama_buku FROM tb_buku";
                 $result = mysqli_query($conn,$sql);
                 if($result == true){
                     while($row = mysqli_fetch_array($result)){ ?>
                        <option><?php echo $row[0]?> -> ( <?php echo $row[1]?> )</option>
                <?php }
                 }
                mysqli_close($conn);
            ?>  
            </select>
            <input type="date" name="waktu_pinjam" id="waktu_pinjam">
            <input type="date" name="waktu_kembali" id="waktu_kembali">
            <input type="submit" id="btn_submit" name="btn_submit" value="Tambah">
        </form>
    </div>

    <div class="background-form-up">
        <form class="update-form" method="post" action="data_updateT.php">
        <h2>Edit Transaksi</h2>
            <button class="btn_close">x</button>
            <input type="number" name="id_transaksi" id="id_transaksi_up" placeholder="Id Transaksi :">
            
            <select name="id_admin" id="id_admin_up" required>
            <option disabled selected>Pilih Id Admin</option>
            <?php
                 include("../../../proccess/connect.php");
                 $sql ="SELECT id_admin, nama_admin FROM tb_admin";
                 $result = mysqli_query($conn,$sql);
                 if($result == true){
                     while($row = mysqli_fetch_array($result)){ ?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[0]?> -> ( <?php echo $row[1]?> )</option>
                <?php }
                 }
            ?>  
            </select>

             <select name="id_anggota" id="id_anggota_up" required>
            <option disabled selected>Pilih Id Anggota</option>
            <?php
                 $sql ="SELECT id_anggota, nama_anggota FROM tb_anggota";
                 $result = mysqli_query($conn,$sql);
                 if($result == true){
                     while($row = mysqli_fetch_array($result)){ ?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[0]?> -> ( <?php echo $row[1]?> )</option>
                <?php }
                 }
            ?>  
            </select>

             <select name="id_buku" id="id_buku_up" required>
            <option disabled selected>Pilih Id Buku</option>
            <?php
                 $sql ="SELECT id_buku, nama_buku FROM tb_buku";
                 $result = mysqli_query($conn,$sql);
                 if($result == true){
                     while($row = mysqli_fetch_array($result)){ ?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[0]?> -> ( <?php echo $row[1]?> )</option>
                <?php }
                 }
                mysqli_close($conn);
            ?>  
            </select>
            <input type="date" name="waktu_pinjam" id="waktu_pinjam_up">
            <input type="date" name="waktu_kembali" id="waktu_kembali_up">
            <input type="submit" id="btn_update" name="btn_update" value="Update">
        </form>
    </div>
    <div>
        <a href="../admin_home.php">< back To Home</a>
    </div> 
    <div class="container">
    </div>

    <script src="../../../js/jquery-3.1.1.js"></script>
    <script src="../../../js/script.js"></script>
    ?<script src="../../../js/transaksi.js"></script>
    <?php include_once("../../footer.php") ?>
</body>
</html>