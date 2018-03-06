<?php
    include_once("../../../proccess/connect.php");
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
    <div class="container">
    <?php
        $sql = "SELECT * FROM tb_anggota";
        $result = mysqli_query($conn,$sql);
        //var_dump($result);
        if(mysqli_num_rows($result) > 0){ ?>
        <div class="tb-container">
            <div class="tb-title">
                <h2>Anggota Perpustakaan</h2>
                <button class="btn-tambah-data">Tambah</button>
            </div>
            <table class="tb-select">
                <tr>
                    <th>Id Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Password Anggota</th>
                    <th>Alamat Anggota</th>
                    <th>Telp Anggota</th>
                    <th>Edit</th>
                    <th>Hapus</th>

                </tr>
                <?php 
                while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row[0];?></td>
                            <td><?php echo $row[1];?></td>
                            <td><?php echo $row[2];?></td>
                            <td><?php echo $row[3];?></td>
                            <td><?php echo $row[4];?></td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Hapus</a></td>
                        </tr>
  <?php         } 
        } ?>
            </table>
        </div>    
    </div>
    <?php include_once("../../footer.php") ?>
</body>
</html>