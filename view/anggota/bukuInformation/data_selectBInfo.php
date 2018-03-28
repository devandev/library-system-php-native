<?php
        include_once("../../../proccess/connect.php");
        $sql = "SELECT * FROM tb_buku WHERE NOT EXISTS(SELECT * FROM tb_transaksi WHERE tb_transaksi.id_buku = tb_buku.id_buku)";
        $result = mysqli_query($conn,$sql);
        //var_dump($result);
        if(mysqli_num_rows($result) > 0){ ?>
        
        <div class="tb-container">
            <div class="tb-title">
                <h2>Buku Yang Masih Tersedia</h2>
            </div>
            <table class="tb-select">
                <tr>
                    <th>Id Buku</th>
                    <th>Nama Buku</th>
                    <th>Jenis Buku</th>
                    <th>Penerbit</th>
                    <th>Penyusun</th>
                </tr>
                <?php 
                while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row[0];?></td>
                            <td><?php echo $row[1];?></td>
                            <td><?php echo $row[2];?></td>
                            <td><?php echo $row[3];?></td>
                            <td><?php echo $row[4];?></td>
                        </tr>
  <?php         } 
        } ?>
            </table>
        </div>  