<?php
include_once("../../../proccess/connect.php");
$sql = "SELECT * FROM tb_transaksi";
$result = mysqli_query($conn,$sql);
if($result == true){ ?>
        <div class="tb-container">
            <div class="tb-title">
                <h2>Transaksi Perpustakaan</h2>
                <button class="btn-tambah-data">Tambah</button>
            </div>
                <table class="tb-select">
                    <tr>
                        <th>Id transaksi</th>
                        <th>Id Admin</th>
                        <th>Id Anggota</th>
                        <th>Id Buku</th>
                        <th>Waktu Pinjam</th>
                        <th>Waktu Kembali</th>
                        <th>edit</th>
                        <th>Hapus</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row[0]?></td>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[4]?></td>
                            <td><?php echo $row[5]?></td>
                            <td><a class="btn_update" href="#">Edit</a></td>
                            <td><a class="btn_delete" href="#">Hapus</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
        </div>
<?php
}
?>