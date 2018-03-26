<?php
include_once("../../../proccess/connect.php");

$waktu = date('Y-m-d');
// $sql = "SELECT * FROM tb_transaksi WHERE waktu kembali <= '$waktu'";
//$sql = "SELECT * FROM tb_transaksi";

// $sql="SELECT  b.id_transaksi, a.nama_anggota,b.waktu_pinjam FROM 
// tb_anggota a JOIN tb_transaksi b ON a.id_anggota=b.id_anggota";

$sql="SELECT  id_transaksi, nama_anggota, nama_buku, waktu_pinjam, waktu_kembali FROM 
tb_transaksi JOIN tb_anggota ON tb_anggota.id_anggota = tb_transaksi.id_anggota
JOIN tb_buku ON tb_transaksi.id_buku = tb_buku.id_buku WHERE waktu_kembali > '$waktu'";

$result = mysqli_query($conn,$sql);
if($result == true){ ?>
    <div class="tb-container">
        <div class="tb-title">
            <h2>Anggota Yang sedang meminjam</h2>
        </div>
        <table class="tb-select">
            <tr>
                <th>Id Transaksi</th>
                <th>Nama Anggota</th>
                <th>Nama Buku</th>
                <th>Waktu Pinjam</th>
                <th>Waktu Kembali</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row[0]?></td>
                    <td><?php echo $row[1]?></td>
                    <td><?php echo $row[2]?></td>
                    <td><?php echo $row[3]?></td>
                    <td><?php echo $row[4]?></td>
                </tr>
        <?php }
            ?>
        </table>
    </div>
<?php
}
?>