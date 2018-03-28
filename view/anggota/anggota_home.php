<?php
    session_start();
    if($_SESSION["id"] == ""){
        header("location:../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page Anggota</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <nav>
        <ul>
    <?php
        include_once('../../proccess/connect.php');
        $id = $_SESSION["id"];
        $sql ="SELECT nama_anggota FROM tb_anggota WHERE nama_anggota = '$id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){ 
            $row = mysqli_fetch_array($result);
        } 
    ?>      
            <li><a id= "logo-nav" href="#">Welcome back <span class="user"><?php print $row[0] ;?></span></a></li>
            <li><a id="admin-nav" href="crudBuku/select_buku.php">Buku List</a></li>
            <li><a id="admin-nav" href="crudTransaksi/select_transaksi.php">Transaksi List</a></li>
            <li><a id="logout" href="../../proccess/logout.php">logout</a></li>
        </ul>
    </nav>
    <?php include_once('../header.php'); ?>
        <div class="container tersedia">
            
        </div>

        <div class="container tidakTersedia">
            
        </div>
    <?php
        mysqli_close($conn);
        include_once("../footer.php");
    ?>
    <script src="../../js/jquery-3.1.1.js"></script>
    <script src="../../js/script.js"></script>   
    <script src="../../js/infobuku.js"></script>  
</body>
</html>


