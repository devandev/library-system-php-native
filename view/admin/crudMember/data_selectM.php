<?php
        include_once("../../../proccess/connect.php");
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
                            <td><a class="btn_update" id="<?php echo $row[0]?>" href="#">Edit</a></td>
                            <td><a class="btn_delete" id="<?php echo $row[0]?>" href="#">Hapus</a></td>
                        </tr>
  <?php         } 
        } ?>
            </table>
        </div>  